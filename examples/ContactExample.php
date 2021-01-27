<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;



$contactExtensions =  new ascio\Extensions(array(
new ascio\KeyValue("Title", "Mrs.")
)
);


$contact =  new ascio\Contact();
$contact->setFirstName("John");
$contact->setLastName("Doe");
$contact->setOrgName("Ascio");
$contact->setAddress1("Address1Test");
$contact->setCity("CityTest");
$contact->setState("StateTest");
$contact->setPostalCode("888349");
$contact->setCountryCode("DK");
$contact->setPhone("+45.123456789");
$contact->setEmail("administrator@ascio-test-domain.com");
$contact->setType("owner");
$contact->setExtensions($contactExtensions);