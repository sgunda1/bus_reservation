<?php

require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class testing extends WebTestCase {
  function testSuccessful() {

  $this->assertTrue($this->get('http://localhost/bus_reservation/res.php?id=5&bus=21'));
  
  $this->setField("seat", "1");
  $this->setField("choice", "No Choice");
  
  $this->clickSubmit("Book");

  $this->assertTrue($this->get('http://localhost/bus_reservation/pay.php?id=5&bus=21&seat=1&c=N'));

}

//function testInvalidSeats() {
//
//  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
//  $this->clickSubmit("Book");
//
//  $this->assertResponse(200);
//
//assertTrue(set('http://localhost/bus_reservation/res.php?id=5&bus=16'));
//
//  $this->setField("seat", "");
//  $this->setField("choice", "No Choice");
//  
//  $this->clickSubmit("Book");
//
//  $this->assertResponse(500);
//  $this-> assertText("Enter Number of seats to be booked");
//
//
//}
//
//function testInvalidSeats() {
//
//  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
//  $this->clickSubmit("Book");
//
//  $this->assertResponse(200);
//
//assertTrue(set('http://localhost/bus_reservation/res.php?id=5&bus=16'));
//
//  $this->setField("seat", "1");
//  $this->setField("choice", "");
//  
//  $this->clickSubmit("Book");
//
//  $this->assertResponse(500);
//  $this-> assertText("Enter your choice");
//}

function testUnsuccessful() {

  $this-> assertTrue($this->get('http://localhost/bus_reservation/res.php?id=5&bus=21'));
  
  $this->setField("seat", "");
  $this->setField("choice", "No Choice");
  
  $this->clickSubmit("Book");

  $this->assertText("Welcome to Payment Gateway");


}
}