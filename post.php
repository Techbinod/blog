<?php 

    include ('config/config.php');
    include ('config/db.php');
    include ('function.php');


    include ('inc/header.php');

    include ('inc/nav.php');

    //get ID
   
    
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    
    //Create Query
    $query = "SELECT * FROM posts WHERE id = " .$id;

   
    //Get Result
    $result = mysqli_query($conn,$query);

    //Fetch data 
    
    $post = mysqli_fetch_assoc($result);

    /*debugger($posts,true);*/


    //Free Result 
    
    mysqli_free_result($result);

    //close connection
    
    mysqli_close($conn);


 ?>

 <?php include ('inc/header.php'); ?>

     <div class="container">

     	  <a  class="btn btn-default" href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
         <h1><?php echo $post['title']; ?></h1>
         <small>
         	Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
         </small>
         <p><?php echo $post['body']; ?></p>
               	  	
     </div>
 
 <?php include ('inc/footer.php'); ?>
