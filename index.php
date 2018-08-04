<?php 


    include_once ('config/db.php');
    include_once ('config/config.php');

    include_once ('function.php');
    
    //Create Query
    $query = "SELECT * FROM posts";
   
    //Get Result
    $result = mysqli_query($conn,$query);

    //Fetch data 
    
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);

    /*debugger($posts,true);*/


    //Free Result 
    
    mysqli_free_result($result);

    //close connection
    
    mysqli_close($conn);


 ?>

 <?php include ('inc/header.php'); ?>

 <?php include ('inc/nav.php'); ?>
 
      
     <div class="container">

     	 
   
            <h1>Posts</h1>
     	 	<?php foreach ($posts as $post) : ?>
             <div >
             	
                     <h3><?php echo $post['title'];  ?></h3>
              		 <small>Created On <?php echo $post['created_at'] ;?> by <?php echo $post['author']; ?></small>
              		 <?php $limit= limit($post['body'],10)?>
              		 <p><?php echo $limit;?></p>

<<<<<<< HEAD
              		 <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a> 
=======
              		 <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
              		 
              		 
>>>>>>> ca82dc29a6d83765a4895fcac22d6d95c6cf7182

             </div>
             <br>
              
               
     	 		
     	 	<?php endforeach; ?>
     	 	
     	 	
     	 </table>
     	
     </div>
 
 <?php 
 include_once ('inc/footer.php');

  ?>
