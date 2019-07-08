<!DOCTYPE html>
<html>
<?php
		
$conn = mysqli_connect('localhost','root','','a');
		
		
		session_start();

		if (!$conn) {
			die("Connection failed: " . $conn);
		} 
		
	
		
?>	
<head>
 <?php include "assets/components/headcontent.php";?>
  <title>TIEDC | JUIT</title>
<?php include "assets/components/customscrol.php";?>
     
 <!--ACCORDION PLUGING REQUIRMENTS STARTS-->   
    <link rel="stylesheet" href="./assets/css/paper-collapse.min.css">

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
      <div class="row">
        <div class="col-md-12 my-5">
          <h1 class="text-center text-white">UPCOMING EVENTS</h1>
         
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="background-color: rgba(255,255,255,0.1)">
            
              <div class="container">
                <div class="row">
                        <div class="container">
         <?php
		$sql = "SELECT * FROM `events` WHERE date >= CURDATE()  order by date desc";
		$run = mysqli_query($conn,$sql);	
		$i=1;
      if(!empty($run))                       
      {while($row = mysqli_fetch_row($run))
		{
		?>               
        <div class="collapse-card card my-2">
            <div class="title">
                 <i class="fa fa-fw fa-2x fa-caret-down"></i>
                <span><small class="bg-light border text-center badge alert rounded" style="margin-bottom: 0rem;">
                    <?php echo date('d ',strtotime($row[2])); ?>
                    <?php echo date('M Y ',strtotime($row[2])); ?></small>
                
                </span>
                <strong class="text-center"><?php echo $row[0]; ?>
                
                </strong>
               
            </div>
            <div class="body">
                <div class="text-white blockquote card " style="background-color: rgba(255,255,255,0.1)" >
              <div class="container">
             <div class="row" >
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="../a/assets/img/event/<?php echo $row[4]; ?>.jpg"> </div>
        <div class="col-md-7">
          <p class=""><?php echo substr($row[1],0,500); ?>...
            <br><br>
             <a href="./evtdet.php?name=<?php echo $row[0];?>"><small class="bg-light border text-center badge alert rounded" style="margin-bottom: 0rem;"><i class="fa fa-fw fa-1x fa-caret-right"></i>READ MORE...</small></a>
            </p>
        </div>
      </div>
              </div>
            </div>
            </div>
        </div>
         
      <?php }$i++;
      }
       else{
           echo     "<div class=\"collapse-card card my-2\">
            <div class=\"title\">

                <strong class=\"text-center\">
                Opps no upcoming events yet ! , We are working to get new events to you
                </strong>
               
            </div>
           
        </div>";
       
       }                     
    ?>
    
    </div>
              
             
              </div>
            </div>
           
           
          </div>
        </div>
      </div>
    </div>
  </div>
    
      <div class=" py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-5">
          <h1 class="text-center text-white">PAST EVENTS</h1>
         
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="background-color: rgba(255,255,255,0.1)">
            
              <div class="container">
                <div class="row">
                        <div class="container">
              <?php
		$sql = "SELECT * FROM `events` WHERE date < CURDATE()  order by date desc";
		$run = mysqli_query($conn,$sql);	
		$i=1;
		while($row = mysqli_fetch_row($run))
		{
		?>               
       <div class="collapse-card card my-2">
            <div class="title">
                 <i class="fa fa-fw fa-2x fa-caret-down"></i>
                <span><small class="bg-light border text-center badge alert rounded" style="margin-bottom: 0rem;">
                    <?php echo date('d ',strtotime($row[2])); ?>
                    <?php echo date('M y ',strtotime($row[2])); ?></small>
                
                </span>
                <strong class="text-center"><?php echo $row[0]; ?>
                
                </strong>
               
            </div>
            <div class="body">
                <div class="text-white blockquote card " style="background-color: rgba(255,255,255,0.1)" >
              <div class="container">
             <div class="row" >
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="../a/assets/img/event/<?php echo $row[4]; ?>.jpg"> </div>
        <div class="col-md-7">
          <p class=""><?php echo substr($row[1],0,500); ?>...
            <br><br>
             <a href="./evtdet.php?name=<?php echo $row[0];?>"><small class="bg-light border text-center badge alert rounded" style="margin-bottom: 0rem;"><i class="fa fa-fw fa-1x fa-caret-right"></i>READ MORE...</small></a>
            </p>
        </div>
      </div>
              </div>
            </div>
            </div>
        </div>
         
           <?php }$i++;?>  
            
                    </div>
                </div>
            </div>
         </div>
        </div>
      </div>
    </div>
  </div>
      </div>
  <?php include "assets/components/footer.php";?>
  
</body>

</html>