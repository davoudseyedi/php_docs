<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */



    //    01

     if (10 < 6){
        echo "is true";
    }elseif(10 > 6){
        echo "i love PHP";
        echo "<br>";
    }

    //    02

    for($i = 0; $i <= 10; $i++){
        echo $i ."<br>";
    }

    //   03
    $num = 20;
    switch ($num){
        case 10:
            echo "Num is 10";
            break;
        case 20:
            echo "Num is 20";
            break;
        case 30:
            echo "Num is 30";
            break;
        case 40:
            echo "Num is 40";
            break;
        default:
            echo "no number matches";
            break;

    }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>