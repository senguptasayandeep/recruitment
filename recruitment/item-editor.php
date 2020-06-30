<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<section class="page-content">
<div class="wrapper">
<div class="page-header">
<h1>Item Name</h1>
</div>

<div class="item-wrap item-details">
<form method="post" action="#" id="AdminForm" class="formular">
<div class="row">
<div class="col-lg-9 col-md-8 col-sm-8">
<div class="form-group"><input type="text"  class="validate[required] text-input form-control" name="post_title" id="post_title" placeholder="Enter Title Here"></div>
<div class="form-group"><textarea type="text" class="form-control" rows="10" placeholder="Tinymce will go here"></textarea></div>
<div class="form-group">
<select class="c-select form-control">
<option selected="">Select Category</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>

<!--<div class="form-group">
<label>Media Gallery</label>
<div><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#galleryModal">Image Gallery</a></div>
</div>-->
</div>

<div class="col-lg-3 col-md-4 col-md-offset-0  col-sm-4 col-sm-offset-0">

<div class="right-box">
<h3>Add to Menu</h3>
<div class="content-box content-box-img">
<div><label><input type="checkbox" checked="checked" class="checkbox"><span>Add to Main Menu</span></label></div>
<div><label><input type="checkbox" class="checkbox"><span>Add to Footer Menu</span></label></div>
</div>
</div>

<div class="right-box">
<h3>Featured Image</h3>
<div class="content-box content-box-img">
<div class="row">
<div class="col-sm-12 form-group">
<div class="featured-img form-group">
<img src="images/thumb-1.jpg" class="full-img" alt="">
</div>
<div class="text-right"><button type="button" class="btn btn-danger btn-sm">Remove Image</button></div>
</div>
<div class=" col-sm-12 form-group">
<label>Choose Image Size</label>
<select class="c-select form-control">
<option>Large</option>
<option>Medium</option>
<option>Thumbnail</option>
</select>
</div>
<div class="col-sm-12">
<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#galleryModal">Insert Post Image</a>
</div>
</div>
</div>
</div>
</div>
</div>
<input type="submit" class="btn btn-primary" value="Publish Item">
</form>
</div>
</div>
</section>


<?php include 'footer.php';?>
</body>
</html>