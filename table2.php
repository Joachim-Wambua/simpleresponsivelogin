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
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                color: black;
                font-family: sans-serif;
                font-size: 25px;
                text-align: left;
            }

            th {
                background-color: #588c7e;
                color: white;
            }
            tr:nth-child(even) {background-color: navajowhite}
        </style>
    </head>

    <!-- Website Body -->
    <body>
        <table>
            <tr>
                <th>Video Game Company</th>
                <th>Net Worth$(Billions)</th>
                <th>Top Game</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "112358", "security_task");

                if($conn->connect_error) {
                    die("Connection to Database Failed: ".$conn->connect_error);
                }
                $db = "SELECT name, worthUSDBillion, top_game FROM top_game_companies";
                $result = $conn->query($db);

                if($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()) {
                        echo "<tr><td>".$row["name"]."</td><td>".$row["worthUSDBillion"]."</td><td>".$row["top_game"]."</td></tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "No Result!";
                }
                $conn->close();
            ?>
        </table>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>

