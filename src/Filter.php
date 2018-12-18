<?php
/**
 * Project 30-seconds-of-php-code.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-18
 * Time: 22:36
 */

namespace nguyenanhung\Classes\Helper;

/**
 * Class Filter
 *
 * @package   nguyenanhung\Classes\Helper
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Filter implements FilterInterface
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
    public static function filterInputDataIsArray($inputData = [], $requireData = [])
    {
        if (empty($inputData) || empty($requireData)) {
            return FALSE;
        }
        if (count($requireData) <= 0 || count($inputData) <= 0) {
            return FALSE;
        }
        if (!is_array($requireData) || !is_array($inputData)) {
            return FALSE;
        }
        foreach ($requireData as $params) {
            if (!array_key_exists($params, $inputData)) {
                return FALSE;
            }
        }

        return TRUE;
    }
}
