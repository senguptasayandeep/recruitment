<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<section class="page-content">
<div class="wrapper">
<div class="page-header">
<h1>Media <a href="media-upload.php" class="btn btn-default">Add New</a></h1>
</div>

<div class="item-wrap media-table">
<table id="dataTable" class="table table-striped table-bordered display" cellspacing="0" width="100%">
<thead>
<tr>
<th>Media</th>
<th>Title</th>
<th>Media URL</th>
<th>Copy</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr class="move">
<td><div class="thumbnail"><img src="images/thumb-1.jpg" alt=""></div></td>
<td>1080p-wallpaper-hd-1.jpg</td>
<td><div id="copy_1"><a href="#">http://abcdxyz.com/images/image-name1.jpg</a></div></td>
<td><button class="btn btn-xs btn-primary btn-tip" data-clipboard-demo data-clipboard-action="copy"  data-clipboard-target="div#copy_1"><i class="fa fa-clone" aria-hidden="true"></i>Copy to use</button></td>
<td><button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button></td>
</tr>
<tr class="move">
<td><div class="thumbnail"><img src="images/thumb-2.jpg" alt=""></div></td>
<td>1080p-wallpaper-hd-2.jpg</td>
<td><div id="copy_2"><a href="#">http://abcdxyz.com/images/image-name2.jpg</a></div></td>
<td><button class="btn btn-xs btn-primary btn-tip" data-clipboard-demo data-clipboard-action="copy"  data-clipboard-target="div#copy_2"><i class="fa fa-clone" aria-hidden="true"></i>Copy to use</button></td>
<td><button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button></td>
</tr>
<tr class="move">
<td><div class="thumbnail"><img src="images/thumb-3.jpg" alt=""></div></td>
<td>1080p-wallpaper-hd-3.jpg</td>
<td><div id="copy_3"><a href="#">http://abcdxyz.com/images/image-name3.jpg</a></div></td>
<td><button class="btn btn-xs btn-primary btn-tip" data-clipboard-demo data-clipboard-action="copy"  data-clipboard-target="div#copy_3"><i class="fa fa-clone" aria-hidden="true"></i>Copy to use</button></td>
<td><button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button></td>
</tr>
</tbody>
</table>
</div>
</div>
</section>


<?php include 'footer.php';?>
</body>
</html>