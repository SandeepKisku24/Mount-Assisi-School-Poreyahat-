
<?php
    
    $query = "select * from nboard";
    $queryrun = mysqli_query($connect,$query);
    $disp = mysqli_fetch_assoc($queryrun);
    $nbu1 = $disp['nbu1'];
    $nbu2 = $disp['nbu2'];
    $nbu3 = $disp['nbu3'];
    $nbu4 = $disp['nbu4'];
    $nbu5 = $disp['nbu5'];
    $nbu6 = $disp['nbu6'];
    $nbu7 = $disp['nbu7'];
    $nbu8 = $disp['nbu8'];
    $nbu9 = $disp['nbu9'];
    $nbu10 = $disp['nbu10'];
        if(isset($_POST['change']))
        {
            $connect = mysqli_connect("localhost","u655737406_mountassisi","Assisi@0322");
    $db = mysqli_select_db($connect,"u655737406_82929363268292");
            $query1 = "update nboard set nbu1 = '$_POST[nbu1]',nbu2 = '$_POST[nbu2]',nbu3 = '$_POST[nbu3]',nbu4 = '$_POST[nbu4]',nbu5 = '$_POST[nbu5]',nbu6 = '$_POST[nbu6]',nbu7 = '$_POST[nbu7]',nbu8 = '$_POST[nbu8]',nbu9 = '$_POST[nbu9]',nbu10 = '$_POST[nbu10]'";
            $query2 = mysqli_query($connect,$query1);
            if($query2)
            {
                echo"<script> 
                alert('successfull');
                window.location.href ='Admin_Edits.php';
                </script>";
                
            }
        }
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
    <title>Admin Edits</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <div class="title2">
        <div class="title1">
             <div class="logo">
             <img style="width: 100px;" src="MASlogo.jpg" alt="">
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
    </style>
   <div class="container">
        <!-- Parent form -->
    <form action="" method="post">
        <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif; "> Admin Block</h1>
        <br>
        <hr>
    <p><div class="feild">Scrolling Headline</div> <textarea name="" id="" cols="10" rows="10"></textarea></p>
    <!-- notice board form  -->
    <div class="container one">
       
        <div class="feild">Notice Board</div>
        <form action="" method ="post">
            <p>1.</p><textarea name="nbu1" id="" placeholder="<?php echo $nbu1;?>" cols="10" rows="10"></textarea>
            <p>2.</p><textarea name="nbu2" id="" placeholder="<?php echo $nbu2;?>"cols="10" rows="10"></textarea>
            <p>3.</p><textarea name="nbu3" id="" placeholder="<?php echo $nbu3;?>"cols="10" rows="10"></textarea>
            <p>4.</p><textarea name="nbu4" id="" placeholder="<?php echo $nbu4;?>"cols="10" rows="10"></textarea>
            <p>5.</p><textarea name="nbu5" id="" placeholder="<?php echo $nbu5;?>"cols="10" rows="10"></textarea>
            <p>6.</p><textarea name="nbu6" id="" placeholder="<?php echo $nbu6;?>"cols="10" rows="10"></textarea>
            <p>7.</p><textarea name="nbu7" id="" placeholder="<?php echo $nbu7;?>"cols="10" rows="10"></textarea>
            <p>8.</p><textarea name="nbu8" id="" placeholder="<?php echo $nbu8;?>"cols="10" rows="10"></textarea>
            <p>9.</p><textarea name="nbu9" id="" placeholder="<?php echo $nbu9;?>"cols="10" rows="10"></textarea>
            <p>10.</p><textarea name="nbu10" id="" placeholder="<?php echo $nbu10;?>"cols="10" rows="10"></textarea>
            <button type = "submit" name = "change">Continue</button>
        </form>
    </div>
    <!-- notice board form ends  -->
    <!-- About School part -->
    <p><div class="feild">School</div><textarea name="" id="" cols="30" rows="10"></textarea></p>
    <!-- Principal's Message part -->
    <p><div class="feild">Principal Message</div><textarea name="" id="" cols="30" rows="10"></textarea></p>
     <p><div class="feild">MAS in Media</div><textarea name="" id="" cols="30" rows="10"></textarea></p>
     <p><button type="submit" name="log"> LogIn</button></p>
</form>
<!-- end of parent form  -->
   </div>

</body>
</html>
