<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\runRounds;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const ROUNDS = 3;

function runPrime(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = random_int(1, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        $rounds[] = [$question, $correctAnswer];
    }
    runRounds(DESCRIPTION, $rounds);
}

function isPrime(int $question): bool
{
    if ($question < 2) {
        return false;
    } elseif ($question === 2) {
        return true;
    } elseif ($question % 2 === 0) {
        return false;
    }
    $sqrt = (int)sqrt($question);
    for ($i = 3; $i <= $sqrt; $i += 2) {
        if ($question % $i === 0) {
            return false;
        }
    }
    return true;
}
