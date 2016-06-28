<?php

require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class testing extends WebTestCase {
    
function testSuccessful() {
  
  $this->get('http://localhost/bus_reservation/index.php');
  
  $this->setField("email", "user@email.com");
  $this->setField("pass", "12345678");
  $this->clickSubmit("Login");
  
  
  $this->get('http://localhost/bus_reservation/Home.php?id=5');
  

  $this->setField("from", "Charlotte");
  $this->setField("to", "Raleigh");
  $this->setField("journeyDate", "2016-06-29");
  
  $this->clickSubmit("Search");
  $this->clickSubmit("Book");
  
  $this->assertTrue($this->get('http://localhost/bus_reservation/res.php?id=5&bus=21'));
  
}

//function testInvalidFromStop() {
//
//  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
//  $this->assertResponse(200);
//
//  $this->setField("from", "-Select-");
//  $this->setField("to", "Charlotte");
//  $this->setField("journeyDate", "2016-06-25");
//  
//  $this->clickSubmit("Search");
//
//  $this->assertResponse(500);
//  $this-> assertText("Please enter valid From Stop");
//
//}
//
//function testInvalidToStop() {
//
//  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
//  $this->assertResponse(200);
//
//  $this->setField("from", "Raleigh");
//  $this->setField("to", ""-Select-");
//  $this->setField("journeyDate", "2016-06-25");
//  
//  $this->clickSubmit("Search");
//
//  $this->assertResponse(500);
//  $this-> assertText("Please enter valid To Stop");
//
//}


function testInvalidJourneyDate() {
	
  $this->get('http://localhost/bus_reservation/index.php');
  
  $this->setField("email", "user@email.com");
  $this->setField("pass", "12345678");
  $this->clickSubmit("Login");
  
  $this-> get('http://localhost/bus_reservation/Home.php');
  
  $this->setField("from", "Charlotte");
  $this->setField("to", "Raleigh");
  $this->setField("journeyDate", "2016-07-01");
  
  $this->clickSubmit("Search");

  $this->assertLink("Book");
  
}
//function testUnsuccessful() {
//
//  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
//  $this->assertResponse(200);
//
//  $this->setField("from", "-Select-");
//  $this->setField("to", ""-Select-");
//  $this->setField("journeyDate", "");
//  
//  $this->clickSubmit("Search");
//
//  $this->assertResponse(500);
//  $this->assertText("Please enter valid From Stop");
//
//}

}