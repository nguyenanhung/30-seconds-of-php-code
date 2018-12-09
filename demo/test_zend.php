<?php
/**
 * Project 30-seconds-of-php-code.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-09
 * Time: 14:31
 */
require_once __DIR__ . '/../vendor/autoload.php';

$figlet = new Zend\Text\Figlet\Figlet();
echo $figlet->render('Iam HungNG');
