<?php

namespace BrainGames\brainProgression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcomeUser;
use function BrainGames\Engine\showDescriptionGame;
use function BrainGames\Engine\compareAnswers;
use function BrainGames\Engine\endOfGame;

function brainProgressionGame(): void
{
    $game = 'progression';
    $name = welcomeUser();
    showDescriptionGame($game);
    $countCorrectAnswer = compareAnswers($game, $name);
    endOfGame($name, $countCorrectAnswer);
}
