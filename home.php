

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset inventory system</title>
<style>
     body {
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
        /*aside.left {
            grid-row: 2 ;
            background-color: #f1f1f1;
            padding: 10px;
            overflow: auto;
			border:1px dotted;
        }
        aside.right {
            grid-row: 2 / span 2;
            background-color: #f9f9f9;
            padding: 3px;
           overflow: auto;
			border:1px dotted;
        }*/
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
              
            </li>
            <li><a href="#">Assets</a>
                <ul class="submenu">
                       <li><a href="pc.php">System Units</a></li>
                    <li><a href="monitors.php">Monitors</a></li>
					<li><a href="laptop.php">Laptops</a></li>
                    <li><a href="printer.php">Printers</a></li>
					<li><a href="scanner.php">Scanners</a></li>
					
                </ul>
            </li>
            <li><a href="#">The Management</a>
                <ul class="submenu">
                    <li><a href="#">Manager</a></li>
                    <li><a href="#">Senior staff</a></li>
                    <li><a href="#">Junior staff</a></li>
                </ul>
            </li>
        </ul>
    </header>

		<aside class="left">
            <div class="right-content">
          
            
        </div>
		  
        </aside>
  <aside class="right">
           
   <!-- Section for displaying database data -->
        
       
		 </aside>
    </div>
	    <!-- Footer -->
        <footer>
            <p>© 2024 Asset Inventory System</p>
        </footer>
</div>
</body>
</html>
