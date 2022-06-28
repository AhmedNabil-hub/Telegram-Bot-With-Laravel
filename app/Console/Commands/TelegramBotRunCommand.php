<?php

namespace App\Console\Commands;

use SergiX44\Nutgram\Nutgram;
use Illuminate\Console\Command;

class TelegramBotRunCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'tbot:run';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Run Telegram Bot';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		app(Nutgram::class)->run();
	}
}
