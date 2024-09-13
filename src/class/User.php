<?php

declare(strict_types=1);

namespace src\class;

use src\traits\AppUserAuthentication;
use src\traits\MobileUserAuthentication;

// Класс, который использует оба трейта для проверки аутентификации
class User
{
    // Подключаем оба трейта
    use AppUserAuthentication, MobileUserAuthentication {
        // Указываем, что в случае конфликта метода authenticate будем использовать оба метода
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as mobileAuthenticate;
    }

    // Метод для проверки, каким образом пытается авторизоваться пользователь
    public function checkAuthentication($login, $password): string
    {
        // Сначала проверяем авторизацию как пользователь приложения
        $result = $this->authenticate($login, $password);

        // Если авторизация не удалась, пробуем как пользователь мобильного приложения
        if (!$result) {
            $result = $this->mobileAuthenticate($login, $password);
        }

        // Возвращаем результат авторизации
        return $result ? $result : 'Авторизация не удалась';
    }
}
