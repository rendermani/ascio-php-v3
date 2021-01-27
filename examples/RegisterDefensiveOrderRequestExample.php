<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function registerDefensiveOrderRequestExample() {
	$config = new lib\Config();
	$env = $config->get("testing"); //testing or live
	$credentials = array("Account"=>$env->getAccount(), "Password" => $env->getPassword());
	$header = new \SoapHeader("http://www.ascio.com/2013/02","SecurityHeaderDetails", $credentials, false);
	$ascioClient	 = new ascio\AscioService(array("trace" => true),$env->getWsdl("v3"));
	$ascioClient->__setSoapHeaders($header);


	$owner =  new ascio\Registrant();
	$owner->setFirstName("John");
	$owner->setLastName("Doe");
	$owner->setAddress1("Address1Test");
	$owner->setCity("CityTest");
	$owner->setPostalCode("888349");
	$owner->setCountryCode("DK");
	$owner->setPhone("+45.123456789");
	$owner->setEmail("administrator@ascio-test-domain.com");


	$adminExtensions =  new ascio\Extensions(array(
		new ascio\KeyValue("Title", "Mrs.")
		)
	);


	$admin =  new ascio\Contact();
	$admin->setFirstName("John");
	$admin->setLastName("Doe");
	$admin->setOrgName("Ascio");
	$admin->setAddress1("Address1Test");
	$admin->setCity("CityTest");
	$admin->setState("StateTest");
	$admin->setPostalCode("888349");
	$admin->setCountryCode("DK");
	$admin->setPhone("+45.123456789");
	$admin->setEmail("administrator@ascio-test-domain.com");
	$admin->setType("owner");
	$admin->setExtensions($adminExtensions);


	$techExtensions =  new ascio\Extensions(array(
		new ascio\KeyValue("Title", "Mrs.")
		)
	);


	$tech =  new ascio\Contact();
	$tech->setFirstName("John");
	$tech->setLastName("Doe");
	$tech->setOrgName("Ascio");
	$tech->setAddress1("Address1Test");
	$tech->setCity("CityTest");
	$tech->setState("StateTest");
	$tech->setPostalCode("888349");
	$tech->setCountryCode("DK");
	$tech->setPhone("+45.123456789");
	$tech->setEmail("administrator@ascio-test-domain.com");
	$tech->setType("owner");
	$tech->setExtensions($techExtensions);


	$billingExtensions =  new ascio\Extensions(array(
		new ascio\KeyValue("Title", "Mrs.")
		)
	);


	$billing =  new ascio\Contact();
	$billing->setFirstName("John");
	$billing->setLastName("Doe");
	$billing->setOrgName("Ascio");
	$billing->setAddress1("Address1Test");
	$billing->setCity("CityTest");
	$billing->setState("StateTest");
	$billing->setPostalCode("888349");
	$billing->setCountryCode("DK");
	$billing->setPhone("+45.123456789");
	$billing->setEmail("administrator@ascio-test-domain.com");
	$billing->setType("owner");
	$billing->setExtensions($billingExtensions);


	$resellerExtensions =  new ascio\Extensions(array(
		new ascio\KeyValue("Title", "Mrs.")
		)
	);


	$reseller =  new ascio\Contact();
	$reseller->setFirstName("John");
	$reseller->setLastName("Doe");
	$reseller->setOrgName("Ascio");
	$reseller->setAddress1("Address1Test");
	$reseller->setCity("CityTest");
	$reseller->setState("StateTest");
	$reseller->setPostalCode("888349");
	$reseller->setCountryCode("DK");
	$reseller->setPhone("+45.123456789");
	$reseller->setEmail("administrator@ascio-test-domain.com");
	$reseller->setType("owner");
	$reseller->setExtensions($resellerExtensions);


	$defensive =  new ascio\Defensive();
	$defensive->setHandle("JD123");
	$defensive->setName("my.name");
	$defensive->setMarkHandle("MarkHandleTest");
	$defensive->setAuthInfo("X4FF!zu");
	$defensive->setEncoding("EncodingTest");
	$defensive->setOwner($owner);
	$defensive->setAdmin($admin);
	$defensive->setTech($tech);
	$defensive->setBilling($billing);
	$defensive->setReseller($reseller);


	$request =  new ascio\DefensiveOrderRequest();
	$request->setType(ascio\OrderType::Register);
	$request->setPeriod(1);
	$request->setTransactionComment("TransactionCommentTest");
	$request->setComments("CommentsTest");
	$request->setDocumentation("DocumentationTest");
	$request->setOptions("OptionsTest");
	$request->setDefensive($defensive);

	echo "start validate\n";
	$validateOrder = new  ascio\ValidateOrder($request);
	try {
		$response = $ascioClient->ValidateOrder($validateOrder);
	} catch (\Exception $e) {
		echo ("[".$e->faultcode . "] ". $e->faultstring);
		return;
	}
	echo "end validate\n";
	
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
registerDefensiveOrderRequestExample();