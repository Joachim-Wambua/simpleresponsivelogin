<!DOCTYPE html>
<html>
    <!-- Starting Header Area -->
    <head>
        <!-- Webpage Title -->
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    </head>

    <!-- Website Body -->
    <body>
        <!-- Left Screen Column -->
        <div class="column">
            <div class="image">
                <img src="assets/Development.png">
            </div>
        <!-- Right Screen Column -->
        <div class="login-area">
            <form action="registration.php" class="alt" method="post">
                <img class="avatar" src="assets/Profile Avatar.png">
                <h2>Welcome</h2>
                <!-- Log In Form -->
                <div class="login-form one">
                    <!-- Username Area -->
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" name="username" placeholder="Username" type="text">
                    </div>
                </div>
                <div class="login-form one">
                    <!-- Email Area -->
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input class="input" name="email" placeholder="Email" type="email">
                    </div>
                </div>
                <!-- Password Area -->
                <div class="login-form two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" name="userpassword"  placeholder="Password" type="password">
                    </div>
                </div>
                <!-- Forgot Password Area -->
                <a href="/login.php">Have an Account? LogIn</a>
                <input type="submit" class="button" name="submit" value="Register">
            </form>
        </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>