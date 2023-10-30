<?php
  $to = "raikers2043@gmail.com";
  $subject = "Тема сообщения"
  $message = "Message, сообщение!";
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";
    mail ($to, $subject, $message, $headers);
  ?>

<?php
  $to = "raikers2043@gmail.com";
  $subject = "Тема сообщения";
  $message = "Message, сообщение!";
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
   
      if(isset($_POST["username"]){
        
          $name     =trim(strip_tags($_POST["username"]));
      }
      
      if(isset($_POST["usernumber"]))
        {
          $number   = trim(strip_tags($_POST["usernumber"]));
        }
      if (isset( $_POST["question"])) {
          $question   = trim(strip_tags($question));
      }
    }
    else
      {
        exit;
      } 
  ?>
