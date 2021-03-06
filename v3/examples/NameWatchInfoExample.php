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


$nameWatchInfo =  new ascio\NameWatchInfo();
$nameWatchInfo->setHandle("JD123");
$nameWatchInfo->setCreated(new \DateTime());
$nameWatchInfo->setExpires(new \DateTime());
$nameWatchInfo->setName("my.name");
$nameWatchInfo->setNotificationFrequency(ascio\NotificationFrequencyType::Daily);
$nameWatchInfo->setTier(1);
$nameWatchInfo->setEmailNotification1("EmailNotification1Test");
$nameWatchInfo->setEmailNotification2("EmailNotification2Test");
$nameWatchInfo->setEmailNotification3("EmailNotification3Test");
$nameWatchInfo->setEmailNotification4("EmailNotification4Test");
$nameWatchInfo->setEmailNotification5("EmailNotification5Test");
$nameWatchInfo->setOwner($owner);
$nameWatchInfo->setReseller($reseller);