
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Inventory System</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <div class="logo">
           
            <h1>Asset Inventory System</h1>
        </div>
    </header>

    <main>
        
        <form action="register.php" method="POST">
		<h2><u>Signup</u></h2>
            <input type="text" id="staffnumber" name="staffnumber" placeholder="Enter Your Staff Number here!" required>            
            <input type="password" id="password" name="password" placeholder="Enter Your Password!"required>            
            
            <button type="submit">Sign Up</button>
			 <p>Already have an account? <a href="login.php">Login here</a></p>
        </form>
		
    </main>
   

    <footer>
        <p>&copy; Asset Inventory System. All rights reserved.</p>
    </footer>
</body>
</html>

