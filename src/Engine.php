<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runRounds(string $description, array $rounds): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($description);

    foreach ($rounds as [$question, $correctAnswer]) {
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer !== (string)$correctAnswer) {
            line(
                "'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!",
                $userAnswer,
                $correctAnswer,
                $name
            );
            return;
        }
        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
