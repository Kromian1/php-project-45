<?php

namespace BrainGames\brainCalc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcomeUser;
use function BrainGames\Engine\showDescriptionGameCalc;
use function BrainGames\Engine\compareAnswers;

function brainCalcGame()
{
    $game = 'calc';
    $name = welcomeUser();
    showDescriptionGame();
    $countCorrectAnswer = compareAnswers($game, $name);
    endOfGame($name, $countCorrectAnswer);
}
