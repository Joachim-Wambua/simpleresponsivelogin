<!DOCTYPE html>
<html>
    <!-- Starting Header Area -->
    <head>
        <!-- Webpage Title -->
        <title>Dashboard</title>
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
            <form action="dashboard.php" method="post" enctype="multipart/form-data">
                <h2>Welcome</h2>
                <br>

                    <?php
                        session_start();
                        include 'registration.php';
                    ?>
                <p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["username"] ?></p>
                <div class="text-center">Sign Out Here? <br><a href="logout.php">Logout</a></div>
            </form>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
