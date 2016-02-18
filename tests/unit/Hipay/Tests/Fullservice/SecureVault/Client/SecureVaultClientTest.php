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
namespace Hipay\Tests\Fullservice\Gateway\Client;

use Hipay\Tests\TestCase;
use Hipay\Fullservice\HTTP\Configuration\Configuration;
use Hipay\Fullservice\SecureVault\Client\SecureVaultClient;

/**
 * Client Test class for secure vault request send to TPP Fullservice.
 *
 * @category    Hipay
 * @package     Hipay\Tests
 * @author 		Kassim Belghait <kassim@sirateck.com>
 * @copyright   Copyright (c) 2016 - Hipay
 * @license     http://opensource.org/licenses/mit-license.php MIT License
 * @link 		https://github.com/hipay/hipay-fullservice-sdk-php
 * @api
 */
class SecureVaultClientTest extends TestCase{
	
    
	/**
	 * 
	 * @var \Hipay\Fullservice\HTTP\Configuration\ConfigurationInterface|\PHPUnit_Framework_MockObject_MockObject
	 */
	protected $_config;
	
	/**
	 * 
	 * @var \Hipay\Fullservice\HTTP\ClientProvider|\PHPUnit_Framework_MockObject_MockObject $_clientProvider
	 */
	protected $_clientProvider;
	
	/**
	 * 
	 * @var \Hipay\Fullservice\HTTP\Response\abstractResponse|PHPUnit_Framework_MockObject_MockObject
	 */
	protected $_response;
	
	
	
    
    protected function setUp()
    {
    	$this->_config = $this->getMockBuilder('\Hipay\Fullservice\HTTP\Configuration\ConfigurationInterface')
    							->disableOriginalConstructor()
    							->getMock();
    	$this->_clientProvider = $this->getMockBuilder('\Hipay\Fullservice\HTTP\ClientProvider')
    							->setConstructorArgs(array($this->_config))
    							->getMock();
    	
		$this->_response = $this->getMockBuilder('\Hipay\Fullservice\HTTP\Response\AbstractResponse')
    							->disableOriginalConstructor()
    							->getMock();
	          
    }
    
    /**
	 * @cover Hipay\Fullservice\SecureVault\Client\SecureVaultClient::__construct
	 */
    public function testCanBeConstructUsingClientProvider(){
    	
    	$vault = new SecureVaultClient($this->_clientProvider);
    	
    	$this->assertInstanceOf("Hipay\Fullservice\SecureVault\Client\SecureVaultClient", $vault);
    	
    	return $vault;
    }
    
    
	
}