<?php
require_once 'autoload.php';

use App\Context\User;

$user = new User('rito');

echo sprintf('ユーザ：%s　状態：%s<br><br>', $user->getName(), $user->getStatus());

// 状態を変更する
$user->changeState();

echo sprintf('ユーザ：%s　状態：%s<br><br>', $user->getName(), $user->getStatus());

// 状態を変更する
$user->changeState();

echo sprintf('ユーザ：%s　状態：%s<br><br>', $user->getName(), $user->getStatus());

// 状態を変更する
$user->changeState();

echo sprintf('ユーザ：%s　状態：%s<br><br>', $user->getName(), $user->getStatus());