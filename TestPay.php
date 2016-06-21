function testSuccessful() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/pay.php?id=5&bus=16&seat=1&c=N'));
  
  $this->assertResponse(200);

  $this->setField("acc", "1234123412341234");
  $this->setField("card", "1234123412341234");
  $this->setField("crdname", "user1");

  $this->clickSubmit("Confirm");

  $this->assertResponse(200);

  $this->assertText("Are You Sure? Do You Want To Continue");

$this->clickSubmit("OK");

$this->assertText("Thank you!Your booking request has been processed and equal amount is deducted from your account");

}


function testInvalidAccountNumber() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/pay.php?id=5&bus=16&seat=1&c=N'));
  
  $this->assertResponse(200);

  $this->setField("acc", "");
  $this->setField("card", "1234123412341234");
  $this->setField("crdname", "user1");

  $this->clickSubmit("Confirm");

  $this->assertResponse(500);

  $this->assertText("Account Number should be only digits");
}
function testInvalidCardNumber() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/pay.php?id=5&bus=16&seat=1&c=N'));
  
  $this->assertResponse(200);

  $this->setField("acc", "1284628746285437");
  $this->setField("card", "1234");
  $this->setField("crdname", "user1");

  $this->clickSubmit("Confirm");

  $this->assertResponse(500);

  $this->assertText("Card number should be of 16 Digits");
}

function testInvalidCardHolderName() {

  $this-> assertTrue(get(' http://localhost/bus_reservation/pay.php?id=5&bus=16&seat=1&c=N'));
  
  $this->assertResponse(200);

  $this->setField("acc", "12846287462");
  $this->setField("card", "1234123412341234");
  $this->setField("crdname", "");

  $this->clickSubmit("Confirm");

  $this->assertResponse(500);

  $this->assertText("Card holder's Name can’t be blank, Please fill it");
}


