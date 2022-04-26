<?php
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];

$correctAnswers = 0;

if ($answer1 == "James")
{
    $correctAnswers++;
}
if ($answer2 == "Mary")
{
    $correctAnswers++;
}
if ($answer3 == "Fear of dogs")
{
    $correctAnswers++;
}
if ($answer4 == "Seven")
{
    $correctAnswers++;
}
if ($answer5 == "Cairo")
{
    $correctAnswers++;
}

echo "<h3>Score:</h3>";
echo "Points: " . $correctAnswers . " / 5<br>";
echo "Percentage: " . ($correctAnswers * 20) . "%<br>";

echo "<br><h3>Answers:</h3>";
echo "Question 1: What is the most common male name in the US?<br>";
echo "You answered: " . $answer1 . "<br>";
echo "Correct answer: James<br><br>";

echo "Question 2: What is the most common female name in the US?<br>";
echo "You answered: " . $answer2 . "<br>";
echo "Correct answer: Mary<br><br>";

echo "Question 3: What is \"cynophobia\"?<br>";
echo "You answered: " . $answer3 . "<br>";
echo "Correct answer: Fear of dogs<br><br>";

echo "Question 4: How many Dragon Balls are there?<br>";
echo "You answered: " . $answer4 . "<br>";
echo "Correct answer: Seven<br><br>";

echo "Question 5: What is the capital of Egypt?<br>";
echo "You answered: " . $answer5 . "<br>";
echo "Correct answer: Cairo<br><br>";
?>