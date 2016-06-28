<?php

require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class testing extends WebTestCase {
    
function testSuccessful() {
  
  $this->get('http://localhost/bus_reservation/add_bus.php?id=16');
  
  $this->setField("bus_name", "Atlanta - Dallas");
  $this->setField("from_stop", "Atlanta");
  $this->setField("to_stop", "Dallas");
  $this->setField("date", "2016-07-01");
  $this->setField("departure_time", "08:00");
  $this->setField("arrival_time", "18:00");
  $this->setField("distance", "777");
  $this->setField("fare", "333");
  $this->setField("window_s", "1,3,5,7,9");
  $this->setField("n_window_s", "2,4,6,8,10");
  
  $this->clickSubmit("SUBMIT");
    
    
  $this->assertTrue($this->get('http://localhost/bus_reservation/AdminHome.php?id=16'));
  
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
	
   $this->get('http://localhost/bus_reservation/add_bus.php?id=16');
  
  $this->setField("bus_name", "");
  $this->setField("from_stop", "Atlanta");
  $this->setField("to_stop", "Dallas");
  $this->setField("date", "2016-07-01");
  $this->setField("departure_time", "08:00");
  $this->setField("arrival_time", "18:00");
  $this->setField("distance", "777");
  $this->setField("fare", "333");
  $this->setField("window_s", "1,3,5,7,9");
  $this->setField("n_window_s", "2,4,6,8,10");
  
  $this->clickSubmit("SUBMIT");
    
    
  $this->assertText("Welcome:");  
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