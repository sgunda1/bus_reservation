function testSuccessful() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/Feedback_Page.php?id=5'));
  
  $this->assertResponse(200);

  $this->setField("name", "user1");
  $this->setField("email", "user1@email.com	");
  $this->setField("comments", "submitting feedback form");

  $this->clickSubmit("Submit Feedback");

  $this->assertResponse(200);

  $this->assertText("Feedback Submitted");
}

function testInvalidName() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/Feedback_Page.php?id=5'));
  
  $this->assertResponse(200);

  $this->setField("name", "");
  $this->setField("email", "user1@email.com	");
  $this->setField("comments", "submitting feedback form");

  $this->clickSubmit("Submit Feedback");

  $this->assertResponse(500);

  $this->assertText("Please enter valid Name");
}

function testInvalidEmail() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/Feedback_Page.php?id=5'));
  
  $this->assertResponse(200);

  $this->setField("name", "user1");
  $this->setField("email", "user1.com	");
  $this->setField("comments", "submitting feedback form");

  $this->clickSubmit("Submit Feedback");

  $this->assertResponse(500);

  $this->assertText("Please enter valid Email");
}


function testInvalidName() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/Feedback_Page.php?id=5'));
  
  $this->assertResponse(200);

  $this->setField("name", "user1");
  $this->setField("email", "user1@email.com	");
  $this->setField("comments", "");

  $this->clickSubmit("Submit Feedback");

  $this->assertResponse(500);

  $this->assertText("Please enter General Comments");
}
function testUnsuccessful() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/Feedback_Page.php?id=5'));
  
  $this->assertResponse(200);

  $this->setField("name", "");
  $this->setField("email", "");
  $this->setField("comments", "");

  $this->clickSubmit("Submit Feedback");

  $this->assertResponse(500);

  $this->assertText("Please enter valid Name");
}
