<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            Division Quiz 2
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
print '<form action="division_quiz_2.php" method="post">';
//BEGINNING OF QUESTION ONE 


print '<p>1. 51/2 =</p>';
if ($_POST['answer1']=="a")
print '<input type="radio" checked="checked" name="answer1" value="a"/>25<br/>';
else
print '<p><input type="radio" name="answer1" value="a"/>25<br/>';
if ($_POST['answer1']=="b")
print '<input type="radio" checked="checked" name="answer1" value="b"/>23<br/>';
else
print '<input type="radio" name="answer1" value="b"/>23<br/>';
if ($_POST['answer1']=="c"){
print '<input type="radio" checked="checked" name="answer1" value="c"/>25.5<br/>';
$correct++;
}
else
print '<input type="radio" name="answer1" value="c"/>25.5<br/>';
if ($_POST['answer1']=="d")
print '<input type="radio" checked="checked" name="answer1" value="d"/>21<br/>';
else
print '<input type="radio" name="answer1" value="d"/>21<br/></p>';


print '<p>2. 33/66 =</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>0.5<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer2" value="a"/>0.5<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer2" value="b"/>1<br/>';
else
print '<input type="radio" name="answer2" value="b"/>1<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer2" value="c"/>2<br/>';
else
print '<input type="radio" name="answer2" value="c"/>2<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer2" value="d"/>3<br/>';
else
print '<input type="radio" name="answer2" value="d"/>3<br/><br/></p>';


print '<p>3. 11/-8 =</p>';
if ($_POST['answer3']=="a")
print '<input type="radio" checked="checked" name="answer3" value="a"/>2<br/>';
else
print '<input type="radio" name="answer3" value="a"/>2<br/>';
if ($_POST['answer3']=="b")
print '<input type="radio" checked="checked" name="answer3" value="b"/>1.683<br>';
else
print '<input type="radio" name="answer3" value="b"/>1.683<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>1.375<br/>';
else
print '<input type="radio" name="answer3" value="c"/>1.375<br/>';
if ($_POST['answer3']=="d"){
print '<input type="radio" checked="checked" name="answer3" value="d"/>-1.375<br/><br/>';
$correct++;
}
else
print '<input type="radio" name="answer3" value="d"/>-1.375<br/><br/>';


print '<p>4. 1500/500 =</p>';
if ($_POST['answer4']=="a")
print '<p><input type="radio" checked="checked" name="answer4" value="a"/>3.2<br/>';
else
print '<p><input type="radio" name="answer4" value="a"/>3.2<br/>';
if ($_POST['answer4']=="b")
print '<input type="radio" checked="checked" name="answer4" value="b"/>4<br/>';
else
print '<input type="radio" name="answer4" value="b"/>4<br/>';
if ($_POST['answer4']=="c"){
print '<input type="radio" checked="checked" name="answer4" value="c"/>3<br/>';
$correct++;
}
else
print '<input type="radio" name="answer4" value="c"/>3<br/>';
if ($_POST['answer4']=="d")
print '<input type="radio" checked="checked" name="answer4" value="d"/>11<br/>';
else
print '<input type="radio" name="answer4" value="d"/>11<br/><br/></p>';


print '<p>5. 420/20 =</p>';
if ($_POST['answer5']=="a")
print '<p><input type="radio" checked="checked" name="answer5" value="a"/>22<br/>';
else
print '<p><input type="radio" name="answer5" value="a"/>22<br/>';
if ($_POST['answer5']=="b"){
print '<input type="radio" checked="checked" name="answer5" value="b"/>21<br/>';
$correct++;
}
else
print '<input type="radio" name="answer5" value="b"/>21<br/>';
if ($_POST['answer5']=="c")
print '<input type="radio" checked="checked" name="answer5" value="c"/>20<br/>';
else
print '<input type="radio" name="answer5" value="c"/>20<br/>';
if ($_POST['answer5']=="d")
print '<input type="radio" checked="checked" name="answer5" value="d"/>11<br/>';
else
print '<input type="radio" name="answer5" value="d"/>11<br/><br/></p>';


foreach ($_POST as $value){
if (isset ($value)){
$done++;
}
}
if ($done !=6)
print '<input type="submit" name="submit" value="check answers" /><br/><br/>';
if (($done > 0)&&($done < 6))
print 'You haven&#8217;t answered all the questions. Please finish the quiz and re-submit your answers.';
if($done==6){
if ($correct==0)
$correct="0";
print "Your score is $correct/5.<br/><br/>";
print 'The correct answers: 1. 25.5&nbsp;&nbsp; 2. 0.5&nbsp;&nbsp; 3. -1.375&nbsp;&nbsp; 4. 3&nbsp;&nbsp; 5. 21';
}
print '</form>';
?>
    </body>
</html>