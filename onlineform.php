<?php
$cookie_name = "CookieMonster";
$cookie_value = date('Y');
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
echo $_COOKIE[$cookie_name];
?>


<html>
    <body>
    <head>
        
        <title>Some words here</title>
    </head>
    
  
  <h1>Online Form</h1>
  
   <form action="my_form.php" method="post">
   
	First Name: <input type="text" name="first_name"><br/><br/>
	
    Last Name: <input type="text" name="last_name"><br/><br/>
    
    Email: <input type="text" name="email"><br/><br/>

	<input type="submit">
    </form>

    <?php
   echo $_SERVER["HTTP_USER_AGENT"];
?>


Create a session and a session variable named first_name and assign your first name to that variable, then echo it out to the screen.
      
     </body>
</html>