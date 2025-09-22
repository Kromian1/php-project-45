<?php

namespace BrainGames\brainEvenLogic;

use function cli\line;
use function cli\prompt;

function welcomeUser()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
function showDescriptionGame()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}
function generateAndShowRandom(): int
{
    $random = mt_rand(1, 1000);
    line("Question: %d", $random);
    return $random;
}
function getAnswer(): string
{
    $answer = prompt('Your answer:');
    return $answer;
}
function getCorrectAnswer(int $random): string
{
    return $random % 2 == 0 ? 'yes' : 'no';
}
function checkAnswer(string $answer, string $correctAnswer): string
{
    return $answer === $correctAnswer ? 'yes' : 'no';
}
function brainEvenGame()
{
    $countCorrectAnswers = 0;
    for ($i = 0; $i < 2; $i++) {
        $name = welcomeUser();
        generateAndShowRandom();
        $userAnswer = getAnswer();
        $correctAnswer = getCorrectAnswer($random);
        $result = checkAnswer($userAnswer, $correctAnswer);
        if ($result === 'no') {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!", $name);
            break;
        } else {
            line('Correct!');
        }
    }
    return line("Congratulations, %s!", $name);
}
