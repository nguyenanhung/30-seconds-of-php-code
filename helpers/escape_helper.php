<?php
if (!function_exists('escapeHtml')) {
    /**
     * Function escapeHtml
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-09 14:24
     *
     * @param string $string
     *
     * @return string
     */
    function escapeHtml($string = '')
    {
        $escape = new \Zend\Escaper\Escaper('utf-8');

        return $escape->escapeHtml($string);
    }
}
if (!function_exists('escapeHtmlAttr')) {
    /**
     * Function escapeHtmlAttr
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-09 14:24
     *
     * @param string $string
     *
     * @return string
     */
    function escapeHtmlAttr($string = '')
    {
        $escape = new \Zend\Escaper\Escaper('utf-8');

        return $escape->escapeHtmlAttr($string);
    }
}
if (!function_exists('escapeHtmlAttr')) {
    /**
     * Function escapeJs
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-09 14:25
     *
     * @param string $string
     *
     * @return string
     */
    function escapeJs($string = '')
    {
        $escape = new \Zend\Escaper\Escaper('utf-8');

        return $escape->escapeJs($string);
    }
}
if (!function_exists('escapeCss')) {
    /**
     * Function escapeCss
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-09 14:25
     *
     * @param string $string
     *
     * @return string
     */
    function escapeCss($string = '')
    {
        $escape = new \Zend\Escaper\Escaper('utf-8');

        return $escape->escapeCss($string);
    }
}
if (!function_exists('escapeCss')) {
    /**
     * Function escapeUrl
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-09 14:25
     *
     * @param string $string
     *
     * @return string
     */
    function escapeUrl($string = '')
    {
        $escape = new \Zend\Escaper\Escaper('utf-8');

        return $escape->escapeUrl($string);
    }
}
