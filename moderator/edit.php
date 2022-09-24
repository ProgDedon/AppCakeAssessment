<?php
session_start();
require'../includes/connect.php';

$id = $_GET['id'];
if(!$_SESSION['username']){
	header('Location: ../index.php');
	die();
}else{
    


    $sql = "SELECT * FROM article WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    

?>	
<?php

//Update Record
if (isset($_POST['proceed'])) {

  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $body = mysqli_real_escape_string($conn,$_POST['body']);
  $author = mysqli_real_escape_string($conn,$_POST['author']);


    $sql = "UPDATE article SET title = '$title',body='$body',author='$author')";
    // execute query
    $result = $conn->query($sql);
  header('location:view.php');


}
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
            <h3 class="tile-title">Edit Article</h3>
            <form class="form" method="post">
            <h5><b>Article Title</b></h5>
            <input class="form-control" type="text" value="<?php echo $row['title']; ?>" name="title" placeholder="Enter Article's Title"><br/>
            <h5><b>Article's Body</b></h5>
            <textarea rows="18" cols="33" name="body" value="" class="form-control"><?php echo $row['body']; ?></textarea><br/>
            <input class="form-control" type="text" value="<?php echo $row['author']; ?>" name="author" placeholder="Authors Name"><br/>
        
            <center><button type="submit" class="btn btn-primary form-control" name="proceed" >Update</button></center>

            </form>

          </div>

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