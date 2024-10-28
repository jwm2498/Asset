
<?php
// Database credentials
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "assetinventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from table
$sql = "SELECT * FROM systemunit";
$result = $conn->query($sql);
 $_GET['entry'];
 $_GET['name'];
 $_GET['model'];
$_GET['serial'];
$_GET['status'];
 $_GET['yom'];
 $_GET['ram'];
 $_GET['hdd'];
 $_GET['cpu'];
 $_GET['location'];
 $_GET['user'];
 $_GET['contact'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset inventory system</title>
	<script>
        function printFormToPDF() {
            const printContents = document.getElementById('right').innerHTML;
            const originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
<style>     body {
            font-family: Times new roman;
            margin: 0;
            padding: 0;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 350px 1fr;
            grid-template-rows: 60px 1fr 50px;
            height: auto;
            gap: 10px;
        }
        
           /* Header Styles */
        .header {
			grid-column-start:1;
			grid-column-end:4;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:#009933;
            padding: 10px 20px;
        }
        .logo {
            font-size: 30px;
            font-weight: bold;
			font-family:Times new roman;
            color: black;
        }
        /* Menu Styles */
        .menu {
            list-style: none;
            display: flex;
			float:right;
        }
        .menu li {
            position: relative;
        }
        .menu li a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
            transition: background-color 0.3s ease;
        }
        .menu li a:hover {
            background-color: blue;
            color: white;
        }
        /* Dropdown Menu Styles */
        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: lightgreen;
            min-width: 150px;
        }
        .submenu li a {
            padding: 10px 20px;
        }
        .submenu li a:hover {
            background-color: blue;
        }
        /* Show submenu on hover */
        .menu li:hover .submenu {
            display: block;
			list-style:none;
        }
        aside.left {
			grid-column-start:2;
			grid-column-end:3;
            grid-row: 2 ;
            background-color: #f1f1f1;
            padding: 10px;
			float:center;
            overflow: auto;
			border-radius:5px;
        }
       
        footer {
            grid-column: 1 / span 2;
            background-color: #009933;
            color: black;
            text-align: center;
            padding: 10px;
        }
       
		.right-content h1 {
            text-align: center;
           
        }
	   .right-content h3{
            text-align: center;
            text-decoration: underline;
        }
		 
		
        .input-fields {
            display: flex;
            flex-direction: column;
			border:none;
			width:300px;
			

			
        }
        .input-fields input {
			
            margin: 5px 0;
			
        }
        .buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
			background-color:#fff;
			font-size:14;
			

        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
		.textarea{
			width:250px;
			
		}
  </style>
</head>
<body>
 <div class="grid-container">
 
    <header class="header">
        <div class="logo">Asset Inventory System</div>
        <ul class="menu">
            <li><a href="pc.php">Home</a>
              
            </li>
            <li><a href="#">Assets</a>
                <ul class="submenu">
                    <li><a href="pc.php">Add New</a></li>
                    <li><a href="viewpc.php">View</a></li>					 
					<li><a href="printpc.php">Print </a></li>                
					
					
                </ul>
           
        </ul>
    </header>

		<aside class="left">
            <div class="right-content">
			<div id="right">
			<header>
			<h1>Asset Inventory System</h1>			
			</header>
          <h3>System Unit Transfer Form </h3>
                <form class="input-fields" action="#" method="GET">
				<label><i>*remember to fill all the fields before submitting this form for printing</i></label>
				<label>Asset Entry Number:<input type="text" id="entry" name="entry" value="<?php echo $_GET['entry'];?>" readonly></label>                   
                <label>Asset Name/make:<input type="text" id="name" name="name" value="<?php echo $_GET['name'];?>"placeholder="Enter the Asset Name" ></label>                 
                <label>Asset Model Number:<input type="text" id="model" name="model" value="<?php echo $_GET['model'];?>" placeholder="Enter the Asset Model" required ></label>   
                <label>Asset Serial Number: <input type="varchar" id="serial" name="serial" value="<?php echo $_GET['serial'];?>" placeholder="Enter the Serial Number" required> </label>                                    
                <label>Asset Current Status: <input type="text" id="status" name="status" value="<?php echo $_GET['status'];?>" placeholder="Enter the Asset Status" required></label>                                        
                <label>Year of Manufacture: <input type="number" id="yom" name="yom" value="<?php echo $_GET['yom'];?>" placeholder="Enter the Year of Mfg" required> </label>                            
                <label>RAM Size(in GBs): <input type="number" id="ram" name="ram" value="<?php echo $_GET['ram'];?>"placeholder="Enter the RAM (in GBs)" required> </label>                
                <label>HDD Size(in GBs): <input type="number" id="hdd" name="hdd" value="<?php echo $_GET['hdd'];?>"placeholder="Enter the HDD size (in GBs)" required> </label> 
                <label>CPU Specs(i.e corei3): <input type="varchar" id="cpu" name="cpu"value="<?php echo $_GET['cpu'];?>" placeholder="Enter the Cpu Specs" required></label>
				<label>Asset Current Office: <input type="varchar" id="location" name="location" value="<?php echo $_GET['location'];?>"placeholder="Enter Location(Block&Office)" required></label>
				<label>Asset Current User: <input type="Varchar" id="user" name="user" value="<?php echo $_GET['user'];?>" placeholder="Enter Employee Number" required></label>
				<label>Asset User's contact: <input type="varchar" id="contact" name="contact" value="<?php echo $_GET['contact'];?>" placeholder="Enter Employee Contact" required></label>
				<label>Asset Transfer To: <input type="varchar" id="nlocation" name="nlocation"  required></label>
				<label>Asset Next User: <input type="Varchar" id="nuser" name="nuser" required></label>
				<label>Next User's Contact:<input type="varchar" id="ncontact" name="ncontact"  required></label>
				<label>Reason For Transfer:</label><textarea rows="4"cols="10" name="purpose" wrap="physical" required>
				</textarea>
				<label>Authoriser Name:<input type="varchar" id="authoriser" name="authoriser" required></label>
				<label>Authorisation Date:<input type="date" id="date" name="date" required></label>
				<label>Authorisation Signature:<input type="varchar" id="authorisedate" name="authorisedate"  required></label>
				<label>Current User Signature:<input type="varchar" id="cuser" name="cuser" required></label>
				<label>Release Date:<input type="date" id="date" name="date" required></label>
				<label>New User Signature:<input type="varchar" id="nu" name="nu" required></label>
				<label>Receive Date:<input type="date" id="date" name="date" required></label>
				
				 </div>                    
                  <div class="buttons">
                  <button type="submit" name="submit">Update</button>						
                 <button class="print-btn" onclick="printFormToPDF()">Print Form to PDF</button>
                 </div>
					
                </form>
				<?php
				//code to update the database table pc
				
				if(isset($_GET['submit'])){
$entry=$_GET['entry'];
$name=$_GET['name'];
$model=$_GET['model'];
$serial=$_GET['serial'];
$status=$_GET['status'];
$yom=$_GET['yom'];
$ram=$_GET['ram'];
$hdd=$_GET['hdd'];
$cpu=$_GET['cpu'];
$location=$_GET['location'];
$user=$_GET['user'];
$contact=$_GET['contact'];
$nlocation=$_GET['nlocation'];
$nuser=$_GET['nuser'];
$ncontact=$_GET['ncontact'];

$sql="UPDATE systemunit SET name='$name',  model='$model', serial='$serial'
, status='$status', yom='$yom', ram='$ram', hdd='$hdd', cpu='$cpu', location='$nlocation', 
user='$nuser', contact='$ncontact' WHERE entry='$entry'";
$data=mysqli_query($conn, $sql);
					if($data){
						
						echo "Successfully updated";
						
					}
				else{
					echo "No updates have been effected";
				}
					
				}
				
				
				?>
        </div>
        </aside>
 
    </div>
	    <!-- Footer -->
        <footer>
            <p>© 2024 Asset Inventory System</p>
        </footer>
</div>
</body>
</html>
