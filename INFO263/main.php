<!doctype html>
<html lang="en">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<style>
    body {
        background-color: black;
        font-family: 'Open Sans', sans-serif;

    }

    .rectangle {
        height: 95px;
        width: 350px;
        background-color: #555;
    }

    .rectangle-large {
        height: 800px;
        width: 1300px;
        background-color: #555;
    }

    #scrollbar::-webkit-scrollbar {
        display: none;
    }

</style>

head>
<title>TSERVER</title>
</head>


<body>
<h3 style="color: white; padding-left: 20px;"">
School of Mathematics and Statistics
</h3>
<h4 style=" color: white; padding-left: 20px;">
    College of Engineering
</h4>
<a href="view_events.html" >Add Event </a>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3">
            <div class="container" style="overflow: scroll; height: 900px" id="scrollbar">
                <?php

                $hostname     = "132.181.143.31";
                $database_name  = "INFO263_sba248_tserver";
                $username = "sba248";
                $password = "Bkbi989_";

                $conn = mysqli_connect($hostname, $username, $password, $database_name);
                if(!$conn)
                {
                    die("Database Connection Failed: " . mysqli_error($conn) );
                }

                $query = "call INFO263_mha541_tserver.vw_front_event()";
                $result = mysqli_query($conn, $query);


                if ($result->num_rows > 0) {
                    while($row = mysqli_fetch_array($result))
                    {
                        $rowEventName = $row['event_name'];
                        $rowGroupName = $row['cluster_name'];
                        $rowMenuName = $row['machine_group'];
                        echo '<ul>
                    <div class="rectangle" onClick="populateData()">
                        <img src="https://cdn.pixabay.com/photo/2014/04/03/10/23/windows-310290_960_720.png" alt="noting"
                             width="140" height="90" style="margin-left: -30px; margin-top: 4px;">
                        <p style="float: right; color:white; padding-right: 4px; padding-top: 3px">'.$row['event_name'].'</p>
                       </div>
                   </ul>' ;
                    }
                }

                ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="rectangle-large">
                <img
                        src="https://www.safetysign.com/images/source/large-images/D5725.03bc88feb8c0ce198a12645fce792b30.png"
                        alt="noting" width="340" height="190" style="float: right; margin-top: 20px; margin-right: 20px;">

                <p style="color:white; padding-top:20px; padding-left:35px; font-size: 25px;" id="title">Title</p>
                <p style="color:white; padding-left:35px; font-size: 15px;" id="menu">Menu: </p>
                <p style="color:white; padding-left:35px; font-size: 15px;" id="group">Group: </p>
                <p style="color:white; padding-left:35px; font-size: 15px;">Hostname: xpc19ef.math.canterbur.ac.nz</p>
                <p style="color:white; padding-left:35px; font-size: 15px;">Resolution: 1920 x 1080</p>
            </div>
        </div>

    </div>
</div>

</body>

<script>
    $(document).ready(function () {
        console.log("Document ready!");
    });

    function populateData() {
        var title = '<?php echo $rowEventName ?>';
        var group = '<?php echo $rowGroupName ?>';
        var menu = '<?php echo $rowMenuName ?>';
        document.getElementById('title').innerHTML = title;
        document.getElementById('group').innerHTML = 'Group: ' + group;
        document.getElementById('menu').innerHTML = 'Menu: ' + menu;
    }


</script>

</html>



