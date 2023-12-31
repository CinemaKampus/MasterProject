<?php 
session_start();
if(isset($_SESSION['nama']) && !$_SESSION['nama']){
  header('Location: login/?session=expired');
}
include('conf/config.php');
include('header.php');?>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

      
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp; 
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="index.php"><img class="img-fluid" alt="" width="100px" src="img/logo.png"></a>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i> 
                  </button>
               </div>
            </div>
         </form>
         <!-- Navbar -->
        <?php include('navbar/navbar.php');?>
      <div id="wrapper">
         <!-- Sidebar -->
         <?php include('menu/sidebar.php');?>
         <div id="content-wrapper">
           <?php
           if(isset($_GET['page'])){
            if($_GET['page']=='kategori' || $_GET['page']=='home'){
                  include('content.php');
               }
            else if($_GET['page']=='upload-video'){
               include('upload-video.php');
            }
            else if($_GET['page']=='history-video'){
               include('history-video.php');
            }
            else if($_GET['page']=='single-channel'){
               include('single-channel.php');
            }
            else if($_GET['page']=='channels'){
               include('channels.php');
            } 
            else if($_GET['page']=='categories'){
               include('categories.php');
            }
            else if($_GET['page']=='settings'){
               include('settings.php');
            }    
               else{
                  include('content.php');
                  //include('content.php');
               }
            } 
            else{
               include('content.php');
               //include('content.php');
            }?>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
           <?php include('footer.php');?>
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>

</html>