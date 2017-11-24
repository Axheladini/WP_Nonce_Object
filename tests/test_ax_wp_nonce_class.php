<?php

class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $aXnonce;
 
    protected function setUp()
    {
        $this->aXnonce = new WpNonce();
    }
 
    protected function tearDown()
    {
        $this->aXnonce = NULL;
    }
 
    public function testNonceField()
    {
  
        $this->aXnonce->setUrl('/test/?action=delete&ID=$id');
        $this->aXnonce->setAction("url_nonce_delete_action");
        $this->aXnonce->setName("url_nonce_delete_name");
        $this->aXnonce->ax_nonce_url_generator();
        $this->assertNotNull($this->aXnonce->ax_nonce_url_generator());
    }
 
}



?>