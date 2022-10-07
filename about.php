<?php include('header_dashboard.php'); ?>
<?php include('navbar_about.php'); ?>
<html lang="en">
<head>
    <style type="text/css">
        .image{
            margin-left: 26%;


        }
        .top{
            margin-top: 0%;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="about-section ">
        <div class="inner-container top">
           <img src="Logo.png" class="image"  alt="John Nash">
            <div class="navbar navbar-inner block-header">
                                    <div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
                                </div>
           <center><h1>About Us</h1></center> 
           
      
            <p class="text">
             <?php
                    $mission_query = mysqli_query($conn,"select * from content where title  = 'mission' ")or die(mysqli_error());
                    $mission_row = mysqli_fetch_array($mission_query);
                    echo $mission_row['content'];
                                       
             ?>
            </p>

            <p class="text">
            <?php
                    $mission_query = mysqli_query($conn,"select * from content where title  = 'vision' ")or die(mysqli_error());
                    $mission_row = mysqli_fetch_array($mission_query);
                    echo $mission_row['content'];
             ?>
            </p>
            
        </div>
    </div>
</body>
</html>