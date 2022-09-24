<?php
session_start();
require'Database.php';
$database = new Database;
if(!$_SESSION['username']){
	header('Location: ../index.php');
	die();
}else{
$database->query('SELECT * FROM `user`');
$rows = $database->resultset();
    

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
            <h3 class="tile-title">Users Details</h3>
            <div class="table-responsive">
                <?php $total = 0; ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>Data ID</th>
                    <th>Email Address</th>
                    <th>Password</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($rows as $row) : ?>
                  <tr>                   
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                  </tr>
                  
                    
                 <?php endforeach; ?> 
                </tbody>
                  
              </table>
            </div>
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