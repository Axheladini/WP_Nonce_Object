<?php 
/**
   * WpNonce
   * 
   * 
   * @package    1.0
   * @author     Agon Xheladini contact@agonxheladini.com
   * date: 14/11/2017
   */


class WpNonce
{
	/**
       * WP Nonces as Objects 
       * 
       * @param string $action -  represents the action name,
       * @param string $url  - URL that will be added to the nonce,
       * @param string $name -represents the name of the nonce 
       * @param string $referer - It determines whether the referrer “hidden form field” should be created
       * @param string $echo  - It determines whether WordPress should echo the nonce hidden field or return its value 
       * @param string $nonce - Nonce name for nonce verification. 
       * 
       */

	    protected $action;
	    protected $url;
	    protected $name;


    /* Sets the action value for the nonce
    *
    * @returns action name 
    *
    */
	public function setAction($action)
	{
        $this->action = $action;
        return $this;
	}

	 /* Sets the url value for the nonce
    *
    * @returns URL name 
    *
    */
	public function setUrl($url)
	{
     $this->url = $url;
     return $this;
	}

 /* Sets the name of the nonce, variable will be used on 
  *
  * @returns Nonce name 
  *
  */
	public function setName($name)
	{
     $this->name = $name;
     return $this;
	}

 /* Sets the name of the nonce variable will be used on Verify nonce function
  *
  * @returns Nonce name 
  *
  */
  public function setNonce($name)
  {
     $this->name = $name;
     return $this;
  }

   /* Generates a nonce field based on the values we enter!
  *
  * @returns Nonce Field
  *
  */

   public function ax_nonce_field_generator($referer = "referer", $echo = "echo" ) 
   {
    
     return wp_nonce_field( $this->action, $this->name, $referer =="referer", $echo == "echo" );
   }
  
   /* Generates a nonce field based on the values we enter!
  *
  * @returns Nonce Field
  *
  */
   public function ax_nonce_url_generator() {

    if ( !$this->url ) { return null; }
    return wp_nonce_url( $this->url, $this->action, $this->name );
    
  }


  /**
   * Retrieves a general nonce
   *
   * @return string
   */
  public function ax_general_nonce_generate()  {
    return wp_create_nonce( $this->action );
  }
  
  /**
   * Verify nonce
   *
   * @param $nonce
   * @param $action
   *
   * @return boolean
   */
  public function ax_nonce_verify($nonce, $action) 
  {
    return wp_verify_nonce($nonce, $action);
  } 
  
}




?>