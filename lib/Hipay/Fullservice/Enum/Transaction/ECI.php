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
namespace Hipay\Fullservice\Enum\Transaction;

use Hipay\Fullservice\Enum\AbstractEnum;

/**
 * Constant values of Electronic Commerce Indicator (ECI)
 * 
 * The ECI indicates the security level at which the payment information is processed between the cardholder and merchant.
 * 
 * @package Hipay\Fullservice
 * @author Kassim Belghait <kassim@sirateck.com>
 * @copyright Copyright (c) 2016 - Hipay
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @link https://github.com/hipay/hipay-fullservice-sdk-php
 *       @api
 */
class ECI extends AbstractEnum
{
    /**
     * @var int UNDEFINED default value
     */
    const UNDEFINED = -1;
    
    /**
     * The merchant received the customer's financial details over the phone or via fax/mail, 
     * but he does not have the customer's card at hand.
     * 
     * @var int MOTO MO/TO (Card Not Present)
     */
    const MOTO = 1;
    
    /**
     * The first transaction of the customer was a Mail Order / Telephone Order transaction; 
     * i.e. the customer gave his financial details over the phone or via mail/fax to the merchant. 
     * Either the merchant stores the details by himself or these details are stored in our system using 
     * an Alias and is performing another transaction for the same customer (recurring transaction).
     * 
     * @var int RECURRING_MOTO Recurring MO/TO
     */
    const RECURRING_MOTO = 2;
    
    /**
     * @var int INSTALLMENT_PAYMENT Partial payment of goods/services that have already been delivered, but will be paid for in several spread payments.
     */
    const INSTALLMENT_PAYMENT = 3;
    
    /**
     * The customer is physically present in front of the merchant. 
     * The merchant has the customer's card within easy reach. The card details are manually entered; 
     * the card is not swiped through a machine.
     * 
     * @var int MANUALLT_KEYED_CARD_PRESENT Manually Keyed (Card Present)
     */
    const MANUALLT_KEYED_CARD_PRESENT = 4;
    
    /**
     * The payment transaction was conducted over a secure channel (for example, SSL/TLS), 
     * but payment authentication was not performed, 
     * or when the issuer responded that authentication could not be performed.
     * 
     * @var int SECURE_ECOMMERCE Secure E-commerce with SSL/TLS Encryption
     */
    const SECURE_ECOMMERCE = 7;
    
    /**
     * The first transaction of the customer was an e-Commerce transaction; 
     * i.e. the customer entered his financial details himself on a secure website (either the merchant's website 
     * or our secure platform). Either the merchant stores the details by himself 
     * or these details are stored in our system using an Alias 
     * and is now performing another transaction for the same customer (recurring transaction), 
     * using the Alias details
     * 
     * @var int RECURRING_ECOMMERCE The first transaction of the customer was an e-Commerce transaction.
     */
    const RECURRING_ECOMMERCE = 9;
    
}