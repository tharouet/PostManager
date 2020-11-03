# PostManager
This is a very simple class that accepts the $_Post variables, sanitize them and conver the result to an object 

Once you add this class to your code you will be able to accept the output of the class in the variable and use the input form name as the class parameter.

As this is a static method you will not need to instantiate it. 


Example:

HTML Page

  form action="result.php" method="POST"
  
    input name="email" type="email"
    
    input name="password" type="password"
    


PHP Code for result.php

  use Tharouet/PostManager
  
  $MyForm = PostManager::Capture();
  
  echo $MyForm->email;
  
  echo $MyForm->password;
  



