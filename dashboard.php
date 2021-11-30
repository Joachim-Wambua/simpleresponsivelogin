<!DOCTYPE html>
<html>
    <!-- Starting Header Area -->
    <head>
        <!-- Webpage Title -->
        <title>Librarian Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src=
            "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
            </script>
        <script src=
            "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
            </script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>

        
    </head>

    <!-- Website Body -->
    <body>
        <nav class="navbar navbar-inverse navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">The Online Library</a>
                </div>
                <ul class="nav nav-pills">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="active"><a href="#">Books</a></li>
                    <li class="active"><a href="#">Profile Settings</a></li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                </ul>
            </div>
        </nav>
        <!-- Left Screen Column -->
        

        <div class="jumbotron jumbotron-fluid">
            <?php
                session_start();
                include 'registration.php';
            ?>

            <div class="container">
                <h1 class="display-4 text-white font-weight-bold" >The Online Library</h1>
                <p class="lead font-weight-bold text-white">Welcome to your librarian account, <?php echo $_SESSION["username"] ?></p>

            </div>
        </div>

        <div class="text-center p-2"><h3>Available Books</h3></div>

        <!-- Book Cards -->
        <div class="column" >
            <div class="card mb-1 p-2">
                <img class="card-img-top w-25 mx-auto" src="assets/alchemist.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2">
                <img class="card-img-top w-25 mx-auto" src="assets/alchemist.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2">
                <img class="card-img-top w-25 mx-auto" src="assets/alchemist.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-3">
                <img class="card-img-top w-25 mx-auto" src="assets/alchemist.png" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>


                </div>
            </div>
        </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
