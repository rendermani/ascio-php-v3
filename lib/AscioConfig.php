<?php
namespace ascio\lib;
class Config {
	public $environment = "testing";
	public $configs =  array();
	public function __construct() {		
		$live = new ServerConfig("user", "password","live");
		$live->setWsdl("https://aws.ascio.com/v3/aws.wsdl","v3");
		$live->setWsdl("https://aws.ascio.com/2012/01/01/AscioService.wsdl","v2");
		$live->setWsdl("https://dnsservice.ascio.com/2010/10/30/DnsService.wsdl","asciodns");
		
		$testing = new ServerConfig("user", "password","testing");
		$testing->setWsdl("https://aws.demo.ascio.com/v3/aws.wsdl","v3");
		$testing->setWsdl("https://aws.demo.ascio.com/2012/01/01/AscioService.wsdl","v2");
		
		$this->configs["live"] = $live;
		$this->configs["testing"] = $testing;
	}
	public function get($environment = "testing") : ServerConfig {
		return $this->configs[$environment];
	}
}
class ServerConfig {
	private $wsdl = array();	
	public function __construct($account,$password,$environment) {
		$this->environment 	= $environment;
		$this->account 		= $account;
		$this->password 	= $password;
	}
	public function setAccount($account) {
		$this->account = $account;
	}
	public function getAccount() {
		return $this->account;
	}
	public function setPassword($password) {
		$this->password = password;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setWsdl($wsdl,$version) {
		$this->wsdl[$version] = $wsdl;
	}
	public function getWsdl($version) {
		$wsdl = $this->wsdl[$version];
		if(!isset($wsdl)) {
			throw new Error("No WSDL file for ".$version);
		}
		return $wsdl;
	}
}