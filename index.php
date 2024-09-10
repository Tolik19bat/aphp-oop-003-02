<?php

// Подключаем автозагрузчик
require_once 'autoload.php';

use src\class\User;

// Создаем объект пользователя
$user = new User();

// Пробуем авторизоваться как пользователь приложения
echo $user->checkAuthentication('appUser', 'appPass') . PHP_EOL; // Авторизация как пользователь приложения

// Пробуем авторизоваться как пользователь мобильного приложения
echo $user->checkAuthentication('mobileUser', 'mobilePass') . PHP_EOL; // Авторизация как пользователь мобильного приложения

// Пробуем авторизоваться с неверными данными
echo $user->checkAuthentication('wrongUser', 'wrongPass') . PHP_EOL; // Авторизация не удалась
