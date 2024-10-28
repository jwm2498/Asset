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
        <form action="signin.php" method="POST">
		<h2><u>Login</u></h2>
           
            <input type="text" id="staffnumber" name="staffnumber" placeholder="Enter Your Username here!" required>

           
            <input type="password" id="password" name="password" placeholder="Enter Your Password here!"required><br><br>

					           <button type="submit">LOGIN</button>

			<p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </form>
   </main>

    <footer>
        <p>&copy; 2024 Asset Inventory System. All rights reserved.</p>
    </footer>
</body>
</html>
