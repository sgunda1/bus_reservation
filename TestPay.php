<?php

require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class testing extends WebTestCase {
 
  function testSuccessful() {

  $this->assertTrue($this->get('http://localhost/bus_reservation/pay.php?id=5&bus=21&seat=1&c=N'));
  
 

  $this->setField("card", "1234123412341234");
  $this->setField("crdname", "new user");
  $this->setField("expiry_month", "01");
  $this->setField("expiry_month", "2017");
  $this->setField("cvv", "123");
  

  $this->clickSubmit("Confirm");

  $this->assertTrue($this->get('http://localhost/bus_reservation/Home.php?id=5'));

}


//function testInvalidAccountNumber() {
//
//  $this-> assertTrue(get(' http://localhost/bus_reservation/pay.php?id=5&bus=16&seat=1&c=N'));
//  
//  $this->assertResponse(200);
//
//  $this->setField("acc", "");
//  $this->setField("card", "1234123412341234");
//  $this->setField("crdname", "user1");
//
//  $this->clickSubmit("Confirm");
//
//  $this->assertResponse(500);
//
//  $this->assertText("Account Number should be only digits");
//}
//function testInvalidCardNumber() {
//
//  $this-> assertTrue(get(' http://localhost/bus_reservation/pay.php?id=5&bus=16&seat=1&c=N'));
//  
//  $this->assertResponse(200);
//
//  $this->setField("acc", "1284628746285437");
//  $this->setField("card", "1234");
//  $this->setField("crdname", "user1");
//
//  $this->clickSubmit("Confirm");
//
//  $this->assertResponse(500);
//
//  $this->assertText("Card number should be of 16 Digits");
//}
//
//function testInvalidCardHolderName() {
//
//  $this-> assertTrue(get(' http://localhost/bus_reservation/pay.php?id=5&bus=16&seat=1&c=N'));
//  
//  $this->assertResponse(200);
//
//  $this->setField("acc", "12846287462");
//  $this->setField("card", "1234123412341234");
//  $this->setField("crdname", "");
//
//  $this->clickSubmit("Confirm");
//
//  $this->assertResponse(500);
//
//  $this->assertText("Card holder's Name can’t be blank, Please fill it");
//}

function testUnSuccessful(){
	
	$this->assertTrue($this->get('http://localhost/bus_reservation/pay.php?id=5&bus=21&seat=1&c=N'));
  
 

  $this->setField("card", "1234123412341234");
  $this->setField("crdname", "new user");
  $this->setField("expiry_month", "01");
  $this->setField("expiry_month", "2017");
  $this->setField("cvv", "123");
  

  $this->clickSubmit("Confirm");

  $this->assertText("Welcome:");
	
}
}

