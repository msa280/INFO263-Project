<?php
session_start();
$host = "132.181.143.31";
$database_name = "INFO_sba248_tserver";
$username = "sba248";
$password = "Bkbi989_";

$connection = mysqli_connect($host, $username, $password, $database_name);

if ($connection === false)
    {
    die("ERROR: Could not connect to the database. " . mysqli_connect_error($connection));
    }
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "call INFO263_sba248_tserver.user_pass()";
        $result = mysqli_query($connection, $query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc())
            {
                ?> <script> alert("Login successful!"); window.location.replace("main.php");</script>
            <?php
            }
        }

        else
        {
            ?> <script> alert("Wrong username or password."); window.location.replace("index2.php");</script>
            <?php
        }
    }

?>
<?php

