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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset inventory system</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
 <div class="grid-container">
 
    <header class="header">
        <div class="logo">Asset Inventory System</div>
        <ul class="menu">
            <li><a href="home.php">Home</a>
              
            </li>
            <li><a href="#">System Units</a>
                <ul class="submenu">
                    <li><a href="pc.php">Add New</a></li>
                    <li><a href="viewpc.php">View</a></li>					 
					<li><a href="printpc.php">Print </a></li>                
					
					
                </ul>
            </li>
            
        </ul>
    </header>

		<aside class="left">
            <div class="right-content">
          <h2>New System Unit</h2>
		  
                <form class="input-fields" action="systemunitserver.php" method="POST">
                   
                    <input type="text" id="name" name="name" placeholder="Enter the Asset Name" required>
                    

                    <input type="text" id="model" name="model" placeholder="Enter the Asset Model" required >
                    
                    <input type="varchar" id="serial" name="serial" placeholder="Enter the Serial Number" required>
                    
                  
                    <input type="text" id="status" name="status" placeholder="Enter the Asset Status" required>
                    
                    
                    <input type="number" id="yom" name="yom" placeholder="Enter the Year of Mfg" required>                 
                    
                    <input type="number" id="ram" name="ram" placeholder="Enter the RAM (in GBs)" required>                 
                    <input type="number" id="hdd" name="hdd" placeholder="Enter the HDD size (in GBs)" required>  
                    <input type="varchar" id="cpu" name="cpu" placeholder="Enter the Cpu Specs" required>
					 <input type="varchar" id="location" name="location" placeholder="Enter Location(Block&Office)" required>
					<input type="Varchar" id="user" name="user" placeholder="Enter Employee Number" required>
					<input type="number" id="contact" name="contact" placeholder="Enter Employee Contact" required>
				                       
                     <div class="buttons">
                        <button type="submit" name="submit">Submit</button>
                        
                    </div>
                </form>
        </div>
        </aside>
				

  <aside class="right">
            <h2><u>List of System Units</u></h2>
   <!-- Section for displaying database data -->
        
        <table border="1" cellpadding="10" cellspacing="0" height="300">
            <tr>
						<th height="13" width="auto">Entry-No</th>
						<th height="13" width="auto">Name</th>
                        <th height="13" width="auto">Model</th>
						<th height="13" width="auto">Serial-No</th>
                        <th height="13" width="auto">Status</th>
						<th height="13" width="auto">YoM</th>
						<th height="13" width="auto">RAM size(in GBs)</th>
						<th height="13" width="auto">HDD size(in GBs)</th>
						<th height="13" width="auto">CPU specs</th>
                        <th height="13" width="auto">Location</th>
						<th height="13" width="auto">Employee-No</th>
						<th height="13" width="auto">Employee-Contact</th>
						<th height="13" width="auto">Date-Modified</th>
                        
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
