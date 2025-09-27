<?php

namespace BrainGames\brainCalc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcomeUser;
use function BrainGames\Engine\showDescriptionGame;
use function BrainGames\Engine\compareAnswers;
use function BrainGames\Engine\endOfGame;

function brainCalcGame(): void
{
    $name = welcomeUser();
    $game = 'calc';
    showDescriptionGame($game);
    $countCorrectAnswer = compareAnswers($game, $name);
    endOfGame($name, $countCorrectAnswer);
}
