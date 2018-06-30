
<!DOCTYPE html>
<html>

<head>
<?php include "assets/components/headcontent.php";?>
  <title>TIEDC | JUIT</title>
<?php include "assets/components/customscrol.php";?>
</head>

<body class="bg-primary">
    <?php 
    require_once 'assets/php/dbcon.php';
    $username = $password = "";
    $username_err = $password_err = "";
    
    
    ?>
    
<?php include "assets/components/nav.php";?>
    
      <div id="login_modal" class="modal fade" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <form class="">
            <div class="form-group">
              <label>USERNAME</label>
              <input type="email" class="form-control" placeholder="Enter email"> </div>
            <div class="form-group">
              <label>PASSWORD</label>
              <input type="password" class="form-control" placeholder="Password"> </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-primary py-5" style="margin-top:70px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Create a new Announcement</h3>
              <form action="runquery.php" method="post">
               <!-- <div class="form-group">
                  <label >Serial &nbsp;Number</label>
                  <input type="text" class="form-control"  required="required" name="announcement_index_number"> </div>-->
                <div class="form-group">
                  <label >Title</label>
                  <input type="text" class="form-control"  name="announcement_title"> </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Context</label>
                  <textarea class="form-control"  rows="3" name="announcement_context"></textarea>
                </div>
                <!--<div class="form-group">
                  <label >&nbsp;Date</label>
                  <input type="date" class="form-control"  name="announcement_date"> </div>-->
                <div class="form-group">
                  <label >Author</label>
                  <input type="text" class="form-control"  name="announcement_author"> </div>
                <button type="submit" class="btn mt-2 btn-outline-dark" name="create_announcement">Create Announcement</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Create a new Event</h3>
              <form  action="runquery.php" method="post">
                <!--<div class="form-group">
                  <label >Serial &nbsp;Number</label>
                  <input type="text" class="form-control"  required="required" name="event_index_number"> </div>-->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control"  name="event_title"> </div>
                <div class="form-group">
                  <label >Context</label>
                  <textarea class="form-control"  rows="3" name="event_context"></textarea>
                </div>
              <!--  <div class="form-group">
                  <label >&nbsp;Date</label>
                  <input type="date" class="form-control" name="event_date"> </div>-->
                <div class="form-group">
                  <label >Author</label>
                  <input type="text" class="form-control"  name="event_author"> </div>
                <button type="submit" class="btn mt-2 btn-outline-dark" name = "create_event">Create Event</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Create a new Activity</h3>
              <form action="runquery.php" method="post">
    
                <div class="form-group">
                  <label >Title</label>
                  <input type="text" class="form-control" name="activity_title"> </div>
                <div class="form-group">
                  <label >Context</label>
                  <textarea class="form-control"  rows="3" name="activity_context"></textarea>
                </div>
                <div class="form-group">
                  <label >Image Name</label>
                  <input type="text" class="form-control" name="image_name"> </div>
                <button type="submit" class="btn mt-2 btn-outline-dark" name="create_activity">Create Activity</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/js/parallax.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#login_modal').modal('show');
    });
</script>
</body>

</html>