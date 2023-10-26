<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>STI College Carmona Thesis Archive</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>

<header> 
    <div class="logo-container">
        <img src="STI LOGO.png" alt="Logo">
    </div>
</header>
    <br>
    <form action="connection.php" method="post">
        <h2>Thesis Archive Login</h2>
        

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>

        <label for="uName">Username:</label><br>
        <input type="text" id="uName" name="username" required  placeholder="Username"><br>
        
        <div class="password-toggle">
            <label for="pword">Password:</label>
            <div class="password-input-container">
                <input type="password" id="pword" name="password" required placeholder="Password">
                <i id="togglePassword" class="fa fa-eye-slash" aria-hidden="true"></i>
            </div>
        </div><br><br>

        <button type="submit"><i class="fa-solid fa-user fa-flip"></i> Login</button>
   
      </form>
       
      <script>
        const togglePassword = document.getElementById('togglePassword');
const passwordField = document.getElementById('pword');

togglePassword.addEventListener('click', () => {
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        togglePassword.classList.remove('fa-eye-slash');
        togglePassword.classList.add('fa-eye');
    } else {
        passwordField.type = 'password';
        togglePassword.classList.remove('fa-eye');
        togglePassword.classList.add('fa-eye-slash');
    }
});

      </script>
</body>
</html>
