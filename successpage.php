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
        <!-- jQuery + Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>

    <!-- Website Body -->
    <body>
        <!-- Left Screen Column -->
        <div class="column">
            <div class="image">
                <img src="assets/Development.png">
            </div>
        <!-- Right Screen Column -->
        <?php
                session_start();
                include 'registration.php';
            ?>
        <div class="login-area">
            <form action="login.php" class="alt">
            <p class="lead font-weight-bold text-white">Welcome to your account, <?php echo $_SESSION["username"] ?></p>
                
                <input type="submit" class="button" name="submit" value="Proceed to Login">
            </form>
        </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>