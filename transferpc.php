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

<style>     body {
            font-family: Times new roman;
            margin: 0;
            padding: 0;
        }
		 @media print {
		 
            .print-area, .print-area * {
                visibility: visible;
            }
            .print-area {
                position: absolute;
                top: 0;
                left: 0;
            }
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
				<form id="myForm" class="input-fields">
 <label for="entry">Asset Entry Number:</label>  
 <input type="number" id="entry" name="entry" 
 value="<?php echo $_GET['entry'];?>" readonly>
 
    <label for="name">Asset Name/make:</label>
    <input type="text" id="name" name="name"
	value="<?php echo $_GET['name'];?>" readonly>
	
	<label for="model">Asset Model Number:</label>
    <input type="varchar" id="model" name="model" 
	value="<?php echo $_GET['model'];?>" readonly>
	
	 <label for="serial">Asset Serial Number:</label>
    <input type="varchar" id="serial" name="serial" 
	value="<?php echo $_GET['serial'];?>" readonly >
	
	 <label for="status">Asset Current Status:</label>
    <input type="text" id="status" name="status"
	value="<?php echo $_GET['status'];?>" readonly>
	
	 <label for="yom">Year of Manufacture:</label>
    <input type="int" id="yom" name="yom"
	value="<?php echo $_GET['yom'];?>" readonly >
	
		 <label for="ram">RAM Size(in GBs):</label>
    <input type="float" id="ram" name="ram" 
	value="<?php echo $_GET['ram'];?>" readonly>
	
	<label for="hdd">HDD Size(in GBs):</label>
    <input type="int" id="hdd" name="hdd"
	value="<?php echo $_GET['hdd'];?>"readonly>
	
	<label for="cpu">CPU Specs(i.e corei3):</label>
    <input type="varchar" id="cpu" name="cpu"
	value="<?php echo $_GET['cpu'];?>"readonly>
	
	<label for="location">Asset Current Office:</label>
    <input type="varchar" id="location" name="location"
	value="<?php echo $_GET['location'];?>"readonly>
	
	<label for="user">Asset Current User:</label>
    <input type="varchar" id="user" name="user"
	value="<?php echo $_GET['user'];?>"	readonly>
	
	<label for="contact">Asset User's contact:</label>
    <input type="varchar" id="contact" name="contact"
	value="<?php echo $_GET['contact'];?>" readonly>
	
	<label for="nlocation">Asset Transfer To:</label>
    <input type="varchar" id="nlocation" name="nlocation" required>
	<label for="nuser">Asset Next User:</label>
    <input type="varchar" id="nuser" name="nuser" required>
	<label for="ncontact">Next User's Contact:</label>
    <input type="varchar" id="ncontact" name="ncontact" required>
	<label for="message">Reason For Transfer:</label>
    <textarea id="message" name="message" required></textarea>
	<label for="authoriser">Authoriser Name:</label>
    <input type="text" id="authoriser" name="authoriser" placeholder="Mr.John Sambo-Head of Section" required><br><br>
	<label for="ad">Authorisation Date:</label>
    <input type="date" id="ad" name="ad" placeholder="pick date"required>
	<label for="as">Authorisation Signature:</label>
    <input type="text" id="as" name="as">
	<label for="ard">Asset Release Date:</label>
    <input type="date" id="ard" name="ard""pick date"required>
	<label for="cus">Current User Signature:</label>
    <input type="text" id="cus" name="cus">
	<label for="ard1">Asset Receive Date:</label>
    <input type="date" id="ard1" name="ard1""pick date"required>
	<label for="nus">New User Signature:</label>
    <input type="text" id="nus" name="nus">  

    </form>
<button type="button" onclick="preparePrint()">Prepare Print View</button>
    <button type="button" onclick="window.print()">Print to PDF</button>
<div class="print-area" style="display:none">
    <h2>Form Data</h2>
	<p><strong>Entry:</strong> <span id="printEntry"></span></p>
    <p><strong>Name:</strong> <span id="printName"></span></p>
	<p><strong>Model:</strong> <span id="printModel"></span></p>
	<p><strong>Serial:</strong> <span id="printSerial"></span></p>
	<p><strong>Status:</strong> <span id="printStatus"></span></p>
	<p><strong>Yom:</strong> <span id="printYom"></span></p>
	<p><strong>RAM:</strong> <span id="printRam"></span></p>
	<p><strong>HDD:</strong> <span id="printHdd"></span></p>
	<p><strong>CPU:</strong> <span id="printCpu"></span></p>
	<p><strong>Current Location:</strong> <span id="printLocation"></span></p>
	<p><strong>Current User:</strong> <span id="printUser"></span></p>
	<p><strong>User's Contact:</strong> <span id="printContact"></span></p>
	<p><strong>Next Location:</strong> <span id="printNlocation"></span></p>
	<p><strong>Next User:</strong> <span id="printNuser"></span></p>
	<p><strong>Next User Contact:</strong> <span id="printNcontact"></span></p>
	<p><strong>Reason for Transfer:</strong> <span id="printMessage"></span></p>
	<p><strong>Transfer Authoriser:</strong> <span id="printAuthoriser"></span></p>
	<p><strong>Transfer Date:</strong> <span id="printAdate"></span></p>
	<p><strong>Authoriser's Signature:</strong> <span id="printAsign"></span></p>
	<p><strong>Release Date:</strong> <span id="printAreleasedate"></span></p>
	<p><strong>Current User's Signature:</strong> <span id="printCusersign"></span></p>
	<p><strong>Release Date:</strong> <span id="printArd1"></span></p>
	<p><strong>New User's Signature:</strong> <span id="printNus"></span></p>

</div>
<script>
    function preparePrint() {
        // Get form data and display it in the printable section
		 document.getElementById('printEntry').textContent = document.getElementById('entry').value;
        document.getElementById('printName').textContent = document.getElementById('name').value;
        document.getElementById('printModel').textContent = document.getElementById('model').value;
		document.getElementById('printSerial').textContent = document.getElementById('serial').value;
		document.getElementById('printStatus').textContent = document.getElementById('status').value;
		document.getElementById('printYom').textContent = document.getElementById('yom').value;
		document.getElementById('printRam').textContent = document.getElementById('ram').value;
		document.getElementById('printHdd').textContent = document.getElementById('hdd').value;
		document.getElementById('printCpu').textContent = document.getElementById('cpu').value;
		document.getElementById('printLocation').textContent = document.getElementById('location').value;
		document.getElementById('printUser').textContent = document.getElementById('user').value;
		document.getElementById('printContact').textContent = document.getElementById('contact').value;
		document.getElementById('printNlocation').textContent = document.getElementById('nlocation').value;
		document.getElementById('printNuser').textContent = document.getElementById('nuser').value;
		document.getElementById('printNcontact').textContent = document.getElementById('ncontact').value;
		document.getElementById('printMessage').textContent = document.getElementById('message').value;		
		document.getElementById('printAuthoriser').textContent = document.getElementById('authoriser').value;
		document.getElementById('printAdate').textContent = document.getElementById('ad').value;
		document.getElementById('printAsign').textContent = document.getElementById('as').value;
		document.getElementById('printAreleasedate').textContent = document.getElementById('ard').value;
        document.getElementById('printCusersign').textContent = document.getElementById('cus').value;
		document.getElementById('printArd1').textContent = document.getElementById('ard1').value;
		document.getElementById('printNus').textContent = document.getElementById('nus').value;
		// Show the printable view
        document.querySelector('.print-area').style.display = 'block';
    }
</script>	
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
