function testSuccessful() {

  $this-> assertTrue(get('http://localhost/bus_reservation/index.php'));

  $this->clickSubmit("Registration");

  $this->assertResponse(200);
 $this-> assertTrue(set('http://localhost/bus_reservation/registration.php'));
  
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
  $this->setField("email", "user1@email.com");
  $this->setField("pass", "12345678");

  $this->clickSubmit("Submit");

  $this->assertResponse(200);
  $this-> assertTrue(set('http://localhost/bus_reservation/Home.php'));

}


function testInvalidName() {
  
     $this-> assertTrue(get('http://localhost/bus_reservation/index.php'));

$this->clickSubmit("Registration");

  $this->assertResponse(200);
 $this-> assertTrue(set('http://localhost/bus_reservation/registration.php
'));


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
  $this->setField("email", "user1@email.com");
  $this->setField("pass", "12345678");

  $this->clickSubmit("Submit");

  $this->assertResponse(500);
  $this->assertText("Please Fill Name");

}



function testInvalidMobileNo() {
  
     $this-> assertTrue(get('http://localhost/bus_reservation/index.php'));

$this->clickSubmit("Registration");

  $this->assertResponse(200);
 $this-> assertTrue(set('http://localhost/bus_reservation/registration.php'));
  $this->assertResponse(200);
 
  $this->setField("name", "user1");
  $this->setField("submit", "Male");
  $this->setField("day", "01");
  $this->setField("month", "01");
  $this->setField("year", "1991");
  $this->setField("mo", "01234");
  $this->setField("add1", "9201 university city blvd");
  $this->setField("add2", "kennedy");
  $this->setField("add3", "charlotte");
  $this->setField("pin", "28223");
  $this->setField("email", "user1@email.com");
  $this->setField("pass", "12345678");

  $this->clickSubmit("Submit");

  $this->assertResponse(500);
  $this->assertText("Please Fill valid mobile number");

}

function testInvalidZip() {
  
     $this-> assertTrue(get('http://localhost/bus_reservation/index.php'));

$this->clickSubmit("Registration");

  $this->assertResponse(200);
 $this-> assertTrue(set('http://localhost/bus_reservation/registration.php'));
  $this->assertResponse(200);
 
  $this->setField("name", "user1");
  $this->setField("submit", "Male");
  $this->setField("day", "01");
  $this->setField("month", "01");
  $this->setField("year", "1991");
  $this->setField("mo", "0123456789");
  $this->setField("add1", "9201 university city blvd");
  $this->setField("add2", "kennedy");
  $this->setField("add3", "charlotte");
  $this->setField("pin", "28");
  $this->setField("email", "user1@email.com");
  $this->setField("pass", "12345678");

  $this->clickSubmit("Submit");

  $this->assertResponse(500);
  $this->assertText("Please Fill valid zip code");

}





























