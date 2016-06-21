<?php
class testing  {
    
public function testSuccessful() {

  $this->assertTrue(get('http://localhost/bus_reservation/index.php'));
  $this->assertResponse(200);

  $this->setField("user", "user@email.com");
  $this->setField("pass", "12345678");
  
  $this->clickSubmit("Login");

  print_r($this->assertResponse(200));
  print_r($this-> assertTrue(set('http://localhost/bus_reservation/Home.php')));

}

function testInvalidEmailAddress() {
  
     $this-> assertTrue(get('http://localhost/bus_reservation/index.php'));
  $this->assertResponse(200);

  $this->setField("user", "user.com");
  $this->setField("pass", "12345678");
  
  $this->clickSubmit("Login");

  $this->assertResponse(500);
  $this->assertText("Please enter valid Email!");

}

function testInvalidPassword() {
  
     $this-> assertTrue(get('http://localhost/bus_reservation/index.php'));
  $this->assertResponse(200);

  $this->setField("user", "user@email.com");
  $this->setField("pass", "123");
  
  $this->clickSubmit("Login");

  $this->assertResponse(500);
  $this->assertText("Invalid Credentials");

}

function testUnsuccessful() {

$this->assertTrue(get('http://localhost/bus_reservation/index.php'));
  $this->assertResponse(200);

  $this->setField("user", "user.com");
  $this->setField("pass", "123");
  
  $this->clickSubmit("Login");

  $this->assertResponse(500);

  $this->assertText("Please enter valid Email!");
  $this->assertText("Invalid Credentials");

}
}

$foobar = new testing;  // correct
$foobar->testSuccessful();



