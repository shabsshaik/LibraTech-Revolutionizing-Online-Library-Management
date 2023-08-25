
<?php
         $to = "shabanashaik2003@gmail.com" ;
         $subject = "received";
         
         $message = "This is  message.";
        
         
         $header = "From:shabanashaik2003@gmail.com\r\n";
         
         if( mail($to,$subject,$message,$header))
 {
            echo "Message sent successfully to $to..";
         }else {
            echo "Message could not be sent...";
         }
   
?>
