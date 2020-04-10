<?php
$text = '"يتم تقديم التطبيق مجانًا ، كما هو ، فقط لأغراض إعلامية للمساعدة في تبسيط إدارة الطوارئ للأشخاص أثناء وباء فيروس كورونا 19. لا يتم ضمان اكتمال ودقة وطبيعة المعلومات والمعلومات المتاحة في هذا التطبيق أو ملاءمتها لأغراض محددة. يقر المستخدم بأن التطبيق ، بما في ذلك الاختبار والمعلومات الأخرى التي يحتوي عليها ، لا يشكل بأي حال من الأحوال رأيًا ، أو توصية ، أو فحصًا ، أو تشخيصًا ، أو وصفة طبية ، أو أي عمل آخر ذو طبيعة طبية ، على وجه الخصوص. أو بواسطة طبيب أو صيدلي. لا يحل استخدام التطبيق ومحتواه محل النصيحة اللازمة التي يقدمها طبيبك أو الصيدلي أو أي أخصائي رعاية صحية مختص آخر في كل حالة على حدة. يجب إجراء أي فحص أو قرار من قبل المستخدم أو اتخاذه بشكل مستقل على أساس المعلومات العلمية والسريرية ذات الصلة ، والإشعار الرسمي للمنتج المعني إذا لزم الأمر وفي حالة الشك ، عن طريق استشارة طبيب مختص. المعلومات المتاحة في إطار التطبيق تخدم فقط كمعلومات المستوى الأول. لا يعني عدم وجود تحذير بشأن خطر عدم وجوده. "';
$first = 'background-color:#0069cc;';
$second = 'background-color:#6f6d6d;';
$third = 'background-color:#6f6d6d;';
$sub = 'إبدأ الفحص';
$color = "btn btn-primary btn-lg start";
$tm = 'تمهيد';
$question = '';
$layout = '';
$design = '<label class="cnt">نعم
<input type="radio" name="radio" value="نعم" id="radio1">
<span class="chk"></span>
</label>
<label class="cnt">لا
<input type="radio" name="radio" value="لا" id="radio2">
<span class="chk"></span>
</label>';
$design1 = '<div class="md-form">
  <input type="number" id="numberExample" class="form-control" name="hot" placeholder = "37.0" id="hot">
</div>';
$design2 = '<div class="md-form">
<input type="number" id="numberExample" class="form-control" name="age" placeholder = "20" id="age">
</div>';
$design3 = '<div class="md-form">
<input type="number" id="numberExample" class="form-control" name="height" placeholder = "170cm" id="height">
</div>';
$design4 = '<div class="md-form">
<input type="number" id="numberExample" class="form-control" name="weight" placeholder = "60KG" id="weight">
</div>';
$special = '<label class="cnt">نعم
<input type="radio" name="radio" value="نعم">
<span class="chk"></span>
</label>
<label class="cnt">لا
<input type="radio" name="radio" value="لا">
<span class="chk"></span>
</label>
<label class="cnt">لا أعلم
<input type="radio" name="radio" value="لا أعلم">
<span class="chk"></span>
</label>';

$questions = array(
    "هل تعتقد أنك عانيت أو عانيت من حمى في الأيام القليلة الماضية (قشعريرة ، تعرق)؟",
    "ما هي درجة حرارة جسمك؟",
    "في الأيام القليلة الماضية ، هل كان لديك سعال أو زيادة في السعال المعتاد؟",
    "في الأيام الأخيرة ، هل لاحظت انخفاضًا حادًا أو فقدًا في ذوقك أو رائحتك؟",
    "هل لديك الام في الحلق في الأيام القليلة الماضية؟",
    "خلال الـ 24 ساعة الماضية ، هل أصبت بالإسهال؟ مع 3 براز رخو على الأقل.",
    "في الأيام الأخيرة ، هل تعبت بشكل غير عادي؟",
    "هل يجبرك هذا التعب على الراحة لأكثر من نصف اليوم؟",
    "هل كنت غير قادر على تناول الطعام أو الشراب لمدة 24 ساعة أو أكثر؟",
    "خلال الـ 24 ساعة الماضية ، هل لاحظت ضيق تنفس غير عادي عند التحدث أو بذل جهد صغير؟",
    "كم عمرك ؟ هذا لحساب عامل خطر محدد.",
    "ما هو طولك؟ من أجل حساب مؤشر كتلة الجسم وهو عامل يؤثر على خطر مضاعفات العدوى.",
    "ما هو وزنك؟ من أجل حساب مؤشر كتلة الجسم وهو عامل يؤثر على خطر مضاعفات العدوى.",
    "هل تعاني ارتفاع ضغط الدم غير المتوازن؟ أو لديك مرض القلب أو الأوعية الدموية؟ أم أنك تأخذ علاج القلب؟",
    "هل أنت مصاب بالسكري؟",
    "هل لديك أو لديك سرطان؟",
    "هل لديك مرض تنفسي؟ أم أنك تتبع طبيب أمراض الرئة؟",
    "هل تعاني من أمراض الكلى المزمنة في غسيل الكلى؟",
    "هل لديك مرض كبدي مزمن؟",
    "هل انت حامل بالنسبة للمرأة ؟  ",
    "هل لديك مرض معروف بخفض جهاز المناعة لديك؟",
    "هل تتناول العلاج المثبط للمناعة؟ إنه علاج يقلل من دفاعاتك ضد العدوى. فيما يلي بعض الأمثلة: الكورتيكوستيرويدات ، الميثوتريكسات ، السيكلوسبورين ، تاكروليموس ، الآزوثيوبرين ، سيكلوفوسفاميد (قائمة غير حصرية).",
    "",
);
$pnt = 0;
if(empty($_SESSION['main']))
{
    $_SESSION['main'] = 1;
} else{
    $_SESSION['main']++;
}

if(isset($_POST['reload']))
{
    header("refresh:0;url = ../inc/log.php");
}


if(isset($_POST['submit']))
{
    if($_SESSION['main'] == 2)
    {
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);

         $layout =$design;
    } else if($_SESSION['main'] == 3)
    { 
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
        $layout = $design1;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 4)
    {

        
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);

    }
    else if($_SESSION['main'] == 5)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 6)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 7)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 8)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
         $layout =$design;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 9)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
         $layout =$design;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 10)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";
         $layout =$design;
         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 11)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";
   
         $sub= "حفظ";
         $layout =$design;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 12)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }

        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
         $layout =$design2;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 13)
    {
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
         $layout =$design3;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 14)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }

        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
         $layout =$design4;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 15)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }

        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 16)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 17)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 18)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 19)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 20)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 21)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";
         $layout =$special;
         $text = $questions[($_SESSION['main']-2)];

         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }
    else if($_SESSION['main'] == 22)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
       
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);
    }  else if($_SESSION['main'] == 23)
    {
        if(isset($_POST['radio']))
        {
            if(isset($_POST['radio']) == 'نعم')
            {
                $pnt  = $pnt +5;
            } else{
                $pnt = $pnt +0;
            }
        }
        
        $first = 'background-color:#6f6d6d;';
         $second = 'background-color:#0069cc;';
         $third = 'background-color:#6f6d6d;';

         $color = "btn btn-success btn-lg";

         $sub= "حفظ";

         $text = $questions[($_SESSION['main']-2)];
         $layout =$design;
         $tm = "سؤال " . " " . ($_SESSION['main']-1);

    }
    else{
        header("refresh:0;url = ../inc/result.php");
        
    }
}

    
    

?>