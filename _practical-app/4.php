<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

// 01
function calculate(){
   $num1 = 4;
   $num2 = 36;
    $mul = $num1 * $num2;
    return $mul;
}
$result = calculate();
echo $result  . "<br>";

// 02
function sayHola($hello){
 echo $hello;

}
sayHola('hey is that spanish?');

?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>