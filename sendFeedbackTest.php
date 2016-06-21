function testSuccessful() {
	$this-> assertTrue(get('http://localhost/bus_reservation/sendFeedback.php));
	$this-> assertResponse(200);
	
	$this->setField("email", "email@email.com");
	$this->setField("date", "06-19-16");
	$this->setField("time", "06:30");
	$this->setField("feedback", "Great trip!")
	
	$this->clickSubmit("Submit");
	
	$this->assertResponse(200);
	$this->assertText("Feeback sent successfully");
	$this->assertText("Back to My Bookings");
}

function testEmptyEmail() {
	$this-> assertTrue(get('http://localhost/bus_reservation/sendFeedback.php));
	$this-> assertResponse(200);
	
	$this->setField("email", "");
	$this->setField("date", "06-19-16");
	$this->setField("time", "06:30");
	$this->setField("feedback", "Great trip!")
	
	$this->clickSubmit("Submit");
	
	$this->assertResponse(500);
	$this->assertText("Email not entered");
}

function testInvalidEmail() {
	$this-> assertTrue(get('http://localhost/bus_reservation/sendFeedback.php));
	$this-> assertResponse(200);
	
	$this->setField("email", "abc.org");
	$this->setField("date", "06-19-16");
	$this->setField("time", "06:30");
	$this->setField("feedback", "Great trip!")
	
	$this->clickSubmit("Submit");
	
	$this->assertResponse(500);
	$this->assertText("Email invalid");
}

function testEmptyDate() {
	$this-> assertTrue(get('http://localhost/bus_reservation/sendFeedback.php));
	$this-> assertResponse(200);
	
	$this->setField("email", "email@email.com");
	$this->setField("date", "");
	$this->setField("time", "06:30");
	$this->setField("feedback", "Great trip!")
	
	$this->clickSubmit("Submit");
	
	$this->assertResponse(500);
	$this->assertText("Date not entered");
}

function testEmptyTime() {
	$this-> assertTrue(get('http://localhost/bus_reservation/sendFeedback.php));
	$this-> assertResponse(200);
	
	$this->setField("email", "email@email.com");
	$this->setField("date", "06-19-16");
	$this->setField("time", "");
	$this->setField("feedback", "Great trip!")
	
	$this->clickSubmit("Submit");
	
	$this->assertResponse(500);
	$this->assertText("Time not entered");
}

function testEmptyFeedback() {
	$this-> assertTrue(get('http://localhost/bus_reservation/sendFeedback.php));
	$this-> assertResponse(200);
	
	$this->setField("email", "email@email.com");
	$this->setField("date", "06-19-16");
	$this->setField("time", "06:30");
	$this->setField("feedback", "")
	
	$this->clickSubmit("Submit");
	
	$this->assertResponse(500);
	$this->assertText("Feedback not entered");
}