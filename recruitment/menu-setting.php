<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<section class="page-content">
<div class="wrapper">
<div class="page-header">
<h1>Menu Setting</h1>
</div>
<div class="row">
<div class="col-sm-10 col-md-6">

<div class="row">
<div class="col-sm-6 col-md-4 form-group">
<label>Select Menu</label>
<select name="option1" id="option1"  class="form-control c-select">
<option>Header Menu</option>
<option>Footer Menu</option>
</select>
</div>
</div>

<div class="dd nestable" id="nestable">
<ol class="dd-list">
<!--- Initial Menu Items --->
<!--- Item1 --->
<li class="dd-item" data-id="1" data-name="Item 1" data-slug="item-slug-1" data-new="0" data-deleted="0">
<div class="dd-handle">Item 1</div>
<span class="button-delete btn btn-primary pull-right" data-owner-id="1"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
</li>
<!--- Item2 --->
<li class="dd-item" data-id="2" data-name="Item 2" data-slug="item-slug-2" data-new="0" data-deleted="0">
<div class="dd-handle">Item 2</div>
<span class="button-delete btn btn-primary pull-right" data-owner-id="2"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
</li>
<!--- Item3 --->
<li class="dd-item" data-id="3" data-name="Item 3" data-slug="item-slug-3" data-new="0" data-deleted="0">
<div class="dd-handle">Item 3</div>
<span class="button-delete btn btn-primary pull-right" data-owner-id="3"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
<!--- Item3 children --->
<ol class="dd-list">
<!--- Item4 --->
<li class="dd-item" data-id="4" data-name="Item 4" data-slug="item-slug-4" data-new="0" data-deleted="0">
<div class="dd-handle">Item 4</div>
<span class="button-delete btn btn-primary pull-right" data-owner-id="4"> <i class="fa fa-trash-o" aria-hidden="true"></i></span>
</li>
<!--- Item5 --->
<li class="dd-item" data-id="5" data-name="Item 5" data-slug="item-slug-5" data-new="0" data-deleted="0">
<div class="dd-handle">Item 5</div>
<span class="button-delete btn btn-primary pull-right" data-owner-id="5"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
</li>
</ol>
</li>
<!--------------------------->
</ol>
</div>
</div>
</div>

</div>
</section>

<?php include 'footer.php';?>
</body>
</html>