<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const UNKNOWN_GAME = 'Unknown game';

function welcomeUser(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
function showDescriptionGame(string $game): void
{
    switch ($game) {
        case 'even':
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 'calc':
            line('What is the result of the expression?');
            break;
        case 'gcd':
            line('Find the greatest common divisor of given numbers.');
            break;
        case 'progression':
            line('What number is missing in the progression?');
            break;
        case 'prime':
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
            break;
        default:
            line(UNKNOWN_GAME);
            break;
    }
}
function generateRandom(): int
{
    return random_int(1, 100);
}
function generateExpression(): string
{
    $operator = ['+', '-', '*'];
    return $operator[array_rand($operator)];
}
function showQuestion(
    string $game,
    int $random = 0,
    string $expression = '',
    int $argument1 = 0,
    int $argument2 = 0,
    string $hiddenProgressionStr = ''
): void {
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
                default:
                    line('Unknown expression');
                    break;
            }
            break;
        case 'gcd':
            line('Question: %d %d', $argument1, $argument2);
            break;
        case 'progression':
            line('Question: %s', $hiddenProgressionStr);
            break;
        case 'prime':
            line('Question: %d', $random);
            break;
        default:
            line(UNKNOWN_GAME);
            break;
    }
}
function getUserAnswer(): string
{
    return prompt('Your answer');
}
function calculate(string $expression, int $argument1, int $argument2): int
{
    switch ($expression) {
        case '+':
            return $argument1 + $argument2;
        case '-':
            return $argument1 - $argument2;
        case '*':
            return $argument1 * $argument2;
        default:
            line('Unknown expression');
            return 0;
    }
}
function isEven(int $random): string
{
    return $random % 2 === 0 ? 'yes' : 'no';
}
function getNOD(int $argument1, int $argument2): int
{
    while ($argument2 !== 0) {
            $tempArg = $argument1;
            $argument1 = $argument2;
            $argument2 = $tempArg % $argument2;
    }
        return $argument1;
}
function getRandomLengthProgression(): int
{
        return random_int(5, 10);
}
function getRandomDifferenceProgression(): int
{
    return random_int(1, 10);
}
function getRandomHiddenNumberProgression(int $length): int
{
    return random_int(0, $length - 1);
}
function getProgression(int $length, int $difference, int $firstNumber): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $firstNumber + $i * $difference;
    }
    return $progression;
}
function getAnswerProgression(array $progression, int $hiddenNumber): int
{
    return $progression[$hiddenNumber];
}
function getHiddenProgression(array $progression, int $hiddenNumber): array
{
    $progression[$hiddenNumber] = '..';
    return $progression;
}
function isPrime(int $random): string
{
    if ($random < 2 || $random % 2 === 0) {
        return 'no';
    } elseif ($random === 2) {
        return 'yes';
    }
    $sqrt = (int)sqrt($random);
    for ($i = 3; $i <= $sqrt; $i += 2) {
        if ($random % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}
function compareAnswers(string $game, string $name): int
{
    $countCorrectAnswer = 0;
    for ($i = 0; $i < 3; $i++) {
        switch ($game) {
            case 'even':
                $random = generateRandom();
                showQuestion($game, $random, '', 0, 0, '');
                $correctAnswer = isEven($random);
                break;
            case 'calc':
                $expression = generateExpression();
                $argument1 = generateRandom();
                $argument2 = generateRandom();
                showQuestion($game, 0, $expression, $argument1, $argument2, '');
                $correctAnswer = (string)calculate($expression, $argument1, $argument2);
                break;
            case 'gcd':
                $argument1 = generateRandom();
                $argument2 = generateRandom();
                showQuestion($game, 0, '', $argument1, $argument2, '');
                $correctAnswer = (string)getNOD($argument1, $argument2);
                break;
            case 'progression':
                $length = getRandomLengthProgression();
                $difference = getRandomDifferenceProgression();
                $firstNumber = generateRandom();
                $progression = getProgression($length, $difference, $firstNumber);
                $hiddenNumber = getRandomHiddenNumberProgression($length);
                $hiddenProgression = getHiddenProgression($progression, $hiddenNumber);
                $hiddenProgressionStr = implode(' ', $hiddenProgression);
                showQuestion($game, 0, '', 0, 0, $hiddenProgressionStr);
                $correctAnswer = (string)getAnswerProgression($progression, $hiddenNumber);
                break;
            case 'prime':
                $random = generateRandom();
                showQuestion($game, $random, '', 0, 0, '');
                $correctAnswer = isPrime($random);
                break;
            default:
                line(UNKNOWN_GAME);
                break;
        }
        $userAnswer = getUserAnswer();
        if ($userAnswer !== $correctAnswer) {
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
function endOfGame(string $name, int $countCorrectAnswer): void
{
    if ($countCorrectAnswer === 3) {
        line("Congratulations, %s!", $name);
    }
}
