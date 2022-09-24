<!doctype html>
<html lang="en">
<?php
session_start();
require'includes/connect.php';



?>

<?php  
    $limit = 10;  //set  Number of entries to show in a page.
    // Look for a GET variable page if not found default is 1.        
    if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
    }    
    else { $page=1;    
    } 
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_index = ($page-1) * $limit;      // 0

    $All_article = mysqli_query($conn,"select * from article limit $page_index, $limit");
  
       
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

      <h1>NEWS PORTAL</h1>
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
          <div class="col-md-12 col-lg-8">            
            <div class="row align-items-center blog-standard">


             
    <?php while($row=mysqli_fetch_array($All_article)){ ?>
 
    
              

              <!-- Blog Items -->
              <div class="col-md-6">
                  <img src="admin/images/<?php echo $row['image']; ?>" alt="" class="rounded">
              </div>
              <div class="col-md-6">
                  <div class="blog-warp text-md-left">
                    <h4 class="h4-md mb-3"><a href="news.php?id=<?php echo $row['id'].$row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                    <p><?php echo substr($row['body'], 0, 200); ?>...</p>
                    <div>
                      
                    <a href="news.php?id=<?php echo $row['id']; ?>" class="btn-theme bg-navy-blue">Read More <i class="icofont-rounded-right"></i></a>
                    </div>
                  </div>
              </div>
              <!-- Blog Items -->
                     
                <?php } ?> <br/><br/>
                
            </div>
<?php
    $all_data=mysqli_query($conn,"select count(*) from article");
    $user_count = mysqli_fetch_row($all_data);   // say total count 9  
    $total_records = $user_count[0];   //9
    $total_pages = ceil($total_records / $limit);    // 9/3=  3
    if($page >= 2){
        echo "<a href='index.php?page=".($page-1)."' class='btn 
     customBtn2'>Previous</a>";
      }
    
    if($page<$total_pages) {
        echo "<a href='index.php?page=".($page+1)."' class='btn customBtn2'>NEXT</a>";   
    } 
?>
                    
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

              <!-- Sidebar Secondary Start -->
              <div class="sidebar-secondary col-lg-12 col-md-6">
                <!-- Recent Post Widget Start -->
                <div class="widget-wrap">
                  <h3 class="h3-md fw-7 mb-4">Top Texts of the Week</h3>
                  <div class="blog-list-categories">
                    <ul class="list-unstyled">
                      <li><a href="#">Everyone uses a smartphone to their detriment. Do the opposite: 9 best productivity apps</a></li>
                      <li><a href="#">Microsoft is tired of two programming languages: the company's top manager urged everyone to abandon them</a></li>
                    </ul>                  
                  </div>
                </div>
                <!-- Recent Post Widget End -->



              
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

<?php require('includes/footer.php'); ?>
  </body>

</html>