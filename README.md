# Email blacklist

### Задание
https://docs.google.com/document/d/1uVPFi1N27lr0n6iaFJLsbsldpFu-dPTsJN6UyYg0Xrc/edit?usp=sharing

### Установка

```sh
composer config repositories.email-blacklist vcs https://github.com/Redfard/email-blacklist
composer require Redfard/email-blacklist
php artisan migrate
```

### Методы

Вызов методов доступен через фасад EmailBlacklist.

- EmailBlacklist::add($email) - добавление почты в список
- EmailBlacklist::remove($email) - удаление почты из списка
- EmailBlacklist::emailExist($email) - проверка наличия почты в списке
- EmailBlacklist::checkCorrectEmail($email) - проверка почты на корректность
