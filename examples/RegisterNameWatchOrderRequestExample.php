<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function registerNameWatchOrderRequestExample() {
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


	$nameWatch =  new ascio\NameWatch();
	$nameWatch->setHandle("JD123");
	$nameWatch->setName("my.name");
	$nameWatch->setNotificationFrequency(ascio\NotificationFrequencyType::Daily);
	$nameWatch->setTier(1);
	$nameWatch->setEmailNotification1("EmailNotification1Test");
	$nameWatch->setEmailNotification2("EmailNotification2Test");
	$nameWatch->setEmailNotification3("EmailNotification3Test");
	$nameWatch->setEmailNotification4("EmailNotification4Test");
	$nameWatch->setEmailNotification5("EmailNotification5Test");
	$nameWatch->setOwner($owner);
	$nameWatch->setReseller($reseller);


	$request =  new ascio\NameWatchOrderRequest();
	$request->setType(ascio\OrderType::Register);
	$request->setPeriod(1);
	$request->setTransactionComment("TransactionCommentTest");
	$request->setComments("CommentsTest");
	$request->setDocumentation("DocumentationTest");
	$request->setOptions("OptionsTest");
	$request->setNameWatch($nameWatch);

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
registerNameWatchOrderRequestExample();