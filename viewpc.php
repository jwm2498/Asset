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
	<style>     body {
            font-family: Times new roman;
            margin: 0;
            padding: 0;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 300px 2fr;
            grid-template-rows: 70px 1fr 60px;
            height: 90vh;
            gap: 5px;
			
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
			 color: #fff;
		
        }
        .logo {
            font-size: 36px;
            font-weight: bold;
			font-family:times new roman;
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
			border:1px dotted;
        }
        aside.right {
			grid-column-start:1;
			grid-column-end:4;
            grid-row: 2 / span 2;
            background-color: #f9f9f9;
            padding: 3px;
           overflow: auto;
			border:1px dotted;
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
			background-color:#fff;
			font-size:14px;
		padding:5x;
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
            <li><a href="#">System Units</a>
                 <ul class="submenu">
                    <li><a href="pc.php">Add New</a></li>
                    <li><a href="viewpc.php">View</a></li>					 
					<li><a href="printpc.php">Print </a></li>                
					
					
                </ul>
            </li>
            
        </ul>
    </header>
		
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
						<th colspan="3" height="13" width="auto">Action</th>
                        
            </tr>

            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                   echo "<tr>;
                     <td>" . $row["entry"] . "</td>;
                     <td>" . $row["name"] . "</td>;
                   <td>" . $row["model"] . "</td>;
					<td>" . $row["serial"] . "</td>;
					<td>" . $row["status"] . "</td>;
					<td>" . $row["yom"] . "</td>;
					<td>" . $row["ram"] . "</td>;
					<td>" . $row["hdd"] . "</td>;
					 <td>" . $row["cpu"] . "</td>;
					 <td>" . $row["location"] . "</td>;
					 <td>" . $row["user"] . "</td>;
					 <td>" . $row["contact"] . "</td>;
					<td>" . $row['date_modified'] . "</td>;
					<td><a href='update.php?entry=$row[entry]&name=$row[name]&model=$row[model]&serial=$row[serial]&
					status=$row[status]&yom=$row[yom]&ram=$row[ram]&hdd=$row[hdd]&cpu=$row[cpu]&location=$row[location]&user=$row[user]&contact=$row[contact]
					&date_modified=$row[date_modified]'>update</a><td>
					<td><a href='delete.php?serial=$row[serial]' onclick='return checkdelete()'>Delete</a><td>
                    <td><a href='transferpc.php?entry=$row[entry]&name=$row[name]&model=$row[model]&serial=$row[serial]&
					status=$row[status]&yom=$row[yom]&ram=$row[ram]&hdd=$row[hdd]&cpu=$row[cpu]&location=$row[location]&user=$row[user]&contact=$row[contact]
					&date_modified=$row[date_modified]'>Transfer</a><td>
					</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No records found</td></tr>";
            }
            $conn->close();
            ?>

        </table>
		<script>
		function checkdelete()
		{
			return confirm('Proceed to Delete?');
		}
		
		
		</script>
		 </aside>
    </div>
	    <!-- Footer -->
        <footer>
            <p>© 2024 Asset Inventory System</p>
        </footer>
</div>
</body>
</html>
