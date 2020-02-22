<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

//01
    echo rand(1,10000);
//02
    echo "<br>";
    $string = "fshgdflksskdvhfdvsalfvsfhal";
    $valueLength =  strlen($string);
    echo $valueLength;

    echo "<br>";
//03

    $listArray = [4252,'sfsdfs',54,'fsfsa', $string];
    $found = in_array($string, $listArray);
    if($found){
        echo "Wow we did it together";
    }else{
        echo "we messed upm we could not find";
    }
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>