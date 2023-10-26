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

<style>

body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    height: 100vh;
    background: linear-gradient(to right, #1674cc, #c3c31b);
}
*{
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}
.logo-container img {
    background-color: #3498db; /* Background color for the circular logo */
    width: 100px; /* Adjust the width and height as needed */
    height: 100px;
    border-radius: 50%; /* Makes it a circle */
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px; /* Adjust the top margin to position it at the top */
}
 form {
    width: 500px;
    border:30px ;
    padding: 30px; ;
    background: #ffffff;
    border-radius: 15px;

}   

h2{
    text-align: center;
    margin-bottom: 40px;
}
input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}
label{
    color: #888;
    font-size: 18px;
    padding: 10px;
}
button{
    float: right;
    background: #1a349b;
    padding: 10px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    
}
button:hover{
    opacity: .7;
}
.error{
    background: #F2DEDE;
    color: #a9442a;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}
.password-toggle {
    position: relative;
    cursor: pointer;
}
.password-input-container {
    position: relative;
}

.password-input-container i {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
}

    </style>

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