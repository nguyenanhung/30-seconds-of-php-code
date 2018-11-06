<?php
/**
 * Project 30-seconds-of-php-code.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 11/6/18
 * Time: 09:48
 */

namespace nguyenanhung\Classes\Helper\Interfaces;

/**
 * Interface DeviceDetectLink
 *
 * @package   nguyenanhung\Classes\Helper\Interfaces
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface DeviceDetectLinkInterface
{
    /**
     * Cấu hình các link điều hướng
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 11/6/18 09:19
     *
     * @param array $data
     *
     * @return $this
     */
    public function setData($data = []);

    /**
     * Hàm nhận diện thiết bị người dùng
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 11/6/18 09:46
     *
     * @return $this
     */
    public function detectDevice();

    /**
     * Hàm nhận diện hệ điều hành của thiết bị
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 11/6/18 09:30
     *
     * @return $this
     */
    public function detectSystem();

    /**
     * Hàm lấy link sau khi detect dữ được thiết bị
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 11/6/18 09:37
     *
     * @return string
     */
    public function getLink();

    /**
     * Chuyển hướng trong trường hợp nhận diện được link
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 11/6/18 09:39
     *
     */
    public function redirect();
}
