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
namespace Hipay\Fullservice\SecureVault\Request;

use Hipay\Fullservice\Request\AbstractRequest;

/**
 * Secure Vault Generate New Token request
 * 
 * @package Hipay\Fullservice
 * @author Kassim Belghait <kassim@sirateck.com>
 * @copyright Copyright (c) 2016 - Hipay
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @link https://github.com/hipay/hipay-fullservice-sdk-php
 * @api
 */
class GenerateTokenRequest extends AbstractRequest
{
	/**
	 * 
	 * @var int $card_number The card number. The length is from 12 to 19 digits.
	 * @length 19
	 * @required
	 */
	public $card_number;
	
	/**
	 * 
	 * @var int $card_expiry_month The card expiry month. Expressed with two digits (e.g., 01).
	 * @length 2
	 * @required
	 */
	public $card_expiry_month;
	
	/**
	 * 
	 * @var int $card_expiry_year The card expiry year. Expressed with four digits (e.g., 2014).
	 * @length 4
	 * @required
	 */
	public $card_expiry_year;
	
	/**
	 * 
	 * @var string $card_holder The cardholder name as it appears on the card (up to 25 chars).
	 * @length 25
	 */
	public $card_holder;
	
	/**
	 * 
	 * @var int $cvc The 3- or 4- digit security code (called CVC2, CVV2 or CID depending on the card brand) that appears on the credit card.
	 * @length 4
	 */
	public $cvc;
	
	/**
	 * Indicates if the token should be generated either for a single-use or a multi-use.
	 * Possible values:
     * - 1 = Generate a multi-use token
     * - 0 = Generate a single-use token
	 * @var int $multi_use single-use or a multi-use.
	 * @length 1
	 */
	public $multi_use;
    

}