<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
<?php 
include("conf/config.php");

?>
  <div id="wrapper">
         <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="video-block section-padding">
                  <div class="row">
                    
                     <div class="col-md-12">
                     <div class="main-title">
                           <!-- <div class="btn-group float-right right-action">
                              <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                              </div>
                           </div> --> 
                           <h4>Categories</h4>
                        </div>  <a class="btn btn-sm btn-info text-white">Add Categories</a>
                        <br><br>
                    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Categories</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Ctegories</th>
                                <th>Action</th>
                                
                            </tr>
                        </tfoot> -->
                        <tbody>
                            <?php 
                            $no = 0;
                            $query = mysqli_query($koneksi,"SELECT * from category_name");
                            while($view = mysqli_fetch_array($query)){
                                $no++ ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $view['name'];?></td>
                                <td><a class="btn btn-sm btn-info" href="#">Edit</a> <a class="btn btn-sm btn-danger" href="#">Delete</a></td>
                                
                            </tr>
                           
                        <?php } ?>    
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  
  <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>