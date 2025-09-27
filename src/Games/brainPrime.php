<?php

namespace BrainGames\brainPrime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\showDescriptionGame;
use function BrainGames\Engine\compareAnswers;
use function BrainGames\Engine\endOfGame;

function brainPrimeGame($name): void
{
    $game = 'prime';
    showDescriptionGame($game);
    $countCorrectAnswer = compareAnswers($game, $name);
    endOfGame($name, $countCorrectAnswer);
}
