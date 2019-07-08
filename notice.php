<?php

 include 'assets/php/dbcon.php';
	$id = $_GET['id'];
    $type = $_GET['type'];
	$sql = "SELECT * from ".$type."  where index_number='".$id."'";
	$run = mysqli_query($conn,$sql);	

	
?>
<!DOCTYPE html>
<html>

<head>
 <?php include "assets/components/headcontent.php";?>
  <title>TIEDC | JUIT</title>
<?php include "assets/components/customscrol.php";?>
     
 <!--ACCORDION PLUGING REQUIRMENTS STARTS-->   
    <link rel="stylesheet" href="./assets/css/paper-collapse.min.css">
    <script src="./assets/js/paper-collapse.min.js"></script>
 <!--ACCORDION PLUGING REQUIRMENTS ENDS-->
    
</head>
 <canvas id="nokey" style="position:absolute;background: linear-gradient(180deg,#A23C58, #4A62AC);" width="1000" height="2000">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>
<body>
   <?php include "assets/components/nav.php";?>
  
  <div id="content" class=" py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-5" style="color: white;">
          <h1 class="text-center">NOTICE | ANNOUNCEMENT</h1>
         
        </div>
      </div>
        
               <div class="list-group">
            
            <?php
				
			while($row = mysqli_fetch_row($run))
			{
			
			?>
             <a href="#" class="list-group-item list-group-item-action flex-column align-items-start my-1 card" style="padding: 0.1rem">
            <div class="card">
            <div class="card-header bg-primary"><div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $row[1]?></h5>
                    <small class="bg-light border text-center badge alert rounded" ><?php
                
$a = strtotime($row[3]);
$b = time();
$diff = $b - $a +19800;
$days = floor(($diff /(60*60*24)));

echo $days." days ago";
?></small>
                  </div></div>
            <div class="card-body">
              <p class="mb-1"><?php echo $row[2]?></p>
              <small class="bg-light border text-center badge alert rounded" style="margin-bottom: 0rem;"><?php echo $row[4]?></small>
            </div>
            </div>
                  
                 
                  <!--<div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $row[1]?></h5>
                    <small class="bg-light border text-center badge alert rounded" ><?php echo $row[3]?></small>
                  </div>
                  <p class="mb-1"><?php echo $row[5]?></p>
                  <small class="bg-light border text-center badge alert rounded"><?php echo $row[4]?></small>-->
                </a>
                  
            <?php } ?>
              
                </div>
     
    </div>
  </div>
  <?php include "assets/components/footer.php";?>

</body>

</html>