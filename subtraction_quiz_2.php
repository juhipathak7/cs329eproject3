<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            Subtraction Quiz 2
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
print '<form action="subtraction_quiz_2.php" method="post">';
//BEGINNING OF QUESTION ONE 


print '<p>1. 51-29 =</p>';
if ($_POST['answer1']=="a")
print '<input type="radio" checked="checked" name="answer1" value="a"/>75<br/>';
else
print '<p><input type="radio" name="answer1" value="a"/>75<br/>';
if ($_POST['answer1']=="b"){
print '<input type="radio" checked="checked" name="answer1" value="b"/>22<br/>';
$correct++;
}
else
print '<input type="radio" name="answer1" value="b"/>22<br/>';
if ($_POST['answer1']=="c")
print '<input type="radio" checked="checked" name="answer1" value="c"/>70<br/>';
else
print '<input type="radio" name="answer1" value="c"/>70<br/>';
if ($_POST['answer1']=="d")
print '<input type="radio" checked="checked" name="answer1" value="d"/>81<br/>';
else
print '<input type="radio" name="answer1" value="d"/>81<br/></p>';


print '<p>2. 33-66 =</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>-33<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer2" value="a"/>-33<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer2" value="b"/>99<br/>';
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


print '<p>3. 11-8 =</p>';
if ($_POST['answer3']=="a")
print '<input type="radio" checked="checked" name="answer3" value="a"/>-21<br/>';
else
print '<input type="radio" name="answer3" value="a"/>21<br/>';
if ($_POST['answer3']=="b"){
print '<input type="radio" checked="checked" name="answer3" value="b"/>3<br>';
$correct++;
}
else
print '<input type="radio" name="answer3" value="b"/>3<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>35<br/>';
else
print '<input type="radio" name="answer3" value="c"/>35<br/>';
if ($_POST['answer3']=="d")
print '<input type="radio" checked="checked" name="answer3" value="d"/>18<br/><br/>';
else
print '<input type="radio" name="answer3" value="d"/>18<br/><br/>';


print '<p>4. 1559-500 =</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer4" value="a"/>1059<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer4" value="a"/>1059<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer4" value="b"/>1010<br/>';
else
print '<input type="radio" name="answer4" value="b"/>1010<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer4" value="c"/>1200<br/>';
else
print '<input type="radio" name="answer4" value="c"/>1200<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer4" value="d"/>1110<br/>';
else
print '<input type="radio" name="answer4" value="d"/>1110<br/><br/></p>';


print '<p>5. 354-446 =</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer5" value="a"/>-92<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer5" value="a"/>-92<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer5" value="b"/>-91<br/>';
else
print '<input type="radio" name="answer5" value="b"/>-91<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer5" value="c"/>94<br/>';
else
print '<input type="radio" name="answer5" value="c"/>-94<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer5" value="d"/>100<br/>';
else
print '<input type="radio" name="answer5" value="d"/>100<br/><br/></p>';


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
print 'The correct answers: 1. 22&nbsp;&nbsp; 2. -33&nbsp;&nbsp; 3. 3&nbsp;&nbsp; 4. 1059&nbsp;&nbsp; 5. -92';
}
print '</form>';
?>
    </body>
</html>