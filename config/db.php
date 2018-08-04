


 <?php 

  include_once ('config/config.php');
  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


 //Check Connection.
 //or if(!$conn){}
 if(mysqli_connect_errno()){
         //Connection Failed
        echo "Failed to connect to MySQL".mysqli_connect_errno();

 }/*else{
 	echo "Connection Ok";
 }*/

 






 ?>