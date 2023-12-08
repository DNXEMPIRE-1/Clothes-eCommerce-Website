  <?php
session_start();
include("./includes/db.php");


if(isset($_POST['btn_save']))
{
$cat_id=$_POST['cat_id'];
$cat_title=$_POST['cat_title'];


mysqli_query($con,"insert into categories ( cat_id,cat_title) values ('$cat_id','$cat_title')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($con);

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Category</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Category ID</label>
                        <input type="number" id="cat_id" required name="cat_id" class="form-control">
                      </div>
                 
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category Title</label>
                        <input type="text" id="cat_title" name="cat_title" required class="form-control">
                      </div>
                    
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Categories</h5>
              </div>
             
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Update Category</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>