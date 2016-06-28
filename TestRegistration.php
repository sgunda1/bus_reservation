<?php

require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class testing extends WebTestCase {
    
public function testSuccessful() {

  $this->get('http://localhost/bus_reservation/registration.php');
  $this->assertResponse(200);

  $this->setField("name", "user");
  $this->setField("submit", "Male");
  $this->setField("day", "01");
  $this->setField("month", "01");
  $this->setField("year", "1991");
  $this->setField("mo", "0123456789");
  $this->setField("add1", "9201 university city blvd");
  $this->setField("add2", "kennedy");
  $this->setField("add3", "charlotte");
  $this->setField("pin", "28223");
  $this->setField("email", "test2@test2.com");
  $this->setField("pass", "12345678");
  $this->setField("cpass", "12345678");

  $this->clickSubmit("SUBMIT");
  $this->assertResponse(200);
}
  
function testInvalidName() {
  
$this->get('http://localhost/bus_reservation/registration.php');
  $this->assertResponse(200);

  $this->setField("name", "");
  $this->setField("submit", "Male");
  $this->setField("day", "01");
  $this->setField("month", "01");
  $this->setField("year", "1991");
  $this->setField("mo", "0123456789");
  $this->setField("add1", "9201 university city blvd");
  $this->setField("add2", "kennedy");
  $this->setField("add3", "charlotte");
  $this->setField("pin", "28223");
  $this->setField("email", "test2@test2.com");
  $this->setField("pass", "12345678");

  $this->clickSubmit("Submit");
  
  $this->assertEqual(($this->getUrl()), "http://localhost/bus_reservation/index.php");
   
}




}