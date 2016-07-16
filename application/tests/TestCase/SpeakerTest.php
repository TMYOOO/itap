<?php
require('speaker.php');

class SpeakerTest extends PHPUnit_Framework_TestCase
{
  public function testCanSayHelloWorld()
  {
    $this->assertEquals('I love YOKOTEEEEEEE!!', Speaker::sayHello());
  }
}
