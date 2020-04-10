<?php
session_start();
$_SESSION['name'] = 'main';

include("work.php");
include('nav.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    
    <title>CoronaVirus-test</title>
</head>
<div class="steps" dir="rtl">
<div class="container">
    <div class="row">
        <div class="cr" style="<?php echo $first;?>">1</div>
        <span class="in">معلومات</span>
        <div class="cr" style="<?php echo $second;?>">2</div>
        <span class="in">الأسئلة</span>
        <div class="cr" style="<?php echo $third;?>">3</div>
        <span class="in">النتيجة</span>
    </div>
</div>
</div>
<br>
<br><br><br>
<br>
<br>
<div class="desp" dir="rtl">
<div class="container">
    <div class="row">
    <div class="jumbotron" style='width: 1000px;
    position: relative;
    right: 8%;'>
  <h3 class="display-8" style="color:#0069cc; float:right;"><?php echo $tm;?></h3>
  <br>
  <p class="lead" style="float:right; font-weight:bold; text-align:center; "><?php echo $text;?></p>
  <br><br><br><br>
  <hr class="my-4">
  
  <?php echo "<form action='' method='post' id='hoho'>"?>
  <?php echo $layout;?>
  
</div>
<hr class="my-4">
    </div>
</div>
</div>
<div class="container" dir="rtl">
    <div class="row">
    <input type="submit" value="<?php echo $sub;?>" class="<?php echo $color;?>" style="float:left;" name="submit" id="submit">
    <?php echo "</form>";?>
    </div>
</div>

<div class="btns">
    <div class="container">
        <div class="row">
            <form action="" method="post">
        <input id="f" type="submit" value="إبدأ من جديد" class="btn btn-primary btn-lg" style="position: relative;bottom: 42px;" name="reload">
        </form>
        </div>
    </div>
</div>


