<?php

require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class testing extends WebTestCase {
    
public function testSuccessful() {

  $this->get('http://localhost/bus_reservation/index.php');
  $this->assertResponse(200);

  $this->setField("user", "user@email.com");
  $this->setField("pass", "12345678");
  
  $this->clickSubmit("Login");

  $this->assertResponse(200);
//  $this->assertTitle(new PatternExpectation('/:: HOME ::/'));
  $this->get('http://localhost/bus_reservation/Home.php?id=5');
  $this->assertResponse(200);
  
}


function testInvalidEmailAddress() {
  
  $this->get('http://localhost/bus_reservation/index.php');
  $this->assertResponse(200);

  $this->setField("user", "user.com");
  $this->setField("pass", "12345678");
  
  $this->clickSubmit("Login");

  $this->get('http://localhost/bus_reservation/Home.php?id=5');
  $this->assertResponse(302);  
}

function testInvalidPassword() {
  
  $this->get('http://localhost/bus_reservation/index.php');
  $this->assertResponse(200);

  $this->setField("user", "user@email.com");
  $this->setField("pass", "123");
  
  $this->clickSubmit("Login");

  $this->get('http://localhost/bus_reservation/Home.php?id=5');
  $this->assertResponse(302);

}

function testUnsuccessful() {

  $this->get('http://localhost/bus_reservation/index.php');
  $this->assertResponse(200);

  $this->setField("user", "user.com");
  $this->setField("pass", "123");
  
  $this->clickSubmit("Login");

  $this->get('http://localhost/bus_reservation/Home.php?id=5');
  $this->assertResponse(302);

}
}




