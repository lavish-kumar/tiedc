<?php
		
	$conn = mysqli_connect('localhost','juithost','godofwar1234','juithost_acm1');
		
		
		session_start();

		if (!$conn) {
			die("Connection failed: " . $conn);
		} 
		
		
		$event = $_GET['name'];
		$sql = "SELECT * from events where name='".$event."'";
		$run = mysqli_query($conn,$sql);		
		$row = mysqli_fetch_row($run);
?>
<!DOCTYPE html>
<html>

<head>
 <?php include "assets/components/headcontent.php";?>
  <title>TIEDC | JUIT</title>
<?php include "assets/components/customscrol.php";?>
     
 <!--ACCORDION PLUGING REQUIRMENTS STARTS-->   
    <link rel="stylesheet" href="./assets/css/paper-collapse.min.css">
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="./assets/js/paper-collapse.min.js"></script>
 <!--ACCORDION PLUGING REQUIRMENTS ENDS-->
    
</head>

<body class="text-white">
   <?php include "assets/components/nav.php";?>
   <canvas id="nokey" style="position:absolute;background: linear-gradient(180deg,#A23C58, #4A62AC);" width="1000" height="2000">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>
    <div id='content'>
  <div class=" py-5">
    <div class="container">
          <div class="container">
<div class="row py-5">
       <div class="align-self-center col-md-6 text-center">
          <h1 style="margin-bottom: 0;"><?php echo $row[0]; ?></h1>
          <br>
          <p class="px-3">An event providing you the platform for you, where ther is an audience just for you.</p>
        </div>
        <div class="p-0 col-md-6">
          <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="1500">
            <div class="carousel-inner">
            <?php $i=1; ?>
              <div class="carousel-item active">
                <img class="d-block img-fluid w-100" src="assets/img/event/<?php echo $row[4]; ?>_<?php echo $i++; ?>.jpg">
                
              </div>
              <div class="carousel-item">
               <img class="d-block img-fluid w-100" src="assets/img/event/<?php echo $row[4]; ?>_<?php echo $i++; ?>.jpg">
                
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
      <div class="row ">
        <div class="col-sm-8">
          <div class="headline">
            <h2>About Event</h2>
          </div>
          <p style="text-align:justify;"><?php echo $row[1]; ?></p>
        </div>
        <div class="col-sm-4">
          <div class="headline">
            <h2>Event Details</h2>
          </div>
          <ul class="list-unstyled project-details">
            <li>
              <strong>Type:&nbsp;</strong> <?php echo ucwords($row[3]); ?></li>
            <li>
              <strong>Date :&nbsp;</strong> <?php echo date('d M Y',strtotime($row[2])); ?></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </div>
          </div>
  <?php include "assets/components/footer.php";?>
  
</body>

</html>