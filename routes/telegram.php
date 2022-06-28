<?php

/** @var SergiX44\Nutgram\Nutgram $bot */

use App\Http\Controllers\TelegramController;
use SergiX44\Nutgram\Nutgram;

/*
|--------------------------------------------------------------------------
| Nutgram Handlers
|--------------------------------------------------------------------------
|
| Here is where you can register telegram handlers for Nutgram. These
| handlers are loaded by the NutgramServiceProvider. Enjoy!
|
*/

$telegram_controller = new TelegramController();

$bot->onCommand('start', function (Nutgram $bot) {
	return $bot->sendMessage('Hello, world!');
})->description('The start command!');

$bot->onCommand('mesa', $telegram_controller->mesaCommand($bot))
	->description('Mesa');

$bot->onCommand('everyone', $telegram_controller->mesaCommand($bot))
	->description('Everyone');
