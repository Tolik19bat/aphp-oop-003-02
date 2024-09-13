<?php

declare(strict_types=1);

namespace src\traits;

// Трейт для аутентификации пользователя приложения
trait AppUserAuthentication
{
    // Приватные свойства для логина и пароля пользователя приложения
    private string $appLogin = 'appUser';
    private string $appPassword = 'appPass';

    // Метод для аутентификации пользователя приложения
    public function authenticate($login, $password): ?string
    {
        // Проверяем, совпадают ли введенные логин и пароль с данными пользователя приложения
        if ($login === $this->appLogin && $password === $this->appPassword) {
            return 'Авторизация как пользователь приложения';
        }
        return null; // Если данные не совпадают, возвращаем null
    }
}
