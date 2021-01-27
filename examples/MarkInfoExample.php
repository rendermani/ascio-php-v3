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


$markExtensions =  new ascio\Extensions(array($keyValue));


$mark =  new ascio\TreatyOrStatuteMark();
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
$mark->setTitle("TitleTest");
$mark->setReferenceNumber("ReferenceNumberTest");
$mark->setCountry("DK");
$mark->setRegion("RegionTest");
$mark->setProtectionDate(new \DateTime());
$mark->setExecutionDate(new \DateTime());


$markInfo =  new ascio\MarkInfo();
$markInfo->setCreated(new \DateTime());
$markInfo->setExpires(new \DateTime());
$markInfo->setMark($mark);
$markInfo->setSmd("SmdTest");