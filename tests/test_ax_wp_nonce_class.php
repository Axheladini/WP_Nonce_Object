<?php

class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $aXnonce;
    protected $test_action = 'ax_nonce_action';
    protected $test_name = 'ax_nonce_name';
    protected $test_url = '/test/?action=delete&ID=$id';
    protected $hook_called_count = 0;
 
    protected function setUp()
    {
        $this->aXnonce = new WpNonce();
    }
 
    protected function tearDown()
    {
        $this->aXnonce = NULL;
    }
    
    public function testGeneralNonce()
    {

    }
    public function testNonceUrl()
    {
  
        $this->aXnonce->setUrl($this->test_url);
        $this->aXnonce->setAction($this->test_name);
        $this->aXnonce->setName($this->test_name);
        $this->assertNotNull($this->aXnonce->ax_nonce_url_generator());
     
    }
    public function testNonceField()
    {
  
        $this->aXnonce->setAction($this->test_name);
        $this->aXnonce->setName($this->test_name);
        $this->assertNotNull($this->aXnonce->ax_nonce_field_generator());
     
    }
    public function testNonceGeneral()
    {
        $this->aXnonce->setAction($this->test_name);
        $this->assertNotNull($this->aXnonce->ax_general_nonce_generate()); 
    }

     public function testNonceVerification()
    {
 
        $this->aXnonce->setAction($this->test_name);
        $this->aXnonce->setName($this->test_name);
        $general_nonce = $this->aXnonce->ax_general_nonce_generate();

        $this->aXnonce->ax_nonce_verify($general_nonce, $this->test_action);
        $this->assertEquals( 0, $this->hook_called_count );
      
    }
 
}



?>