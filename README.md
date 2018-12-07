# Email blacklist

###Установка

```sh
composer config repositories.email-blacklist vcs https://github.com/Redfard/email-blacklist
composer require Redfard/email-blacklist
php artisan migrate
```

###Методы

Вызов методов доступен через фасад EmailBlacklist.

- EmailBlacklist::add($email) - добавление почты в список
- EmailBlacklist::remove($email) - удаление почты из списка
- EmailBlacklist::emailExist($email) - проверка наличия почты в списке
- EmailBlacklist::checkCorrectEmail($email) - проверка почты на корректность
