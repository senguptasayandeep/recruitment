<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<section class="page-content">
<div class="wrapper">
<div class="page-header">
<h1>List Item <a href="item-editor.php" class="btn btn-default">Add New</a></h1>
</div>

<div class="item-wrap page-table">
<table id="dataTable" class="table table-striped table-bordered page-table" cellspacing="0" width="100%">
<thead>
<tr>
<th>Title</th>
<th>Published Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td data-th="Title"><a href="item-editor.php">Home</a></td>
<td>05/08/2016</td>
<td>
<button type="button" class="btn-link-td"><i class="fa fa-edit"></i>Edit</button>
<button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button>
</td>
</tr>
<tr>
<td data-th="Title"><a href="item-editor.php">About</a></td>
<td>05/08/2016</td>
<td>
<button type="button" class="btn-link-td"><i class="fa fa-edit"></i>Edit</button>
<button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button>
</td>
</tr>
<tr>
<td data-th="Title"><a href="item-editor.php">Services</a></td>
<td>05/08/2016</td>
<td>
<button type="button" class="btn-link-td"><i class="fa fa-edit"></i>Edit</button>
<button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button>
</td>
</tr>
<tr>
<td data-th="Title"><a href="item-editor.php">Gallery</a></td>
<td>05/08/2016</td>
<td>
<button type="button" class="btn-link-td"><i class="fa fa-edit"></i>Edit</button>
<button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button>
</td>
</tr>
<tr>
<td data-th="Title"><a href="item-editor.php">Contact</a></td>
<td>05/08/2016</td>
<td>
<button type="button" class="btn-link-td"><i class="fa fa-edit"></i>Edit</button>
<button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>


<?php include 'footer.php';?>
</body>
</html>