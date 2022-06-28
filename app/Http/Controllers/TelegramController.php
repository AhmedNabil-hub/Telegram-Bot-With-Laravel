<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use SergiX44\Nutgram\Nutgram;

class TelegramController extends Controller
{
	public function handle(Nutgram $bot)
	{
		//
	}

	public function mesaCommand(Nutgram $bot)
	{
		$updates = $bot->getUpdates();
		$message = "";
		if (!empty($updates)) {
			foreach ($updates as $update) {
				$id = $update->message->from->id;
				$name = $update->message->from->last_name ?
					$update->message->from->first_name . ' ' . $update->message->from->last_name :
					$update->message->from->first_name;

				// $name = $update->message->from->username;

				$message = "mesa ya [$name](tg://user?id=$id)";
				$bot->sendMessage(
					$message,
					[
						'parse_mode' => 'Markdown',
						'reply_to_message_id' => $update->message->message_id,
					]
				);
			}
			return;
		}

		return $bot->sendMessage('mesa ya ma7maaa');
	}

	public function everyoneCommand(Nutgram $bot)
	{
		$admins = $bot->getChatAdministrators(config('nutgram.group_chat_id'));
		$mentions = "";
		foreach ($admins as $admin) {
			$id = $admin->user->id;
			$name = $admin->user->last_name ?
				$admin->user->first_name . ' ' . $admin->user->last_name :
				$admin->user->first_name;

			// $name = $admin->user->username;

			$mentions .= "[$name](tg://user?id=$id) ";
		}
		return $bot->sendMessage($mentions, ['parse_mode' => 'Markdown']);
	}
}
