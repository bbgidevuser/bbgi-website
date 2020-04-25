<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ABOUT US</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				    
                    <form enctype="multipart/form-data" method="post">
                  	<!--<div class="project_detail">    -->  
				<input type="hidden" value="<?php echo $_GET['id']; ?>" name="id" />
				
					<div class="col-md-7 col-sm-12 col-xs-12">
                        <p class="title">Title</p>
                        <p><input type="text" readonly name="title" value="ABOUT US" class="form-control"></p>
                        </div>
						<div class="col-md-7 col-sm-12 col-xs-12">
                        <p class="title">New Image</p>
                        <p><input type="file" name="image" value="<?php echo $arr['image']?>" class="form-control">
						<input type="hidden" name="old_image" value="<?php echo $arr['image']?>" />
						</p>
                        </div>
						<div class="col-md-5 col-sm-12 col-xs-12">
                        <p class="title">Old Image</p>
						<img src="../images/<?php echo $arr['image'];?>" style="width:250px; height:150px">
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
                       <p class="title">Description</p>
                        <p><textarea class="form-control" name="description"><?php echo $arr['about'];?></textarea></p>
						</div>
						                       
                        <!--</div>-->
						<div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="mtop20">
                           <input type="submit" name="submit" value="Update" class="btn btn-sm btn-primary">
                          
                          </div>
</div>
					  </form>

                    </div> 

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
		<script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
		$(function(){
	             var editor = CKEDITOR.replace('description',
                 {
                    width: "100%",
                    height: "200px"
                 });
		});
    </script>

<script type="text/javascript">
//<![CDATA[

CKEDITOR.replace( 'description',
{
filebrowserBrowseUrl : 'js/ckeditor/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : 'js/ckeditor/ckfinder/ckfinder.html?type=Images',
filebrowserFlashBrowseUrl : 'js/ckeditor/ckfinder/ckfinder.html?type=Flash',
filebrowserUploadUrl : 'js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : 'js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : 'js/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
}
);

</script>
