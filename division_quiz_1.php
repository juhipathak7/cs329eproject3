<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            Division Quiz 1
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
print '<form action="division_quiz_1.php" method="post">';
//BEGINNING OF QUESTION ONE 


print '<p>1. 45/5 =</p>';
if ($_POST['answer1']=="a"){
print '<input type="radio" checked="checked" name="answer1" value="a"/>9<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer1" value="a"/>9<br/>';
if ($_POST['answer1']=="b")
print '<input type="radio" checked="checked" name="answer1" value="b"/>6<br/>';
else
print '<input type="radio" name="answer1" value="b"/>6<br/>';
if ($_POST['answer1']=="c")
print '<input type="radio" checked="checked" name="answer1" value="c"/>8<br/>';
else
print '<input type="radio" name="answer1" value="c"/>8<br/>';
if ($_POST['answer1']=="d")
print '<input type="radio" checked="checked" name="answer1" value="d"/>7<br/>';
else
print '<input type="radio" name="answer1" value="d"/>7<br/></p>';


print '<p>2. 5/5 =</p>';
if ($_POST['answer2']=="a")
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>3<br/>';
else
print '<p><input type="radio" name="answer2" value="a"/>3<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer2" value="b"/>4<br/>';
else
print '<input type="radio" name="answer2" value="b"/>4<br/>';
if ($_POST['answer2']=="c"){
print '<input type="radio" checked="checked" name="answer2" value="c"/>1<br/>';
$correct++;
}
else
print '<input type="radio" name="answer2" value="c"/>1<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer2" value="d"/>5<br/>';
else
print '<input type="radio" name="answer2" value="d"/>5<br/><br/></p>';


print '<p>3. 21/3 =</p>';
if ($_POST['answer3']=="a")
print '<input type="radio" checked="checked" name="answer3" value="a"/>-8<br/>';
else
print '<input type="radio" name="answer3" value="a"/>-8<br/>';
if ($_POST['answer3']=="b"){
print '<input type="radio" checked="checked" name="answer3" value="b"/>7<br>';
$correct++;
}
else
print '<input type="radio" name="answer3" value="b"/>7<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>11<br/>';
else
print '<input type="radio" name="answer3" value="c"/>11<br/>';
if ($_POST['answer3']=="d")
print '<input type="radio" checked="checked" name="answer3" value="d"/>5<br/><br/>';
else
print '<input type="radio" name="answer3" value="d"/>5<br/><br/>';


print '<p>4. 202/2 =</p>';
if ($_POST['answer4']=="a"){
print '<p><input type="radio" checked="checked" name="answer4" value="a"/>101<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer4" value="a"/>101<br/>';
if ($_POST['answer4']=="b")
print '<input type="radio" checked="checked" name="answer4" value="b"/>100<br/>';
else
print '<input type="radio" name="answer4" value="b"/>100<br/>';
if ($_POST['answer4']=="c")
print '<input type="radio" checked="checked" name="answer4" value="c"/>99<br/>';
else
print '<input type="radio" name="answer4" value="c"/>99<br/>';
if ($_POST['answer4']=="d")
print '<input type="radio" checked="checked" name="answer4" value="d"/>103<br/>';
else
print '<input type="radio" name="answer4" value="d"/>103<br/><br/></p>';


print '<p>5. 344/4 =</p>';
if ($_POST['answer5']=="a")
print '<p><input type="radio" checked="checked" name="answer5" value="a"/>80<br/>';
else
print '<p><input type="radio" name="answer5" value="a"/>80<br/>';
if ($_POST['answer5']=="b")
print '<input type="radio" checked="checked" name="answer5" value="b"/>81<br/>';
else
print '<input type="radio" name="answer5" value="b"/>81<br/>';
if ($_POST['answer5']=="c")
print '<input type="radio" checked="checked" name="answer5" value="c"/>68<br/>';
else
print '<input type="radio" name="answer5" value="c"/>68<br/>';
if ($_POST['answer5']=="d"){
print '<input type="radio" checked="checked" name="answer5" value="d"/>86<br/>';
$correct++;
}
else
print '<input type="radio" name="answer5" value="d"/>86<br/><br/></p>';


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
print 'The correct answers: 1. 9&nbsp;&nbsp; 2. 1&nbsp;&nbsp; 3. 7&nbsp;&nbsp; 4. 101&nbsp;&nbsp; 5. 86';
}
print '</form>';
?>
    </body>
</html>