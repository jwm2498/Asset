<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RoseView Asset Inventory System</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <div class="logo">
            
            <h1>Asset Inventory System</h1>
        </div>
    </header>

    <main>
        
        <form action="adminsignin.php" method="POST">
		<h2><u>Admin Login</u></h2>      
        <input type="text" id="user" name="user" placeholder="Enter User Number here!"required><br>
            <input type="password" id="password" name="password" placeholder="Enter Admin Password here!"required><br>
            <button type="submit">Login</button>			
        </form>
   </main>

    <footer>
        <p>&copy; 2024 Asset Inventory System. All rights reserved.</p>
    </footer>
</body>
</html>
