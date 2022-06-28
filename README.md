# Telegram Bot With Laravel

### Available Commands
- **mesa :** Command that sends "mesa ya *username*" reply message
- **everyone :** Command that mentions every admin in the group

### Installation
- Download the repo
- run *composer install*
- copy .env.example to .env
- run *php artisan key:generate*
- in .env:
  - put your bot api key in **TELEGRAM_TOKEN variable**
  - put the group chat id in **GROUP_CHAT_ID**
- run *php artisan nutgram:run*
- Finally, Mesa ya :kissing_heart:
