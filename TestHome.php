function testSuccessful() {

  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
  $this->assertResponse(200);

  $this->setField("from", "Raleigh");
  $this->setField("to", "Charlotte");
  $this->setField("journeyDate", "2016-06-25");
  
  $this->clickSubmit("Search");

  $this->assertResponse(200);
  $this-> assertTrue(set('http://localhost/bus_reservation/Home.php?id=5'));

}

function testInvalidFromStop() {

  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
  $this->assertResponse(200);

  $this->setField("from", "-Select-");
  $this->setField("to", "Charlotte");
  $this->setField("journeyDate", "2016-06-25");
  
  $this->clickSubmit("Search");

  $this->assertResponse(500);
  $this-> assertText("Please enter valid From Stop");

}

function testInvalidToStop() {

  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
  $this->assertResponse(200);

  $this->setField("from", "Raleigh");
  $this->setField("to", ""-Select-");
  $this->setField("journeyDate", "2016-06-25");
  
  $this->clickSubmit("Search");

  $this->assertResponse(500);
  $this-> assertText("Please enter valid To Stop");

}


function testInvalidJourneyDate() {

  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
  $this->assertResponse(200);

  $this->setField("from", "Raleigh");
  $this->setField("to", ""Charlotte");
  $this->setField("journeyDate", "");
  
  $this->clickSubmit("Search");

  $this->assertResponse(500);
  $this-> assertText("Please enter valid Journey Date");

}
function testUnsuccessful() {

  $this-> assertTrue(get('http://localhost/bus_reservation/Home.php'));
  $this->assertResponse(200);

  $this->setField("from", "-Select-");
  $this->setField("to", ""-Select-");
  $this->setField("journeyDate", "");
  
  $this->clickSubmit("Search");

  $this->assertResponse(500);
  $this-> assertText("Please enter valid From Stop");

}
