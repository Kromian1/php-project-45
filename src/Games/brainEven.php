<?php

namespace BrainGames\brainEven;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcomeUser;
use function BrainGames\Engine\showDescriptionGameEven;
use function BrainGames\Engine\compareAnswers;
use function BrainGames\Engine\endOfGame;

function brainEvenGame()
{
    $game = 'even';
    $name = welcomeUser();
    showDescriptionGame();
    $countCorrectAnswer = compareAnswers($game, $name);
    endOfGame($name, $countCorrectAnswer);
}
