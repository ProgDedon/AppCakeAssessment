<!doctype html>
<html lang="en">
<?php
session_start();
require'includes/Database.php';
$database = new Database;

$id = intval($_GET['id']);

$database->query("SELECT * FROM article WHERE id = '$id' ORDER BY date DESC");
$rows = $database->resultset();
    

?>

  
<?php require_once('includes/header.php'); ?>
<body>

  <!-- Page loader Start -->
  <div id="pageloader">   
    <div class="loader-item">
      <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div>
    </div>
  </div>
  <!-- Page loader End -->

  <?php include_once('includes/nav.php'); ?>

  <!-- Page Breadcrumbs Start -->
  <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="icofont-home"></i></a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Latest News</li>
        </ol>
      </nav>  

      <h1>News Portal</h1>
      <div class="breadcrumbs-description">
      </div>
    </div>
  </div>
  <!-- Page Breadcrumbs End -->

  <!-- Main Body Content Start -->
  <main id="body-content">

    <!-- What We Offer Start -->
    <section class="wide-tb-80">
      <div class="container pos-rel">
        <div class="row align-items-start">

<?php $total = 0; ?>



             
             
                 <?php foreach($rows as $row) : ?>

          <div class="col-md-12 col-lg-8">            
            <div class="row">
              <!-- Blog Items -->
              <div class="col-md-12">
                  <div class="text-left">
                    <img src="../admin/images/<?php echo $row['image']; ?>" alt="" class="rounded mb-4">
                    <h4 class="h4-md mb-3 fw-7 txt-blue"><?php echo $row['title']; ?></h4>
                    <p style="text-align:justify;"><?php echo $row['body']; ?></p>
                    <h4 class="h4-xs txt-blue">By &nbsp;<?php echo $row['author']; ?></h4>

                  </div>
<?php endforeach; ?> <br/><br/>


                  <!-- Spacer For Medium -->
                  <div class="w-100 d-none d-sm-block spacer-70"></div>
                  <!-- Spacer For Medium -->


      
              </div>
              <!-- Blog Items -->

              
            </div>

          </div>


          <div class="col-md-12 col-lg-4">        
            <!-- Add Some Left Space -->    
            <aside class="sidebar-spacer row">

              <!-- Sidebar Primary Start -->
              <div class="sidebar-primary col-lg-12 col-md-6">
                <!-- Search Widget Start -->
                <div class="widget-wrap">
                  <h3 class="h3-md fw-7 mb-4">Search</h3>
                  <form class="flex-nowrap col ml-auto footer-subscribe p-0">
                    <input type="text" class="form-control" placeholder="Search …">
                    <button type="submit" class="btn btn-theme bg-orange"><i class="icofont-search p-0"></i></button>
                  </form>
                </div>
                <!-- Search Widget End -->
                <!-- Recent Post Widget End -->

                <!-- Sidebar Support Widget Start -->
                <div class="widget-wrap text-center bg-light-theme rounded py-5">
                  <div class="mb-2"><i class="icofont-headphone-alt icofont-4x"></i></div>
                  <h3 class="h3-md fw-5 txt-orange mb-4">Need help?</h3>
                  <p>Call our award-winning<br> support team 24/7</p>
                  <a href="#" class="btn-theme bg-orange mt-3">Get In Touch <i class="icofont-rounded-right"></i></a>
                </div>
                <!-- Sidebar Support Widget End -->                
              </div>
              <!-- Sidebar Primary End -->

                 <div class="sidebar-secondary col-lg-12 col-md-6">
                <!-- Recent Post Widget Start -->
                <div class="widget-wrap">
                  <h3 class="h3-md fw-7 mb-4">Recent Posts</h3>
                  <div class="blog-list-footer">
                    <ul class="list-unstyled">
                      <li>
                        <div class="media">
                          <div class="post-thumb">
                             <img src="../admin/images/<?php echo $row['image']; ?>" alt="" class="rounded-circle">
                          </div>
                          <div class="media-body post-text">
                              <h5 class="mb-3 h5-md"><a href="#"><?php echo $row['title']; ?></a></h5>
                              <p><?php echo substr($row['body'], 0, 100); ?>...</p>
                          </div>
                        </div>
                      </li>
                      <li>
                      </li>
                    </ul>
                   
                  </div>
                </div>

                
          
              </div>
              <!-- Sidebar Secondary Start -->             

            </aside>
            <!-- Add Some Left Space -->    
          </div>

        </div>
        
      </div>
    </section>
    <!-- What We Offer End -->    
  </main>    



<!-- Main Footer Start -->
  <?php include_once('includes/footer.php'); ?>
  <!-- Main Footer End -->

 
  </body>

</html>