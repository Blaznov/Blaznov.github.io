<?php;
$mongo = new MongoClient();
?>

<?php

$name = $_POST['name'];
$tel = $_POST['tel'];
$avto = $_POST['avto'];
$message = $_POST['message'];
$exe = array( 
    "name" => $name,
    "tel" => $tel,
	"avto" => $avto,
    "message" => $message
);

$collection= $mongo-> Feedback-> feedback;
$collection->insert($exe);
if( $collection == true)
{
    
     echo "<html><head><meta http-equiv = 'Refresh' content = '0; URL = http://avtoparts/contacts.php'></head></html>"; 
   
    
}
 else
    {
        
       echo "error";
    }
?>







<?php 
 require "db.php";

 $data = $_POST;
 if(isset($data['submitbtn']) )
 {
  // ---

 


   
     $user = R::dispense('feedback');
     $user->name = $data['name'];
     $user->telephone = $data['tel'];
	 $user->avto = $data['avto'];
	 $user->message = $data['message'];
     R::store($user);
   }
 
 ?>
	