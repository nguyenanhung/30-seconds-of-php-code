<?php
/**
 * Project 30-seconds-of-php-code.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-18
 * Time: 22:37
 */

namespace nguyenanhung\Classes\Helper;

/**
 * Interface FilterInterface
 *
 * @package   nguyenanhung\Classes\Helper
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface FilterInterface
{
    /**
     * Function filterInputDataIsArray
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-18 22:37
     *
     * @param array $inputData
     * @param array $requireData
     *
     * @return bool
     */
    public static function filterInputDataIsArray($inputData = [], $requireData = []);

    /**
     * Function filterDate
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-18 23:39
     *
     * @param string $inputDate
     *
     * @return array
     */
    public static function filterDate($inputDate = '');
}
