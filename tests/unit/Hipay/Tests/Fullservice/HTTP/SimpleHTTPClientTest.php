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
namespace Hipay\Tests\Fullservice\HTTP;

use Hipay\Tests\TestCase;
use Hipay\Fullservice\HTTP\SimpleHTTPClient;
use Hipay\Fullservice\HTTP\ClientProvider;
use Hipay\Fullservice\HTTP\Configuration\ConfigurationInterface;
use Hipay\Fullservice\HTTP\Configuration\Configuration;


/**
 *
 * @package     Hipay\Fullservice
 * @author 		Kassim Belghait <kassim@sirateck.com>
 * @copyright   Copyright (c) 2016 - Hipay
 * @license     http://opensource.org/licenses/mit-license.php MIT License
 * @link 		https://github.com/hipay/hipay-fullservice-sdk-php 
 * @api
 */
class SimpleHTTPClientTest extends TestCase {

	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::__construct()
	 * @uses  Hipay\Fullservice\HTTP\Configuration
	 * @expectedException PHPUnit_Framework_Error
	 * @expectedExceptionMessage  Argument 1 passed to Hipay\Fullservice\HTTP\ClientProvider::__construct() must implement interface Hipay\Fullservice\HTTP\Configuration\ConfigurationInterface, null given
	 */
	public function testCannotBeConstructFromInvalidArgument() {
	
		$client = new SimpleHTTPClient(null);

		
	}
	
	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::__construct
	 * @uses  Hipay\Fullservice\HTTP\Configuration
	 */
	public function testCanBeConstructUsingConfiguration(){
		
		$conf = new Configuration("username", "123456");
		$client = new SimpleHTTPClient($conf);
		$this->assertInstanceOf("Hipay\Fullservice\HTTP\SimpleHTTPClient", $client);
		
		return $client;
		
	}
	
	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::getConfiguration
	 * @depends testCanBeConstructUsingConfiguration
	 */
	public function testConfigurationCanBeRetrieved(ClientProvider $client){
		
		$this->assertInstanceOf("Hipay\Fullservice\HTTP\Configuration\ConfigurationInterface", $client->getConfiguration());
		
	}
	
	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::setConfiguration
	 * @depends testCanBeConstructUsingConfiguration
	 */
	public function testConfigurationCanBeSetted(ClientProvider $client){
	
		$conf = new Configuration("username2", "654321");
		$client->setConfiguration($conf);
		
		$this->assertInstanceOf("Hipay\Fullservice\HTTP\Configuration\ConfigurationInterface", $client->getConfiguration());
		$this->assertEquals("username2", $client->getConfiguration()->getApiUsername());
	
	}
	
	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::getHttpClient
	 * @depends testCanBeConstructUsingConfiguration
	 */
	public function testHttpClientCanBeRetrieved(ClientProvider $client){
	
		$this->assertNotEmpty($client->getHttpClient());
		$this->assertEquals(true,is_resource($client->getHttpClient()));
	
	}
	
	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::request
	 * @depends testCanBeConstructUsingConfiguration
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testRequestCannotBeExcutedFromAllInvalidArguments(ClientProvider $client){
		
		$client->request('GETTED', "1234",1234);
		
	}
	
	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::request
	 * @depends testCanBeConstructUsingConfiguration
	 * @expectedException Hipay\Fullservice\Exception\InvalidArgumentException
	 */
	public function testRequestCannotBeExcutedFromRequiredInvalidArguments(ClientProvider $client){
	
		$this->markTestSkipped(
				'HTTP method and Uri validator not implemented yet :-( '
				);
		
		//$client->request('GETTED', "1234");
	
	}
	
	/**
	 * @cover Hipay\Fullservice\HTTP\SimpleHTTPClient::request
	 * @depends testCanBeConstructUsingConfiguration
	 * @expectedException Hipay\Fullservice\Exception\RuntimeException
	 */
	public function testRuntimeExecptionIsRaisedForNetworkFailure(ClientProvider $client){
	
		$client->request('GETTED', "1234");
	
	}
	

}