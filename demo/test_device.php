<?php
/**
 * Project 30-seconds-of-php-code.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 11/6/18
 * Time: 09:31
 */
require_once __DIR__ . '/../vendor/autoload.php';

$device = new \nguyenanhung\Classes\Helper\DeviceDetectLink();
$data   = [
    // Giá trị mặc định, defaut
    'default'        => 'http://google.com',
    // Cấu hình detect nhận diện theo device
    'link_mobile'    => 'link_mobile',
    'link_tablet'    => 'link_tablet',
    // Cấu hình detect nhận diện theo system
    'ios'            => 'ios',
    'android'        => 'android',
    'black_berry'    => 'black_berry',
    'palm'           => 'palm',
    'windows_mobile' => 'windows_mobile',
    'mee_go'         => 'mee_go',
    'mae_mo'         => 'mae_mo',
    'java'           => 'java',
    'web_os'         => 'web_os',
    'bada_os'        => 'bada_os',
    'brewos'         => 'brewos',
];
d($device->setData($data)->detectSystem()->getLink());
d($device->setData($data)->detectSystem()->redirect());

d($device->setData($data)->detectDevice()->getLink());
d($device->setData($data)->detectDevice()->redirect());