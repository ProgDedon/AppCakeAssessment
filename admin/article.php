<?php
session_start();
require'Database.php';
$database = new Database;
if(!$_SESSION['username']){
	header('Location: ../index.php');
	die();
}else{
    

?>	
<!DOCTYPE html>
<html lang="en">
  <?php include'head.php'; ?>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include'topnav.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include'nav.php'; ?>
    <main class="app-content">
      
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Write Article</h3>
            <form class="form" method="post" enctype="multipart/form-data">
            <h5><b>Article Title</b></h5>
            <input class="form-control" type="text" name="title" placeholder="Enter Article's Title"><br/>
            <h5><b>Article's Body</b></h5>
            <textarea rows="18" cols="33" name="body" class="form-control"></textarea><br/>
            <input class="form-control" type="text" name="author" placeholder="Authors Name"><br/>
            <h5><b>Upload Article's Image</b></h5>
            <input type="file" class="form-control" placeholder="Upload Picture" name="image" required="" id="email"><br/>
            <center><button class="btn btn-primary form-control" name="proceed" >Register</button></center>

            </form>

          </div>
<?php
// Create database connection
  $db = mysqli_connect("localhost", "root", "", "giyino");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['proceed'])) {

    $title = mysqli_real_escape_string($db, $_POST['title']);
    $body = mysqli_real_escape_string($db, $_POST['body']);
$author = mysqli_real_escape_string($db, $_POST['author']);
  	// Get image name
  	$image = $_FILES['image']['name'];
    $date = date("F d, Y h:i:s A");
  	// Get text

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO article (title,body,image,author,date) VALUES ('$title','$body','$image','$author','$date')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>
        </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
<?php
}
?>