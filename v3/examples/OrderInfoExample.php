<?php
namespace ascio\v3\examples;
require(__DIR__ . "/../vendor/autoload.php");

use ascio\v3 as ascio;
use ascio\lib as lib;
function registerDomainOrderRequestExample() {
	$owner =  new ascio\Registrant();
	$config = new lib\Config();
	$env = $config->get("testing"); //testing or live
	$credentials = array("Account"=>$env->getAccount(), "Password" => $env->getPassword());
	$header = new \SoapHeader("http://www.ascio.com/2013/02","SecurityHeaderDetails", $credentials, false);
	$ascioClient	 = new ascio\AscioService(array("trace" => true),$env->getWsdl("v3"));
	$ascioClient->__setSoapHeaders($header);

	$owner->setFirstName("John");
	$owner->setLastName("Doe");
	$owner->setAddress1("Address1Test");
	$owner->setCity("CityTest");
	$owner->setPostalCode("888349");
	$owner->setCountryCode("DK");
	$owner->setPhone("+45.123456789");
	$owner->setEmail($config->getEmail());

	$admin =  new ascio\Contact();
	$admin->setFirstName("John");
	$admin->setLastName("Doe");
	$admin->setAddress1("Address1Test");
	$admin->setCity("CityTest");
	$admin->setPostalCode("888349");
	$admin->setCountryCode("DK");
	$admin->setPhone("+45.123456789");
	$admin->setEmail($config->getEmail());

	$tech =  new ascio\Contact();
	$tech->setFirstName("John");
	$tech->setLastName("Doe");
	$tech->setAddress1("Address1Test");
	$tech->setCity("CityTest");
	$tech->setPostalCode("888349");
	$tech->setCountryCode("DK");
	$tech->setPhone("+45.123456789");
	$tech->setEmail($config->getEmail());

	$billing =  new ascio\Contact();
	$billing->setFirstName("John");
	$billing->setLastName("Doe");
	$billing->setAddress1("Address1Test");
	$billing->setCity("CityTest");
	$billing->setPostalCode("888349");
	$billing->setCountryCode("DK");
	$billing->setPhone("+45.123456789");
	$billing->setEmail($config->getEmail());

	$nameServer1 =  new ascio\NameServer();
	$nameServer1->setHostName("ns1.ascio.net");

	$nameServer2 =  new ascio\NameServer(new \DateTime());
	$nameServer2->setHostName("ns2.ascio.net");

	$nameServer3 =  new ascio\NameServer(new \DateTime());
	$nameServer3->setHostName("ns3.ascio.net");

	$nameServer4 =  new ascio\NameServer(new \DateTime());
	$nameServer4->setHostName("ns4.ascio.net");

	$nameServers =  new ascio\NameServers(new \DateTime());
	$nameServers->setNameServer1($nameServer1);
	$nameServers->setNameServer2($nameServer2);
	$nameServers->setNameServer3($nameServer3);
	$nameServers->setNameServer4($nameServer4);

	$domain =  new ascio\Domain();
	$domain->setName("ascio-is-great.com");
	$domain->setOwner($owner);
	$domain->setAdmin($admin);
	$domain->setTech($tech);
	$domain->setBilling($billing);
	$domain->setNameServers($nameServers);
	$domain->setDiscloseSocialData("true");

	$request =  new ascio\DomainOrderRequest(ascio\OrderType::Register);
	$request->setType(ascio\OrderType::Register);
	$request->setDomain($domain);
	echo "start validate\n";
	$validateOrder = new  ascio\ValidateOrder($request);
	try {
		$response = $ascioClient->ValidateOrder($validateOrder);
	} catch (\Exception $e) {
		echo ("[".$e->faultcode . "] ". $e->faultstring);
		return;
	}
	echo "end validate\n";
	\var_dump($response);
	if ($response->ValidateOrderResult->getResultCode() == 200) {
		echo "Validation: OK\r\n";
		try {
			$createOrderResponse = $ascioClient->CreateOrder(new ascio\CreateOrder($request));
		} catch (\Exception $e) {
			echo ("[".$e->faultcode . "] ". $e->faultstring);
			return;
		}
		echo "Create Order: ".$createOrderResponse->CreateOrderResult->getResultCode() . " " . $createOrderResponse->CreateOrderResult->getResultMessage() . "\r\n";
		if ($createOrderResponse->CreateOrderResult->getResultCode() == 200) {
			echo "OrderId : " . $createOrderResponse->CreateOrderResult->getOrderInfo()->getOrderId() . "\r\n";
			echo "Order Status : " . $createOrderResponse->CreateOrderResult->getOrderInfo()->getStatus() . "\r\n";
		} else {
			echo ($response->CreateOrderResult->getResultMessage()."\n");
			foreach($createOrderResponse->CreateOrderResult->getErrors() as $error) {
				echo $error."\n";
				return $response;
			}
		}
		return $createOrderResponse;
	} else {
		echo ($response->ValidateOrderResult->getResultMessage()."\n");
		if ($response->ValidateOrderResult->getErrors()) {
			foreach($response->ValidateOrderResult->getErrors()->getString() as $error) {
				 echo $error."\n";
			}
		}
		return $response;
	}
}
registerDomainOrderRequestExample();