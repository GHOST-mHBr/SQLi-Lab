<!DOCTYPE html>
<html>

<head>
    <title>SQLi Lab-3</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="/SQLi Lab/styles/style1.css">
    <link rel="stylesheet" href="/SQLi Lab/styles/style_light.css">
    <link rel="icon" type="image/x-icon" href="/SQLi Lab/images/favicon.ico">
</head>

<body class="w3-dark">
    <div class="w3-margin" style="max-width:100%">
        <header class="w3-center head">
            <ul>
                <li style="--clr:#00ade1">
                    <a data-text="&nbsp;Welcome">&nbsp;Welcome&nbsp;</a>
                </li>
                <li style="--clr:#00ade1">
                    level 3
                </li>
            </ul>
        </header>
        <?php
        // ------ DataBase Credentials ------
        // enter yours
        $db_ip = "127.0.0.1";
        $username = "root";
        $password = "10101010";
        $dbname = "employees";
        $isDbOk = true;
        try {
            $db_conn = mysqli_connect($db_ip, $username, $password, $dbname);
        } catch (mysqli_sql_exception) {
            echo "<h2>MySQL-Server connection error</h2>";
            $isDbOk = false;
        }
        if ($isDbOk) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT first_name,last_name from employees where emp_no=" . $id . ";";

                $result = $db_conn->query($query);
                if ($result->num_rows > 0) {
                    if ($result->num_rows > 1) {
                        echo "<div class=\"w3-center w3-padding w3-margin-bottom w3-margin-top w3-deep-purple\">";
                        echo "<h3>Good job!<br>You just hacked the database</h3>";
                        echo "<h5>FINAL Query: " . $query . "</h5></div>";
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "<div style=\"margin-top: 20px\">";
                        echo "<h2>";
                        echo "First name: " . $row["first_name"] . "<br>";
                        echo "Last name: " . $row["last_name"] . "<br><br>";
                        echo "</h2>";
                        echo "</div>";
                    }
                } else {
                    echo "<h2>Bad id :(</h2>";
                }
            } else {
                echo "<h2>No id specified. What's up dude?</h2>";
            }
        }
        ?>
    </div>
    <footer class="w3-center w3-black w3-padding-16">
        <a href="https://www.github.com/GHOST-mHBr/SQLi-Lab">
            <img src="/SQLi Lab/images/github.svg" width="30px" height="30px">
        </a>
    </footer>
</body>

</html>