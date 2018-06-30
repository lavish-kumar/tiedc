<?php

	
	$sql = "SELECT * from latest_announements";
	$run = mysqli_query($conn,$sql);	
    $sql = "SELECT * from upcoming_events";
	$run_2 = mysqli_query($conn,$sql);	
    $sql = "SELECT * from activities";
	$run_3 = mysqli_query($conn,$sql);
	
?>
<!DOCTYPE html>
<html>

<head>
<?php include "assets/components/headcontent.php";?>
  <title>TIEDC | JUIT</title>
<?php include "assets/components/customscrol.php";?>
    
</head>

<body class="">

  <?php include "assets/components/nav.php";?>
    



    <div class="py-5 text-center parallax cover" style="background-image: url(&quot;./assets/img/header.jpg&quot;); position: relative; background-position: center center; ;background-size:cover;">
    <div class="container d-flex flex-column">
      <div class="row my-auto">
        <div class="col-md-12 text-white">
          <img class="mb-5" src="assets/img/logo-white.png">
          <h3 class="mb-5">Technology Incubation &amp; Entrepreneurship Development Cell Jaypee University of Information Technology.</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white gradient-overlay bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <h1 class="display-1 text-center p p-3">Latest Anouncements</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="overflow: auto; height :400px">
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
                  <p class="mb-1"><?php echo $row[2]?></p>
                  <small class="bg-light border text-center badge alert rounded"><?php echo $row[4]?></small>-->
                </a>
                  
            <?php } ?>
              
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <h1 class="display-1 text-center p-3">Upcoming Events</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="overflow: auto; height :400px">
              <div class="list-group">
                <?php
				
			while($row = mysqli_fetch_row($run_2))
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
                  <p class="mb-1"><?php echo $row[2]?></p>
                  <small class="bg-light border text-center badge alert rounded"><?php echo $row[4]?></small>-->
                </a>
                  
            <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5   gradient-overlay-continue bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1 text-center p p-3">Activities @ E-Cell</h1>
        </div>
      </div>
      <div class="row">
           <?php
				
			while($row = mysqli_fetch_row($run_3))
			{
			
			?>
          
           <div class="col-md-4 p-2">
            <div class="card"  >
               <div class="card"  style="background-image: url('./assets/img/<?php echo $row[3]?>');background-position:center center;background-size:cover;">
                   <img  class="card-img-top mx-auto" style="height:250px;opacity:0" src="assets/img/<?php echo $row[3]?>" alt="Card image cap">
                </div>
            <div class="card-body" style="overflow: auto; height :200px">
              <h5 class="card-title border text-center badge alert rounded"><?php echo $row[1]?></h5>
              <p class="card-text"><?php echo $row[2]?></p>
              
            </div>
          </div>
           </div>  
            <?php } ?>
    
          
      </div>
    </div>
  </div>
  <div class="py-5 text-white inverse-gradient-overlay bg-secondary">
    <div class="container">
      <div class="row">
        <div class="align-self-center p-5 col-md-4">
          <h3 class="display-4">A glance at amazing moments @ TIEDC.</h3>
        </div>
        <div class="p-0 col-md-8">
          <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="1500">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block img-fluid w-100" src="assets/img/Anchor.png">
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="assets/img/autunm_wall.png">
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "assets/components/footer.php";?>
  
<?php mysqli_close($conn); ?>
</body>

</html>
