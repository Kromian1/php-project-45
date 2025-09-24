<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function welcomeUser(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
function showDescriptionGame(): void
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}
function generateAndShowRandom(): int
{
    $random = mt_rand(1, 1000);
    line("Question: %d", $random);
    return $random;
}
function getUserAnswer(): string
{
    $userAnswer = prompt('Your answer');
    return $userAnswer;
}
function isEven(int $random): string
{
    return $random % 2 == 0 ? 'yes' : 'no';
}
function checkAnswer(string $userAnswer, string $correctAnswer): string
{
    return $userAnswer === $correctAnswer ? 'yes' : 'no';
}
function compareAnswers($name)
{
    $countCorrectAnswer = 0;
    for ($i = 0; $i < 3; $i++) {
        $random = generateAndShowRandom();
        $userAnswer = getUserAnswer();
        $correctAnswer = isEven($random);
        $result = checkAnswer($userAnswer, $correctAnswer);
        if ($result === 'no') {
            if ($userAnswer == 'yes') {
                line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!", $name);
                break;
            } elseif ($userAnswer == 'no') {
                line("'no' is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, %s!", $name);
                break;
            } else {
                line(
                    "'%s' answer is wrong ;(. Correct answer was '%s'.\nLet's try again, %s!",
                    $userAnswer,
                    $correctAnswer,
                    $name
                );
                break;
            }
        } else {
            line('Correct!');
            $countCorrectAnswer++;
        }
    }
    if ($countCorrectAnswer === 3) {
        return line("Congratulations, %s!", $name);
    }
}
