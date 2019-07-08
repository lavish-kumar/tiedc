<?php

	$conn = mysqli_connect('localhost','root','','a');
	
	session_start();

	if (!$conn) {
		die("Connection failed: " . $conn);
	} 
	
	$sql = "SELECT * from team where year='2013' or year='2014' or year='f' or year='a' or year='2015'";
	$run = mysqli_query($conn,$sql);

	$sql = "SELECT * from team where year='f'";
    $run2 = mysqli_query($conn,$sql);
    $sql = "SELECT * from team where pos='Excom'";
    $run3 = mysqli_query($conn,$sql);
    $sql = "SELECT * FROM `team` where NOT pos='Excom' AND (NOT pos='Faculty')";
	$run4 = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>

<head>
 <?php include "assets/components/headcontent.php";?>
  <title>TIEDC | JUIT</title>
<?php include "assets/components/customscrol.php";?>
    </head>

<body class="text-white">
 <?php include "assets/components/nav.php";?>
<canvas id="nokey" style="position:absolute;background: linear-gradient(180deg,#A23C58, #4A62AC);" width="1000" height="2000">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>
    <div id="content">
  <div class="text-center py-5 ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-5">
          <h1 class="">OUR TEAM</h1>
          <p class="lead">We grow together with the community</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="mb-4 border-0">
            <nav>
              <ul class="nav-tabs flex-column flex-lg-row justify-content-md-center nav card p-2" style="background-color: rgba(255,255,255,0.05)">
                <li class="nav-item mr-1 text-center">
                  <a href="" class="active nav-link rounded" data-target="#all" data-toggle="pill" style="background-color: rgba(255,255,255,0.1)">ALL</a>
                </li>
                <li class="nav-item mr-1 text-center">
                  <a href="" class="nav-link rounded" data-toggle="pill" data-target="#fm" style="background-color: rgba(255,255,255,0.1)">FACULTY MENTORS</a>
                </li>
                <li class="nav-item mr-1 text-center">
                  <a class="nav-link rounded" href="" data-toggle="pill" data-target="#sm" style="background-color: rgba(255,255,255,0.1)">STUDENT MENTORS</a>
                </li>
                <li class="nav-item text-center">
                  <a href="" class="nav-link rounded" data-toggle="pill" data-target="#sp" style="background-color: rgba(255,255,255,0.1)">STUDENT PARTNERS</a>
                </li>
              </ul>
            </nav>
            <div class="card-body">
              <div class="tab-content mt-2">
                <div class="tab-pane fade show active text-center" id="all" role="tabpanel">
                  <div class="row " style="background-color: rgba(255,255,255,0.05)">
            <?php
			while($row = mysqli_fetch_row($run))
			{
            ?>
            <?php $nam =  explode(" ", $row[0]); ?>
                    <div class="col-md-4 p-4">
                      <img class="img-fluid d-block mx-auto" src="../a/assets/img/team/<?php if($nam[0]=='Prof.') echo strtolower($nam[2]); else if($nam[0]=="Dr.") echo strtolower($nam[1]); else echo ($nam[0]); ?>.jpg">
                      <p class="my-4">
                        <i></i>
                      </p>
                      <p>
                        <b><?php echo $row[0]; ?></b>
                        <br><?php if($row[15]!="Team Head") echo $row[1].' '.$row[15]; else echo $row[1];?></p>
                    </div>
                    
                <?php
			}				
			?>    
                  </div>
                </div>
                <div class="tab-pane fade text-center" id="fm" role="tabpanel">
                  <div class="row " style="background-color: rgba(255,255,255,0.05)">
                   <?php
			while($row = mysqli_fetch_row($run2))
			{
            ?>
            <?php $nam =  explode(" ", $row[0]); ?>
                    <div class="col-md-4 p-4">
                      <img class="img-fluid d-block mx-auto" src="../a/assets/img/team/<?php if($nam[0]=='Prof.') echo strtolower($nam[2]); else if($nam[0]=="Dr.") echo strtolower($nam[1]); else echo ($nam[0]); ?>.jpg">
                      <p class="my-4">
                        <i></i>
                      </p>
                      <p>
                        <b><?php echo $row[0]; ?></b>
                        <br><?php if($row[15]!="Team Head") echo $row[1].' '.$row[15]; else echo $row[1];?></p>
                    </div>
                    
                <?php
			}				
			?>    
                
                  </div>
                </div>
                <div class="tab-pane fade text-center" id="sm" role="tabpanel">
                  <div class="row " style="background-color: rgba(255,255,255,0.05)">
                    <?php
			while($row = mysqli_fetch_row($run3))
			{
            ?>
            <?php $nam =  explode(" ", $row[0]); ?>
                    <div class="col-md-4 p-4">
                      <img class="img-fluid d-block mx-auto" src="../a/assets/img/team/<?php if($nam[0]=='Prof.') echo strtolower($nam[2]); else if($nam[0]=="Dr.") echo strtolower($nam[1]); else echo ($nam[0]); ?>.jpg">
                      <p class="my-4">
                        <i></i>
                      </p>
                      <p>
                        <b><?php echo $row[0]; ?></b>
                        <br><?php if($row[15]!="Team Head") echo $row[1].' '.$row[15]; else echo $row[1];?></p>
                    </div>
                    
                <?php
			}				
			?>    
                    
                   
                  </div>
                </div>
                <div class="tab-pane fade text-center" id="sp" role="tabpanel">
                  <div class="row " style="background-color: rgba(255,255,255,0.05)">
                    <?php
			while($row = mysqli_fetch_row($run4))
			{
            ?>
            <?php $nam =  explode(" ", $row[0]); ?>
                    <div class="col-md-4 p-4">
                      <img class="img-fluid d-block mx-auto" src="../a/assets/img/team/<?php if($nam[0]=='Prof.') echo strtolower($nam[2]); else if($nam[0]=="Dr.") echo strtolower($nam[1]); else echo ($nam[0]); ?>.jpg">
                      <p class="my-4">
                        <i></i>
                      </p>
                      <p>
                        <b><?php echo $row[0]; ?></b>
                        <br><?php if($row[15]!="Team Head") echo $row[1].' '.$row[15]; else echo $row[1];?></p>
                    </div>
                    
                <?php
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
  </div>
</div>
    <?php include "assets/components/footer.php";?>
 

    
</body>

</html>