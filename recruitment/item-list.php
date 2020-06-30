<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<section class="page-content">
<div class="wrapper">
<div class="page-header">
<h1>List Item <a href="item-editor.php" class="btn btn-default">Add New</a></h1>
</div>

<div class="item-wrap item-list-table">
<table id="dataTable" class="table table-striped table-bordered postTable" cellspacing="0" width="100%">
<thead>
<tr>
<th>Title</th>
<th>Category</th>
<th>Published Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="item-editor.php">Hello World</a></td>
<td>Uncategorized</td>
<td>05/08/2016</td>
<td>
<button type="button" class="btn-link-td"><i class="fa fa-edit"></i>Edit</button>
<button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button>
</td>
</tr>
<tr>
<td><a href="item-editor.php">Omnes eligendi eum no</a></td>
<td>News, Sports</td>
<td>04/08/2016</td>
<td>
<button type="button" class="btn-link-td"><i class="fa fa-edit"></i>Edit</button>
<button type="button" class="btn-link-td"><i class="fa fa-trash-o"></i>Delete</button>
</td>
</tr>
<tr>
<td><a href="item-editor.php">Denique expetenda vix id</a></td>
<td>Cinema, City, Country</td>
<td>03/08/2016</td>
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