<?php
/**
 * HiPay Fullservice SDK PHP
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Apache 2.0 Licence
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * @copyright      Copyright (c) 2016 - HiPay
 * @license        http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0 Licence
 *
 */

namespace HiPay\Tests\Data\PaymentProduct;

use HiPay\Tests\TestCase;
use HiPay\Fullservice\Data\PaymentProduct\Collection;

/**
 *
 * @package HiPay\Fullservice
 * @author      HiPay <support.tpp@hipay.com>
 * @copyright   Copyright (c) 2018 - HiPay
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0 License
 * @link https://github.com/hipay/hipay-fullservice-sdk-php
 * @api
 */
class CollectionTest extends TestCase
{

    public function testGetItemSuccess()
    {
        $mastercardFromCollection = Collection::getItem("mastercard");

        $this->assertInstanceOf("HiPay\Fullservice\Data\PaymentProduct", $mastercardFromCollection);

        $this->assertEquals("MasterCard", $mastercardFromCollection->getBrandName());
    }

    public function testGetItemEmpty()
    {
        $testFromCollection = Collection::getItem("test");
        $this->assertNull($testFromCollection);
    }

    public function testGetItems()
    {
        $collection = Collection::getItems();
        $this->assertCount(38, $collection);

        foreach ($collection as $item) {
            $this->assertInstanceOf("HiPay\Fullservice\Data\PaymentProduct", $item);
        }
    }

    public function testGetItemsFilteredSuccess()
    {
        $collection = Collection::getItems("credit-card");
        $this->assertCount(9, $collection);

        foreach ($collection as $item) {
            $this->assertInstanceOf("HiPay\Fullservice\Data\PaymentProduct", $item);
        }
    }

    public function testGetItemsFilteredEmpty()
    {
        $collection = Collection::getItems("test");
        $this->assertCount(0, $collection);
    }
}
