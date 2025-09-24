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
function showDescriptionGame($game): void
{
    switch ($game) {
        case 'even':
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 'calc':
            line('What is the result of the expression?');
            break;
    }
}
function generateRandom(): int
{
    $random = mt_rand(1, 100);
    return $random;
}
function generateExpression(): string
{
    $operator = ['+', '-', '*'];
    $expression = $operator[array_rand($operator)];
    return $expression;
}
function showQuestion(string $game, int $random = 0, string $expression = '', int $argument1 = 0, int $argument2 = 0): void
{
    switch ($game) {
        case 'even':
            line("Question: %d", $random);
            break;
        case 'calc':
            switch ($expression) {
                case '+':
                    line("Question: %d + %d", $argument1, $argument2);
                    break;
                case '-':
                    line("Question: %d - %d", $argument1, $argument2);
                    break;
                case '*':
                    line("Question: %d * %d", $argument1, $argument2);
                    break;
            }
            break;
    }
}
function getUserAnswer(): string
{
    $userAnswer = prompt('Your answer');
    return $userAnswer;
}
function calculate($expression, $argument1, $argument2): int
{
    switch ($expression) {
        case '+':
            $correctAnswer = $argument1 + $argument2;
            return $correctAnswer;
        case '-':
            $correctAnswer = $argument1 - $argument2;
            return $correctAnswer;
        case '*':
            $correctAnswer = $argument1 * $argument2;
            return $correctAnswer;
    }
}
function isEven(int $random): string
{
    return $random % 2 == 0 ? 'yes' : 'no';
}
function compareAnswers($game, $name): int
{
    $countCorrectAnswer = 0;
    for ($i = 0; $i < 3; $i++) {
        switch ($game) {
            case 'even':
                $random = generateRandom();
                showQuestion($game, $random);
                $correctAnswer = isEven($random);
                break;
            case 'calc':
                $expression = generateExpression();
                $argument1 = generateRandom();
                $argument2 = generateRandom();
                showQuestion($game, 0, $expression, $argument1, $argument2);
                $correctAnswer = calculate($expression, $argument1, $argument2);
                break;
        }
        $userAnswer = getUserAnswer();
        if ($userAnswer != $correctAnswer) {
                line(
                    "'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!",
                    $userAnswer,
                    $correctAnswer,
                    $name
                );
                break;
        } else {
            line('Correct!');
            $countCorrectAnswer++;
        }
    }
    return $countCorrectAnswer;
}
function endOfGame($name, $countCorrectAnswer): void
{
    if ($countCorrectAnswer === 3) {
        line("Congratulations, %s!", $name);
    }
}
