<?php
/**
 * Project 30-seconds-of-php-code.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-25
 * Time: 10:31
 */
if (!function_exists('getIPAddress')) {
    /**
     * Function getRawIpAddress
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-25 10:32
     *
     * @param bool $convertToInteger
     *
     * @return bool|int|string
     */
    function getRawIpAddress($convertToInteger = FALSE)
    {
        $ip_keys = [
            0 => 'HTTP_X_FORWARDED_FOR',
            1 => 'HTTP_X_FORWARDED',
            2 => 'HTTP_X_IPADDRESS',
            3 => 'HTTP_X_CLUSTER_CLIENT_IP',
            4 => 'HTTP_FORWARDED_FOR',
            5 => 'HTTP_FORWARDED',
            6 => 'HTTP_CLIENT_IP',
            7 => 'HTTP_IP',
            8 => 'REMOTE_ADDR'
        ];
        $this->debug->debug(__FUNCTION__, 'ip_keys: ', $ip_keys);
        foreach ($ip_keys as $key) {
            if (array_key_exists($key, $_SERVER) === TRUE) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip);
                    $this->debug->debug(__FUNCTION__, 'IP: ' . $ip);
                    if ($convertToInteger === TRUE) {
                        $result = ip2long($ip);
                        return $result;
                    }
                    return $ip;
                }
            }
        }
        return FALSE;
    }
}
