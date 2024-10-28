
<?php
// Database credentials
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password is empty
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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-template-rows: 60px 1fr 50px;
            height: 100vh;
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
            font-size: 24px;
            font-weight: bold;
			font-family:berlin sans fb;
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
            grid-row: 2 ;
            background-color: #f1f1f1;
            padding: 10px;
            overflow: auto;
        }
        aside.right {
            grid-row: 2 / span 2;
            background-color: #f9f9f9;
            padding: 10px;
            overflow: auto;
        }
        footer {
            grid-column: 1 / span 2;
            background-color: #009933;
            color: black;
            text-align: center;
            padding: 10px;
        }
        .right-content h2 {
            text-align: center;
            text-decoration: underline;
        }
        .input-fields {
            display: flex;
            flex-direction: column;
        }
        .input-fields label, .input-fields input {
            margin: 5px 0;
        }
        .buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
			background-color:green;
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
          <h2>New System Unit</h2>
                <form class="input-fields" action="#" method="GET">
				
				<input type="number" id="entry" name="entry" value="<?php echo $_GET['entry'];?>"abs>                   
                <input type="text" id="name" name="name" value="<?php echo $_GET['name'];?>"placeholder="Enter the Asset Name" required>                 
                <input type="text" id="model" name="model" value="<?php echo $_GET['model'];?>" placeholder="Enter the Asset Model" required >   
                <input type="varchar" id="serial" name="serial" value="<?php echo $_GET['serial'];?>" placeholder="Enter the Serial Number" required>                                     
                <input type="text" id="status" name="status" value="<?php echo $_GET['status'];?>" placeholder="Enter the Asset Status" required>                                        
                <input type="number" id="yom" name="yom" value="<?php echo $_GET['yom'];?>" placeholder="Enter the Year of Mfg" required>                             
                <input type="number" id="ram" name="ram" value="<?php echo $_GET['ram'];?>"placeholder="Enter the RAM (in GBs)" required>                 
                <input type="number" id="hdd" name="hdd" value="<?php echo $_GET['hdd'];?>"placeholder="Enter the HDD size (in GBs)" required>  
                <input type="varchar" id="cpu" name="cpu"value="<?php echo $_GET['cpu'];?>" placeholder="Enter the Cpu Specs" required>
				<input type="varchar" id="location" name="location" value="<?php echo $_GET['location'];?>"placeholder="Enter Location(Block&Office)" required>
				<input type="Varchar" id="user" name="user" value="<?php echo $_GET['user'];?>" placeholder="Enter Employee Number" required>
				<input type="number" id="contact" name="contact" value="<?php echo $_GET['contact'];?>" placeholder="Ernter Employee Contact" required>
				                       
                     <div class="buttons">
                        <button type="submit" name="submit">Update</button>
                        
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

					$sql="UPDATE systemunit SET name='$name',  model='$model', serial='$serial'
					, status='$status', yom='$yom', ram='$ram', hdd='$hdd', cpu='$cpu', location='$location', 
					user='$user', contact='$contact' WHERE entry='$entry'";
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
  <aside class="right">
            <h2><u>List of System Units</u></h2>
   <!-- Section for displaying database data -->
        
        <table border="1" cellpadding="10" cellspacing="0" height="300">
            <tr>
						<th>Entry-No</th>
						<th>Name</th>
                        <th>Model</th>
						<th>Serial-No</th>
                        <th>Status</th>
						<th>YoM</th>
						<th>RAM size(in GBs)</th>
						<th>HDD size(in GBs)</th>
						<th>CPU specs</th>
                        <th>Location</th>
						<th>Employee-No</th>
						<th>Employee-Contact</th>
						<th>Date-Modified</th>
                        
            </tr>

            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["entry"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["model"] . "</td>";
					echo "<td>" . $row["serial"] . "</td>";
					echo "<td>" . $row["status"] . "</td>";
					echo "<td>" . $row["yom"] . "</td>";
					echo "<td>" . $row["ram"] . "</td>";
					echo "<td>" . $row["hdd"] . "</td>";
					echo "<td>" . $row["cpu"] . "</td>";
					echo "<td>" . $row["location"] . "</td>";
					echo "<td>" . $row["user"] . "</td>";
					echo "<td>" . $row["contact"] . "</td>";
					echo "<td>" . $row['date_modified'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No records found</td></tr>";
            }
            $conn->close();
            ?>

        </table>
		 </aside>
    </div>
	    <!-- Footer -->
        <footer>
            <p>© 2024 Asset Inventory System</p>
        </footer>
</div>
</body>
</html>
