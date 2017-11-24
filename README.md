<h2> WordPress Nonce's in Object Oriented way </h2>
<p>Worpress Nonces stand for "number used once", are used in requests (saving options, form posts, Ajax requests, actions, and so on) to stop unauthorised access by generating a secret key. This secret key is generated prior to generating a request (that is from post). The key is then passed in the request to your script and verified to be the same key before anything else is processed.</p>
<p> In General nonce's are a built in security tool for WordPress  that you should always utilize to make sure your plugins themes are as secure as can be </p> 

<p> Read more about WordPress nonces at official <a href="https://codex.wordpress.org/WordPress_Nonces" target="_blank">WordPress Codex </a></p>

<p>This Repository shows one posible way of using nonces in object oriented way with PHP</p>

<h2> Instalation </h2>
<p><b>First thing:</b> If you are using Windows for developing WP themes and plugins i would really suggest you to use Vagrant/vccw (Development environment for Wordpress) <a href="http://vccw.cc/" target="_blank">VCCW</a>. It will really help you on the general process and specially with phpunit testing process. </p>

<p> Download, clone or use composer to install the directory to your WordPress theme<p>
  
  <span>Insert the class file into function.php file</span>
  
```PHP
include( TEMPLATEPATH . '/nonce_object/src/ax_wp_nonce_class.php');
```

<h2>Create Field nonce</h2>

```php
$nonce = new WpNonce();
$nonce->setAction("name_of_my_action");
$nonce->setName("name_of_nonce_field");
$nonce->ax_nonce_field_generator();

```
<h2>Create URL Nonce</h2>

```php
$nonce_url = new WpNonce();
$nonce_url->setUrl('/test/?action=delete&ID=$id');
$nonce_url->setAction("url_nonce_delete_action");
$nonce_url->setName("url_nonce_delete_name");
echo $post->post_title . "<a href=".  $nonce_url->ax_nonce_url_generator().">Delete</a><br>";
```

<h2>Create Generl nonce</h2>

```php
$nonce_general = new WpNonce();
$nonce_general->setAction("ax_general_none");
$nonce_general->ax_general_nonce_generate();
```

<h2>Verify Nonce </h2>

```php
$verify_nonce = new WpNonce();
$nonce_boolean_value = $verify_nonce->ax_nonce_verify($_POST['name_of_nonce_field'], "name_of_my_action");

if($nonce_boolean_value == 0)
   {
    /* Show error message*/
   }
   else 
   {
     /*Proceed with insertation, deletation, update ... */
   }
```



