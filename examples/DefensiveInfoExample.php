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


$defensiveInfo =  new ascio\DefensiveInfo();
$defensiveInfo->setHandle("JD123");
$defensiveInfo->setCreated(new \DateTime());
$defensiveInfo->setExpires(new \DateTime());
$defensiveInfo->setName("my.name");
$defensiveInfo->setAuthInfo("X4FF!zu");
$defensiveInfo->setEncoding("EncodingTest");
$defensiveInfo->setOwner($owner);
$defensiveInfo->setAdmin($admin);
$defensiveInfo->setTech($tech);
$defensiveInfo->setBilling($billing);
$defensiveInfo->setReseller($reseller);