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


$treatyOrStatuteMarkExtensions =  new ascio\Extensions(array($keyValue));


$treatyOrStatuteMark =  new ascio\TreatyOrStatuteMark();
$treatyOrStatuteMark->setHandle("JD123");
$treatyOrStatuteMark->setMarkName("MarkNameTest");
$treatyOrStatuteMark->setMarkId("MarkIdTest");
$treatyOrStatuteMark->setAuthInfo("X4FF!zu");
$treatyOrStatuteMark->setServiceType(ascio\MarkServiceType::Standard);
$treatyOrStatuteMark->setGoodsAndServicesDescription("GoodsAndServicesDescriptionTest");
$treatyOrStatuteMark->setLabels(array("LabelsTest"));
$treatyOrStatuteMark->setClaimEmailNotification1("ClaimEmailNotification1Test");
$treatyOrStatuteMark->setClaimEmailNotification2("ClaimEmailNotification2Test");
$treatyOrStatuteMark->setClaimEmailNotification3("ClaimEmailNotification3Test");
$treatyOrStatuteMark->setClaimEmailNotification4("ClaimEmailNotification4Test");
$treatyOrStatuteMark->setClaimEmailNotification5("ClaimEmailNotification5Test");
$treatyOrStatuteMark->setNotificationFrequency(ascio\NotificationFrequencyType::Daily);
$treatyOrStatuteMark->setOwner($owner);
$treatyOrStatuteMark->setReseller($reseller);
$treatyOrStatuteMark->setExtensions($treatyOrStatuteMarkExtensions);
$treatyOrStatuteMark->setTitle("TitleTest");
$treatyOrStatuteMark->setReferenceNumber("ReferenceNumberTest");
$treatyOrStatuteMark->setCountry("DK");
$treatyOrStatuteMark->setRegion("RegionTest");
$treatyOrStatuteMark->setProtectionDate(new \DateTime());
$treatyOrStatuteMark->setExecutionDate(new \DateTime());