    <?php

function announcement(){    
    include 'assets/php/dbcon.php';
    $an_title = $_POST['announcement_title'];
    $an_context = $_POST['announcement_context'];
    $an_author = $_POST['announcement_author'];
        
    $sql = "insert into latest_announements(title,context,author) values('$an_title','$an_context','$an_author')";
        mysqli_query($conn,$sql)  or die(mysqli_error($conn));

echo "<script>
             alert('announcement created succesfully'); 
             window.history.go(-1);
     </script>";
}

function event(){       
    include 'assets/php/dbcon.php';
    $e_title = $_POST['event_title'];
    $e_context = $_POST['event_context'];            
    $e_authot = $_POST['event_authot'];

     
        $sql = "insert into upcoming_events(title,context,author) values('$e_title','$e_context','$e_author')";
        mysqli_query($conn,$sql)  or die(mysqli_error($conn));

echo "<script>
             alert('event created succesfully'); 
             window.history.go(-1);
     </script>";
}

function activity(){  
    include 'assets/php/dbcon.php';
    $ac_title= $_POST['activity_title'];
    $ac_context = $_POST['activity_context'];
    $image_name = $_POST['image_name'];

     
        $sql = "insert into activities(title,context,image_name) values('$ac_title','$ac_context','$image_name')";
        mysqli_query($conn,$sql)  or die(mysqli_error($conn));

echo "<script>
             alert('activity created succesfully'); 
             window.history.go(-1);
     </script>";
}

if(isset($_POST['create_announcement'])){ 
announcement();
}
else if(isset($_POST['create_event'])){
event();
}
else {
    activity();
}
?>