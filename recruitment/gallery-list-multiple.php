<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<section class="page-content">
<div class="wrapper">
<div class="page-header">
<h1>Gallery Name <a href="#" class="btn btn-default">Add New</a></h1>
</div>

<form method="post" action="#" id="AdminForm" class="formular">
<div class="row">
<div class="col-lg-9 col-md-8 col-sm-8">
<div class="form-group"><input type="text" class="validate[required] text-input form-control" name="post_title" id="post_title" placeholder="Enter Title Here"></div>
<div class="item-wrap gallery-list-table">
<table id="dataTable" class="table table-striped table-bordered display" cellspacing="0" width="100%">
<thead>
<tr>
<th>Media</th>
<th>Title</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr class="move">
<td><div class="thumbnail"><img src="images/thumb-1.jpg" alt=""></div></td>
<td>1080p-wallpaper-hd-1.jpg</td>
<td><button type="button" class="btn-link-td" data-toggle="modal" data-target="#ImgModal"><i class="fa fa-trash-o"></i>Edit</button> <button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button></td>
</tr>
<tr class="move">
<td><div class="thumbnail"><img src="images/thumb-2.jpg" alt=""></div></td>
<td>1080p-wallpaper-hd-2.jpg</td>
<td><button type="button" class="btn-link-td" data-toggle="modal" data-target="#ImgModal"><i class="fa fa-trash-o"></i>Edit</button> <button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button></td>
</tr>
<tr class="move">
<td><div class="thumbnail"><img src="images/thumb-3.jpg" alt=""></div></td>
<td>1080p-wallpaper-hd-3.jpg</td>
<td><button type="button" class="btn-link-td" data-toggle="modal" data-target="#ImgModal"><i class="fa fa-trash-o"></i>Edit</button> <button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button></td>
</tr>
</tbody>
</table>
</div>
</div>


<div class="col-lg-3 col-md-4 col-md-offset-0  col-sm-4 col-sm-offset-0">
<div class="right-box">
<h3>Add to Menu</h3>
<div class="content-box content-box-img">
<div><label><input type="checkbox" class="checkbox" checked="checked"><span>Add to Main Menu</span></label></div>
<div><label><input type="checkbox" class="checkbox"><span>Add to Footer Menu</span></label></div>
</div>
</div>

<div class="right-box">
<div class="content-box content-box-img">
<div class="row">
<div class=" col-sm-12 form-group">
<label>Choose Image Size</label>
<select class="c-select form-control">
<option>Large</option>
<option>Medium</option>
<option>Thumbnail</option>
</select>
</div>
<div class="col-sm-12">
<a data-target="#galleryModal" data-toggle="modal" class="btn btn-primary btn-block" href="#">Insert Gallery Image</a>
</div>
</div>
</div>
</div>
</div>
</div>

<input type="submit" class="btn btn-primary" value="Save Changes">
</form>
</div>
</section>


<?php include 'footer.php';?>
</body>
</html>