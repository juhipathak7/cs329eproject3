<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            Multiplication Quiz 1
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
print '<form action="multiplication_quiz_1.php" method="post">';
//BEGINNING OF QUESTION ONE 


print '<p>1. 45*40 =</p>';
if ($_POST['answer1']=="a"){
print '<input type="radio" checked="checked" name="answer1" value="a"/>1800<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer1" value="a"/>1800<br/>';
if ($_POST['answer1']=="b")
print '<input type="radio" checked="checked" name="answer1" value="b"/>1900<br/>';
else
print '<input type="radio" name="answer1" value="b"/>1900<br/>';
if ($_POST['answer1']=="c")
print '<input type="radio" checked="checked" name="answer1" value="c"/>300<br/>';
else
print '<input type="radio" name="answer1" value="c"/>300<br/>';
if ($_POST['answer1']=="d")
print '<input type="radio" checked="checked" name="answer1" value="d"/>2000<br/>';
else
print '<input type="radio" name="answer1" value="d"/>2000<br/></p>';


print '<p>2. 94*69 =</p>';
if ($_POST['answer2']=="a")
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>25<br/>';
else
print '<p><input type="radio" name="answer2" value="a"/>25<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer2" value="b"/>30<br/>';
else
print '<input type="radio" name="answer2" value="b"/>30<br/>';
if ($_POST['answer2']=="c"){
print '<input type="radio" checked="checked" name="answer2" value="c"/>6486<br/>';
$correct++;
}
else
print '<input type="radio" name="answer2" value="c"/>6486<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer2" value="d"/>4<br/>';
else
print '<input type="radio" name="answer2" value="d"/>4<br/><br/></p>';


print '<p>3. -21*54 =</p>';
if ($_POST['answer3']=="a")
print '<input type="radio" checked="checked" name="answer3" value="a"/>-32<br/>';
else
print '<input type="radio" name="answer3" value="a"/>-32<br/>';
if ($_POST['answer3']=="b"){
print '<input type="radio" checked="checked" name="answer3" value="b"/>-1134<br>';
$correct++;
}
else
print '<input type="radio" name="answer3" value="b"/>-1134<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>-25<br/>';
else
print '<input type="radio" name="answer3" value="c"/>-25<br/>';
if ($_POST['answer3']=="d")
print '<input type="radio" checked="checked" name="answer3" value="d"/>-33<br/><br/>';
else
print '<input type="radio" name="answer3" value="d"/>-33<br/><br/>';


print '<p>4. 201*863 =</p>';
if ($_POST['answer4']=="a"){
print '<p><input type="radio" checked="checked" name="answer4" value="a"/>173463<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer4" value="a"/>173463<br/>';
if ($_POST['answer4']=="b")
print '<input type="radio" checked="checked" name="answer4" value="b"/>177777<br/>';
else
print '<input type="radio" name="answer4" value="b"/>177777<br/>';
if ($_POST['answer4']=="c")
print '<input type="radio" checked="checked" name="answer4" value="c"/>17465<br/>';
else
print '<input type="radio" name="answer4" value="c"/>17465<br/>';
if ($_POST['answer4']=="d")
print '<input type="radio" checked="checked" name="answer4" value="d"/>10000<br/>';
else
print '<input type="radio" name="answer4" value="d"/>10000<br/><br/></p>';


print '<p>5. 344*83 =</p>';
if ($_POST['answer5']=="a")
print '<p><input type="radio" checked="checked" name="answer5" value="a"/>26000<br/>';
else
print '<p><input type="radio" name="answer5" value="a"/>26000<br/>';
if ($_POST['answer5']=="b")
print '<input type="radio" checked="checked" name="answer5" value="b"/>25900<br/>';
else
print '<input type="radio" name="answer5" value="b"/>25900<br/>';
if ($_POST['answer5']=="c")
print '<input type="radio" checked="checked" name="answer5" value="c"/>26100<br/>';
else
print '<input type="radio" name="answer5" value="c"/>26100<br/>';
if ($_POST['answer5']=="d"){
print '<input type="radio" checked="checked" name="answer5" value="d"/>28552<br/>';
$correct++;
}
else
print '<input type="radio" name="answer5" value="d"/>28552<br/><br/></p>';


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
print 'The correct answers: 1. 1800&nbsp;&nbsp; 2. 6486&nbsp;&nbsp; 3. -1134&nbsp;&nbsp; 4. 173463&nbsp;&nbsp; 5. 28552';
}
print '</form>';
?>
    </body>
</html>