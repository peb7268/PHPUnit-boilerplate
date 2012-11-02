<?php
//To run a phpUNIT test at the command prompt type phpunit --colors <name_of_file>
//if selenium isnt started it will skip tests
class SomeTest extends PHPUnit_Extensions_Selenium2TestCase {
	public function setUp(){
		 //right now only works w firefox
         $this->setPort(4444);
		 $this->setBrowser("firefox");
	     $this->setBrowserUrl("http://localhost");
	}	
	public function testTitle()
    {
        $this->url('http://localhost');
        $this->assertEquals('XAMPP for Mac OS X 1.8.1-beta1 - error', $this->title());
    }
    //Test if an element is on a page -- asset contains is more liberal, to do an exact match do assertEquals
     public function testShortenedApiForSelectionOfElement()
    {
        $this->url('http://localhost/infosurv/CARE/');

        //$element = $this->byClassName('theDivClass');
        //$this->assertEquals('The right div', $element->text());

        $element = $this->byCssSelector('#title');
        $this->assertEquals('Reports Dashboard', $element->text());

    }

} ?>