<?php
/**
 *  Setup Steps:
 *  ** prereqs:
 *  - pear channel-discover pear.phpunit.de
 *  - pear install phpunit/PHPUnit
 * 
 *  1) Install selenium RC (remote control) http://seleniumhq.org/projects/remote-control/
 *  2) Unzip the distribution archive and copy server/selenium-server.jar to /usr/local/bin, for instance.
 *  3) Start the Selenium RC server by running java -jar /usr/local/bin/selenium-server.jar (make an alias if desired)
 * 
 * 
 *  To run a phpUNIT test at the command prompt type phpunit --colors <name_of_file> 
 *  Caveats:
 *  If selenium isnt started it will skip tests 
 * 
 */

class SomeTest extends PHPUnit_Extensions_Selenium2TestCase {
	public function setUp(){
		 //right now only works w firefox
         $this->setPort(4444);
		 $this->setBrowser('googlechrome');
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