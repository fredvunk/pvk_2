<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 06.02.2019
 * Time: 9:16
 */
require_once 'Text.php';

$hello1 = new Text('Hello Word!');

echo '<pre>';
print_r($hello1);
echo '</pre>';

$hello1->showText();

$hello1->setText('Now it works!');

$hello1->showText();

$hello2 = new Text('Buy!');

echo '<pre>';
print_r($hello2);
echo '</pre>';

$hello2->showText();