<?php
/*
 * Hipay fullservice SDK
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @copyright      Copyright (c) 2016 - Hipay
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 *
 */
namespace Hipay\Fullservice\Gateway\Request\PaymentMethod;

use Hipay\Fullservice\Request\AbstractRequest;

/**
 * SEPA Direct Debit Payment Method
 * Data related to payment with qiwi wallet system
 * 
 * @package Hipay\Fullservice
 * @author Kassim Belghait <kassim@sirateck.com>
 * @copyright Copyright (c) 2016 - Hipay
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @link https://github.com/hipay/hipay-fullservice-sdk-php
 *       @api
 */
class SEPADirectDebitPaymentMethod extends AbstractRequest
{
   /**
    * @var numeric
    * @desc If recurring payment the agreement ID returned on first transaction.
    */ 
   public $debit_agreement_id;
   
   /**
    * @var numeric
    * @length 1
    * @type options
    * @values 0|Generate a single-use agreement id,1|Generate a multi-use agreement id
    * @desc Indicates if the debit agreement will be created for a single-use or a multi-use.
    */
   public $recurring_payment;
}