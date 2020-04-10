<?php
include('nav.php');
include('work.php');
if($pnt >= 5)
{
    $text = "لا يبدو أن حالتك تثير القلق.

    ابق في المنزل.
    
    #StayAtYou - تقييد الاتصال بالأشخاص الآخرين. يمكن أن ينتشر الفيروس عن طريق ناقلات لا تظهر عليها أعراض.";
} else if($pnt == 0)
{
    $text = 'اتصل على
    3030
    ابق في المنزل.
    #StayAtYou - تقييد الاتصال بالأشخاص الآخرين. يمكن أن ينتشر الفيروس عن طريق ناقلات لا تظهر عليها أعراض.';
}

?>
<link rel="stylesheet" href="../css/main.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="steps" dir="rtl">
<div class="container">
    <div class="row">
        <div class="cr" style="background-color:#6f6d6d;">1</div>
        <span class="in">معلومات</span>
        <div class="cr" style="background-color:#6f6d6d;">2</div>
        <span class="in">الأسئلة</span>
        <div class="cr" style="background-color:#0069cc;">3</div>
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
  <h3 class="display-8" style="color:#0069cc; float:right;">النتيجة</h3>
  <br>
  <p class="lead" style="float:right; font-weight:bold; text-align:center; "><?php echo $text; ?></p>
  
</div>
<hr class="my-4">
    </div>
</div>
</div>
<div class="container" dir="rtl">
    <div class="row">
    <input type="submit" value="<?php echo $sub;?>" class="<?php echo $color;?>" style="float:left; display:none;" name="submit" id="submit">
    </div>
</div>

<div class="btns">
    <div class="container">
        <div class="row">
            <form action="" method="post">
        <input id="f" type="submit" value="إبدأ من جديد" class="btn btn-primary btn-lg" style="position: relative;bottom: 25px;" name="reload">
        </form>
        </div>
    </div>
</div>
<?php include('footer.php');?>