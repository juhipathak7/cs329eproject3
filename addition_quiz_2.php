<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            Addition Quiz 2
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
print '<form action="addition_quiz_2.php" method="post">';
//BEGINNING OF QUESTION ONE 


print '<p>1. 51+29 =</p>';
if ($_POST['answer1']=="a")
print '<input type="radio" checked="checked" name="answer1" value="a"/>22<br/>';
else
print '<p><input type="radio" name="answer1" value="a"/>22<br/>';
if ($_POST['answer1']=="b"){
print '<input type="radio" checked="checked" name="answer1" value="b"/>80<br/>';
$correct++;
}
else
print '<input type="radio" name="answer1" value="b"/>80<br/>';
if ($_POST['answer1']=="c")
print '<input type="radio" checked="checked" name="answer1" value="c"/>79<br/>';
else
print '<input type="radio" name="answer1" value="c"/>79<br/>';
if ($_POST['answer1']=="d")
print '<input type="radio" checked="checked" name="answer1" value="d"/>81<br/>';
else
print '<input type="radio" name="answer1" value="d"/>81<br/></p>';


print '<p>2. 33+66 =</p>';
if ($_POST['answer2']=="a")
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>89<br/>';
else
print '<p><input type="radio" name="answer2" value="a"/>89<br/>';
if ($_POST['answer2']=="b"){
print '<input type="radio" checked="checked" name="answer2" value="b"/>99<br/>';
$correct++;
}
else
print '<input type="radio" name="answer2" value="b"/>99<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer2" value="c"/>98<br/>';
else
print '<input type="radio" name="answer2" value="c"/>98<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer2" value="d"/>95<br/>';
else
print '<input type="radio" name="answer2" value="d"/>95<br/><br/></p>';


print '<p>3. 11+8 =</p>';
if ($_POST['answer3']=="a")
print '<input type="radio" checked="checked" name="answer3" value="a"/>21<br/>';
else
print '<input type="radio" name="answer3" value="a"/>21<br/>';
if ($_POST['answer3']=="b"){
print '<input type="radio" checked="checked" name="answer3" value="b"/>19<br>';
$correct++;
}
else
print '<input type="radio" name="answer3" value="b"/>19<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>35<br/>';
else
print '<input type="radio" name="answer3" value="c"/>35<br/>';
if ($_POST['answer3']=="d")
print '<input type="radio" checked="checked" name="answer3" value="d"/>18<br/><br/>';
else
print '<input type="radio" name="answer3" value="d"/>18<br/><br/>';


print '<p>4. 1559+500 =</p>';
if ($_POST['answer4']=="a")
print '<input type="radio" checked="checked" name="answer4" value="a"/>2010<br/>';
else
print '<input type="radio" name="answer4" value="a"/>2010<br/>';
if ($_POST['answer4']=="b"){
print '<input type="radio" checked="checked" name="answer4" value="b"/>2059<br>';
$correct++;
}
else
print '<input type="radio" name="answer4" value="b"/>2059<br/>';
if ($_POST['answer4']=="c")
print '<input type="radio" checked="checked" name="answer4" value="c"/>2200<br/>';
else
print '<input type="radio" name="answer4" value="c"/>2200<br/>';
if ($_POST['answer4']=="d")
print '<input type="radio" checked="checked" name="answer4" value="d"/>2110<br/><br/>';
else
print '<input type="radio" name="answer4" value="d"/>2110<br/><br/>';


print '<p>5. 354+446 =</p>';
if ($_POST['answer2']=="a")
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>900<br/>';
else
print '<p><input type="radio" name="answer5" value="a"/>900<br/>';
if ($_POST['answer2']=="b"){
print '<input type="radio" checked="checked" name="answer5" value="b"/>800<br/>';
$correct++;
}
else
print '<input type="radio" name="answer5" value="b"/>800<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer5" value="c"/>799<br/>';
else
print '<input type="radio" name="answer5" value="c"/>799<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer5" value="d"/>810<br/>';
else
print '<input type="radio" name="answer5" value="d"/>810<br/><br/></p>';


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
print 'The correct answers: 1. 80&nbsp;&nbsp; 2. 99&nbsp;&nbsp; 3. 19&nbsp;&nbsp; 4. 2059&nbsp;&nbsp; 5. 800';
}
print '</form>';
?>
    </body>
</html>