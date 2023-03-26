<?php
session_start();
$connect = mysqli_connect("localhost","u655737406_mountassisi","Assisi@0322");
         $db = mysqli_select_db($connect,"u655737406_82929363268292");
    $query = "select * from student";
    $query_run = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($query_run);
    $name = $row['name'];
    $roll = $row['roll'];
    $class = $row['class'];
    $section = $row['section'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="Gallery/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Gallery/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Gallery/favicon_io/favicon-16x16.png">
    <title>Student</title>
    <link rel="stylesheet" href="forstudentpageStyle.css">
    <script src="juqery_latest.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#attendance_button").click(function(){
                $(".details").load('attendance.html');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#mark_button").click(function(){
                $(".details").load('marksheet.html');
            });
        });
    </script>
</head>
<body>
    <div class="title2">
        <div class="title1">
             <div class="logo">
             <img style="width: 100px;" src="MASlogo2.jpg" alt="">
        </div>
          <div class="school">
            <h1>Mount Assisi School</h1>
            <h2>Poreyahat, Godda, Jharkhand</h2>
          </div>
        </div>
    </div>
    <style>
        .title1{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            
        }
        .logo{
            margin-left: 30px;
        }
        .school{
            margin-right: 30px;
        }
    </style>
    <div class="container">
        <form action="" method="post">


        <div class="info">
            <div class="dp"><img class="imgdp" src="Gallery/user.jfif" alt=""></div>
            <div class="line">
                <div class="line1">
                    <div class="name">Name : &nbsp;&nbsp; <?php echo" $name ";?></div>
                <div class="class">Class :&nbsp;&nbsp; <?php echo" $class ";?></div>
                </div>
                
                <div class="line2">
                    <div class="roll">Roll No. :&nbsp;&nbsp; <?php echo" $roll ";?></div>
                <div class="Section">Sec. :&nbsp;&nbsp; <?php echo" $section ";?></div>
                </div>
            </div>
        </div>
        </form>
        <div class="bottom">
                <div class="parameters">
                    <div class="menu">
                        <div type="button" id="attendance_button" >Attendance</div>
                    </div>
                    <div class="menu">
                    <div type="button" id="mark_button" >Marksheet</div>
                    </div>
                    <div class="menu">
                        Diciplinary Action
                    </div>
                    <div class="menu">
                        Time Table
                    </div>
                </div>
                <div class="details">
        
                </div>
            </div>
    </div>
</body>
</html>