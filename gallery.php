<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <meta charset="UTF-8">
  <!-- For IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- For Resposive Device -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>GB PANT GOVERNMENT ENGINEERING COLLEGE</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="http://www.gbpec.edu.in/assets/images/logo_new.png">


  <!-- Main style sheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- responsive style sheet -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
        <script src='js/jquery-3.0.0.js' type='text/javascript'></script> 
        <script type="text/javascript" src="js/simple-lightbox.js"></script>
       <link rel="stylesheet" type="text/css" href="css/gallery.css"> 

  <!-- Fix Internet Explorer ______________________________________-->

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="vendor/html5shiv.js"></script>
    <script src="vendor/respond.js"></script>
  <![endif]-->
    
</head>
<style>
  @media (max-width: 650px){
    .logo{
      width:60px;
      height:50px;
    }
  
  };
  @media (max-width: 650px){
    .placement{
    position: absolute;
    left:auto;
    transform: scale(0.8);
  }
  }
  </style>

<body>








  <header class="theme-main-header">
    <div class="container">
      <a href="index.html" class="logo float-left tran4s"><img src="http://www.gbpec.edu.in/assets/images/logo_new.png" alt="Logo"></a>
      
      <!-- ========================= Theme Feature Page Menu ======================= -->
      <nav class="navbar float-right theme-main-menu">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             Menu
             <i class="fa fa-bars" aria-hidden="true"></i>
           </button>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-collapse-1">
           <ul class="nav navbar-nav">
               <li class="active"><a href="#">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="notice.html">NOTICES</a></li>
      <!--		<li><a href="index.html#project-section">SOCI</a></li>-->
          <li><a href="agenda/index.html">EVENTS</a>
          <ul class="sub-menu">
              <li><a href="events.html" class="tran3s">old</a></li>
          </ul>
          </li>
          <li><a href="projects.html">PROJECTS</a></li>
          <li class="dropdown-holder"><a href="#">STUDENTS CORNER</a>
            <ul class="sub-menu">
              <li><a href="campus.html" class="tran3s">Campus</a></li>
              <li><a href="gallery.html" class="tran3s">Activities</a></li>
              <li><a href="socities.html" class="tran3s">Socities</a></li>
            </ul>
          
          
          
          </li>
          <li><a href="placements.html">PLACEMENTS</a></li>
          <li class="dropdown-holder"><a href="academics.html">ACADEMICS</a>
            <ul class="sub-menu">
                <li><a href="CSEteachers.html" class="tran3s">CSE Faculty</a></li>
                <li><a href="#" class="tran3s">ECE Faculty</a></li>
                <li><a href="#" class="tran3s">MAE Faculty</a></li>
              </ul>
            </li>
          
          <li><a href="contact.html">CONTACT</a></li>
           </ul>
         </div><!-- /.navbar-collapse -->
      </nav> <!-- /.theme-feature-menu -->
    </div>
  </header> <!-- /.theme-main-header -->


  <!--
  =====================================================
    Theme Inner page Banner
  =====================================================
  -->
  <section class="inner-page-banner">
    <div class="opacity">
      <div class="container">
        <h2>G B PANT ENGINEERING COLLEGE</h2>
        <ul>
          <li><a href="index.html">ABOUT US</a></li>
          <li>:affiliated by IPU</li>
        </ul>
      </div> <!-- /.container -->
    </div> <!-- /.opacity -->
  </section> <!-- /.inner-page-banner -->























    <style>
        @media (max-width: 650px){
          .logo{
            width:60px;
            height:50px;
          }
        }
        
          </style>




























<div class='gallerycontainer'>
            <div class="gallery">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","jpeg","gif");

            // Target directory
            $dir = 'images/galleryimages/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    // Read files
                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            // Thumbnail image path
                            $thumbnail_path = "images/galleryimages/".$file;

                            // Image path
                            $image_path = "images/galleryimages/".$file;
                            
                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                <a href="<?php echo $image_path; ?>">
                                    <img src="<?php echo $thumbnail_path; ?>" alt="" title=""/>
                                </a>
                                <!-- --- -->
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>


        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){

            // Intialize gallery
            var gallery = $('.gallery a').simpleLightbox();
        });
        </script>







<style type="text/css">
.gallerycontainer .gallery a  {

  display: block !important;
}
</style>















<!-- Footer -->
<footer class="bg1">
	<div class="container p-t-40 p-b-70">
		<div class="row">
			<div class="col-sm-6 col-md-4 p-t-50">
				<!-- - -->
				<h4 class="txt13 m-b-33">
					Contact Us
				</h4>

				<ul class="m-b-70">
					<li class="txt14 m-b-14">
						<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
						G B Pant Government Engineering College 110020 - New Delhi
					</li>

					<li class="txt14 m-b-14">
						<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
						+91-11-26382314 
					</li>
<br>
					<li class="txt14 m-b-14">
						<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
						principal@gbpec.edu.in
					</li>
				</ul>

				<!-- - -->
				<h4 class="txt13 m-b-32">
					Opening Times
				</h4>

				<ul>
					<li class="txt14">
						09:30 AM – 5:00 PM
					</li>

					<li class="txt14">
					Working Days
					</li>
				</ul>
			</div>

			<div class="col-sm-6 col-md-4 p-t-50">
				<!-- - -->
				<h4 class="txt13 m-b-33">
					Useful Links
				</h4>

				<div class="m-b-25">
			<!--		<span class="fs-13 color2 m-r-5">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</span>-->
					<a href="#" class="txt15">
						Anti Ragging Notification-UGC 
					</a>
					<a href="#" class="txt15">
						Online Anti Ragging Affidavit 
					</a>
					<a href="#" class="txt15">
						Online Anti Ragging Complain 
					</a>
					<a href="#" class="txt15">
						UGC Scholarships and Fellowships 
					</a><br>
					<a href="#" class="txt15">
						Educational Loan 
					</a>
					<a href="#" class="txt15">
						Guru Gobind Singh Indraprastha University 
	
				</div>
			</div>
		





















			<div class="col-sm-6 col-md-4 p-t-50">
				<!-- - -->
				<h4 class="txt13 m-b-38">
					Gallery
				</h4>

				<!-- Gallery footer -->
				<div class="wrap-gallery-footer flex-w">
					
					
					

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/5.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/4.jpg" alt="GALLERY">
					</a>
					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/5.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/4.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/5.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/4.jpg" alt="GALLERY">
					</a>


					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/5.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/4.jpg" alt="GALLERY">
					</a>


					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/5.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/4.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/5.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/4.jpg" alt="GALLERY">
					</a>

					<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
						<img src="images/blog/5.jpg" alt="GALLERY">
					</a>



















				</div>

			</div>
		</div>
	</div>


		







	<div class="end-footer bg2">
		<div class="container">
			<div class="flex-sb-m flex-w p-t-22 p-b-22">
			<!--	<div class="p-t-5 p-b-5">
					<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
					<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
					<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
				</div>

				<div class="txt17 p-r-20 p-t-5 p-b-5">
					Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				</div>-->
			</div>
		</div>
	</div>
</footer>



































			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>

			

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

	

		<!-- Bootstrap JS 
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
-->
		<!-- Vendor js _________ -->
		
		


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script> 

	<!--	<script type="text/javascript" src="js/map-script.js"></script>  -->














</body>
</html>
