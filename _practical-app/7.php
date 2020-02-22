<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    <?php

    $connection = mysqli_connect("localhost","root","D@wid1209","mylist"); //connect to DB
    if (!$connection){ // now check DB
        die("Database connection faild!");
    }else{
        echo "we are connected!";
    }

    $query = "SELECT * FROM reports";
    $result = mysqli_query($connection, $query);
    if (!$result){
        die("Query Faild!");
    }
    ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
        while($records = mysqli_fetch_assoc($result)){
            print_r($records['days_of_the_week']);
        }

	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
