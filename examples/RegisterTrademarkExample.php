<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function registerTrademarkExample() {
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


	$markExtensions =  new ascio\Extensions(array($keyValue));


	$mark =  new ascio\Trademark();
	$mark->setHandle("JD123");
	$mark->setMarkName("MarkNameTest");
	$mark->setMarkId("MarkIdTest");
	$mark->setAuthInfo("X4FF!zu");
	$mark->setServiceType(ascio\MarkServiceType::Standard);
	$mark->setGoodsAndServicesDescription("GoodsAndServicesDescriptionTest");
	$mark->setLabels(array("LabelsTest"));
	$mark->setClaimEmailNotification1("ClaimEmailNotification1Test");
	$mark->setClaimEmailNotification2("ClaimEmailNotification2Test");
	$mark->setClaimEmailNotification3("ClaimEmailNotification3Test");
	$mark->setClaimEmailNotification4("ClaimEmailNotification4Test");
	$mark->setClaimEmailNotification5("ClaimEmailNotification5Test");
	$mark->setNotificationFrequency(ascio\NotificationFrequencyType::Daily);
	$mark->setOwner($owner);
	$mark->setReseller($reseller);
	$mark->setExtensions($markExtensions);
	$mark->setApplicationId("ApplicationIdTest");
	$mark->setRegistrationNumber("RegistrationNumberTest");
	$mark->setApplicationDate(new \DateTime());
	$mark->setRegistrationDate(new \DateTime());
	$mark->setExpirationDate(new \DateTime());
	$mark->setGoodsAndServicesClasses(array(1));
	$mark->setJurisdiction("JurisdictionTest");


	$markOrderDocument =  new ascio\MarkOrderDocument();
	$markOrderDocument->setFileName("anything.jpg");
	$markOrderDocument->setContent(base64_encode(123));
	$markOrderDocument->setDocType(ascio\MarkOrderDocType::TrademarkAssigneeDeclaration);


	$documents = array($markOrderDocument);



	$request =  new ascio\MarkOrderRequest();
	$request->setType(ascio\OrderType::Register);
	$request->setPeriod(1);
	$request->setTransactionComment("TransactionCommentTest");
	$request->setComments("CommentsTest");
	$request->setDocumentation("DocumentationTest");
	$request->setOptions("OptionsTest");
	$request->setMark($mark);
	$request->setDocuments($documents);

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
registerTrademarkExample();