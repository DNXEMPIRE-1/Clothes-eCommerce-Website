
    <?php
session_start();
include("./includes/db.php");
$cat_id=$_REQUEST['cat_id'];
$result=mysqli_query($con,"select cat_id,cat_title from categories where cat_id='$cat_id'")or die ("query 1 incorrect.......");

list($cat_id,$cat_title)=mysqli_fetch_array($result);
if(isset($_POST['btn_save'])) 
{

$cat_title=$_POST['cat_title'];


mysqli_query($con,"update categories set cat_title='$cat_title' where cat_id='$cat_id'")or die("Query 2 is inncorrect..........");

header("location: managecategory.php");
mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit Category</h5>
              </div>
              <form action="editcategory.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="cat_id" id="cat_id" value="<?php echo $cat_id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Category Name</label>

                        <input type="text" id="cat_title" name="cat_title"  class="form-control" value="<?php echo $cat_title ; ?>" >
                      </div>
                    </div>

              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
      <?php
include "footer.php";
?>