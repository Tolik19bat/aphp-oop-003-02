<?php

declare(strict_types=1);

namespace src\traits;

// Трейт для аутентификации пользователя мобильного приложения
trait MobileUserAuthentication
{
    // Приватные свойства для логина и пароля пользователя мобильного приложения
    private string $mobileLogin = 'mobileUser';
    private string $mobilePassword = 'mobilePass';

    // Метод для аутентификации пользователя мобильного приложения
    public function authenticate($login, $password): ?string
    {
        // Проверяем, совпадают ли введенные логин и пароль с данными пользователя мобильного приложения
        if ($login === $this->mobileLogin && $password === $this->mobilePassword) {
            return 'Авторизация как пользователь мобильного приложения';
        }
        return null; // Если данные не совпадают, возвращаем null
    }
}