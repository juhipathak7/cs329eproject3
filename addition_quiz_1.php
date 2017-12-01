<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            Addition Quiz 1
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
print '<form action="addition_quiz_1.php" method="post">';
//BEGINNING OF QUESTION ONE 


print '<p>1. 2+2 =</p>';
if ($_POST['answer1']=="a")
print '<input type="radio" checked="checked" name="answer1" value="a"/>5<br/>';
else
print '<p><input type="radio" name="answer1" value="a"/>5<br/>';
if ($_POST['answer1']=="b"){
print '<input type="radio" checked="checked" name="answer1" value="b"/>4<br/>';
$correct++;
}
else
print '<input type="radio" name="answer1" value="b"/>4<br/>';
if ($_POST['answer1']=="c")
print '<input type="radio" checked="checked" name="answer1" value="c"/>3<br/>';
else
print '<input type="radio" name="answer1" value="c"/>3<br/>';
if ($_POST['answer1']=="d")
print '<input type="radio" checked="checked" name="answer1" value="d"/>2<br/>';
else
print '<input type="radio" name="answer1" value="d"/>2<br/></p>';


print '<p>2. 94+69 =</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>153<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer2" value="a"/>153<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer2" value="b"/>129<br/>';
else
print '<input type="radio" name="answer2" value="b"/>129<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer2" value="c"/>163<br/>';
else
print '<input type="radio" name="answer2" value="c"/>63<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer2" value="d"/>165<br/>';
else
print '<input type="radio" name="answer2" value="d"/>165<br/><br/></p>';


print '<p>3. 21+54 =</p>';
if ($_POST['answer3']=="a"){
print '<input type="radio" checked="checked" name="answer3" value="a"/>75<br/>';
$correct++;
}
else
print '<input type="radio" name="answer3" value="a"/>75<br/>';
if ($_POST['answer3']=="b")
print '<input type="radio" checked="checked" name="answer3" value="b"/>21<br>';
else
print '<input type="radio" name="answer3" value="b"/>21<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>70<br/>';
else
print '<input type="radio" name="answer3" value="c"/>70<br/>';
if ($_POST['answer3']=="d")
print '<input type="radio" checked="checked" name="answer3" value="d"/>54<br/><br/>';
else
print '<input type="radio" name="answer3" value="d"/>54<br/><br/>';


print '<p>4. 201+863 =</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer4" value="a"/>1064<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer4" value="a"/>1064<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer4" value="b"/>1004<br/>';
else
print '<input type="radio" name="answer4" value="b"/>1004<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer4" value="c"/>1604<br/>';
else
print '<input type="radio" name="answer4" value="c"/>1604<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer4" value="d"/>1404<br/>';
else
print '<input type="radio" name="answer4" value="d"/>1404<br/><br/></p>';


print '<p>5. 344+83 =</p>';
if ($_POST['answer5']=="a")
print '<p><input type="radio" checked="checked" name="answer5" value="a"/>499<br/>';
else
print '<p><input type="radio" name="answer5" value="a"/>499<br/>';
if ($_POST['answer5']=="b")
print '<input type="radio" checked="checked" name="answer5" value="b"/>477<br/>';
else
print '<input type="radio" name="answer5" value="b"/>477<br/>';
if ($_POST['answer5']=="c")
print '<input type="radio" checked="checked" name="answer5" value="c"/>407<br/>';
else
print '<input type="radio" name="answer5" value="c"/>407<br/>';
if ($_POST['answer5']=="d"){
print '<input type="radio" checked="checked" name="answer5" value="d"/>427<br/>';
$correct++;
}
else
print '<input type="radio" name="answer5" value="d"/>427<br/><br/></p>';


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
print 'The correct answers: 1. 4&nbsp;&nbsp; 2. 163&nbsp;&nbsp; 3. 75&nbsp;&nbsp; 4. 1064&nbsp;&nbsp; 5. 427';
}
print '</form>';
?>
    </body>
</html>