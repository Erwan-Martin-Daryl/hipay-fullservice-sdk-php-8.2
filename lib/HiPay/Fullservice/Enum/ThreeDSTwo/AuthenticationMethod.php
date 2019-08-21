<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/06/19
 * Time: 16:15
 */

namespace HiPay\Fullservice\Enum\ThreeDSTwo;

/**
 * @category    HiPay
 * @package     HiPay\Fullservice
 * @author      HiPay <support@hipay.com>
 * @copyright   Copyright (c) 2019 - HiPay
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0 License
 * @link        https://github.com/hipay/hipay-fullservice-sdk-php
 * @api
 */
class AuthenticationMethod
{
    /**
     * Frictionless authentication occurred
     */
    const FRICTIONLESS = "01";

    /**
     * Cardholder challenge occurred
     */
    const CARDHOLDER_CHALLENGE = "02";

    /**
     *
     */
    const AVS_VERIFIED = "03";

    /**
     * Other issuer method
     */
    const OTHER = "04";
}
