<?php
/**
 * 桥接模式
 *      将抽象与实现解耦，对抽象的实现，即实体行为对接口的实现
 */

include '../autoload.php';

use bridge\person\Dad;
use bridge\action\Eat;
use bridge\action\Buy;
use bridge\person\Mom;

$dad1 = new Dad(new Eat());
$dad1->action('西瓜'); // 爸爸 吃 西瓜
$dad1->action('苹果'); // 爸爸 吃 苹果

$dad1 = new Dad(new Buy());
$dad1->action('西瓜'); // 爸爸 买 西瓜
$dad1->action('苹果'); // 爸爸 买 苹果

$mom1 = new Mom(new Eat());
$mom1->action('西瓜'); // 妈妈 吃 西瓜
$mom1->action('苹果'); // 妈妈 吃 苹果

