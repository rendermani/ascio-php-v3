<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;



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


$trademarkExtensions =  new ascio\Extensions(array($keyValue));


$trademark =  new ascio\Trademark();
$trademark->setHandle("JD123");
$trademark->setMarkName("MarkNameTest");
$trademark->setMarkId("MarkIdTest");
$trademark->setAuthInfo("X4FF!zu");
$trademark->setServiceType(ascio\MarkServiceType::Standard);
$trademark->setGoodsAndServicesDescription("GoodsAndServicesDescriptionTest");
$trademark->setLabels(array("LabelsTest"));
$trademark->setClaimEmailNotification1("ClaimEmailNotification1Test");
$trademark->setClaimEmailNotification2("ClaimEmailNotification2Test");
$trademark->setClaimEmailNotification3("ClaimEmailNotification3Test");
$trademark->setClaimEmailNotification4("ClaimEmailNotification4Test");
$trademark->setClaimEmailNotification5("ClaimEmailNotification5Test");
$trademark->setNotificationFrequency(ascio\NotificationFrequencyType::Daily);
$trademark->setOwner($owner);
$trademark->setReseller($reseller);
$trademark->setExtensions($trademarkExtensions);
$trademark->setApplicationId("ApplicationIdTest");
$trademark->setRegistrationNumber("RegistrationNumberTest");
$trademark->setApplicationDate(new \DateTime());
$trademark->setRegistrationDate(new \DateTime());
$trademark->setExpirationDate(new \DateTime());
$trademark->setGoodsAndServicesClasses(array(1));
$trademark->setJurisdiction("JurisdictionTest");