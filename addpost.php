<?php 


    include_once ('config/db.php');
    include_once ('config/config.php');

    include_once ('function.php');
    
  ?>

 <?php include ('inc/header.php'); ?>

 <?php include ('inc/nav.php'); ?>
 
      
     <?php 
    
       //Check For Submit
      if(isset($_POST['submit'])){

          // GEt Form data 
          
          $title = mysqli_real_escape_string($conn,$_POST['title']);
          $body = mysqli_real_escape_string($conn,$_POST['body']);
          $author = mysqli_real_escape_string($conn,$_POST['author']);

          $query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body') ";

          if(mysqli_query($conn,$query)){

          	header('Location:'.ROOT_URL.'');

          }else{

          	echo "Error:".mysqli_error($conn);
          }



      }

      ?>


     <div class="container">
        <h1>Add Post</h1>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

        	<div class="form-group">
        		<label>Title</label>
        		<input type="text" name="title" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Author</label>
        		<input type="text" name="author" class="form-control">
        	</div>


        	<div class="form-group">
        		<label>Body</label>
        		<textarea type="text" name="body" class="form-control"></textarea>
        	</div>

        	<input class="btn btn-primary" type="submit" name="submit">

        	
        </form>
     	
     </div>
 
 <?php include_once ('inc/footer.php');?>
