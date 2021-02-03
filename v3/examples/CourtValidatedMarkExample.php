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


$courtValidatedMarkExtensions =  new ascio\Extensions(array($keyValue));


$courtValidatedMark =  new ascio\CourtValidatedMark();
$courtValidatedMark->setHandle("JD123");
$courtValidatedMark->setMarkName("MarkNameTest");
$courtValidatedMark->setMarkId("MarkIdTest");
$courtValidatedMark->setAuthInfo("X4FF!zu");
$courtValidatedMark->setServiceType(ascio\MarkServiceType::Standard);
$courtValidatedMark->setGoodsAndServicesDescription("GoodsAndServicesDescriptionTest");
$courtValidatedMark->setLabels(array("LabelsTest"));
$courtValidatedMark->setClaimEmailNotification1("ClaimEmailNotification1Test");
$courtValidatedMark->setClaimEmailNotification2("ClaimEmailNotification2Test");
$courtValidatedMark->setClaimEmailNotification3("ClaimEmailNotification3Test");
$courtValidatedMark->setClaimEmailNotification4("ClaimEmailNotification4Test");
$courtValidatedMark->setClaimEmailNotification5("ClaimEmailNotification5Test");
$courtValidatedMark->setNotificationFrequency(ascio\NotificationFrequencyType::Daily);
$courtValidatedMark->setOwner($owner);
$courtValidatedMark->setReseller($reseller);
$courtValidatedMark->setExtensions($courtValidatedMarkExtensions);
$courtValidatedMark->setCourtName("CourtNameTest");
$courtValidatedMark->setReferenceNumber("ReferenceNumberTest");
$courtValidatedMark->setCountry("DK");
$courtValidatedMark->setRegion("RegionTest");
$courtValidatedMark->setProtectionDate(new \DateTime());