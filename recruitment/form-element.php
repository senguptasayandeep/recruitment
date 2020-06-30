<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<section class="page-content">
<div class="wrapper">
<div class="page-header">
<h1>Form Element</h1>
</div>

<div class="row">
<div class="col-lg-9">
<h3>Form with validation</h3>
<form method="post" action="" id="AdminForm" class="formular">
<div class="form-group"><label>Text input</label><input type="text" class="validate[required] text-input form-control" name="inout-1" id="inout-1" placeholder="Text Field"></div>
<div class="form-group"><label>Email Field</label><input type="text" class="form-control validate[required],custom[email]] text-input" name="email" id="email" placeholder="Email Field"></div>
<div class="form-group"><label>URL Field</label><input value="http://" class="validate[required,custom[url]] text-input form-control" type="text" name="url" id="url" placeholder="URL Field" /></div>
<div class="form-group"><label>Telephone Field</label><input value="" class="validate[required,custom[phone]] text-input form-control" type="text" name="telephone" id="telephone" placeholder="Telephone" /></div>
<div class="form-group"><label>Option Field</label>
<select name="option" id="option" class="validate[required] c-select form-control">
<option value="">Choose a Option</option>
<option value="option1">Option #1</option>
<option value="option2">Option #2</option>
<option value="option3">Option #3</option>
</select>
</div>
<div class="form-group">
<label>Multiple Selection</label>
<select name="option2" id="option2" multiple class="validate[required] form-control">
<option value="">Choose a Option</option>
<option value="option1">Option #1</option>
<option value="option2">Option #2</option>
<option value="option3">Option #3</option>
<option value="option1">Option #4</option>
<option value="option2">Option #5</option>
<option value="option3">Option #6</option>
<option value="option1">Option #7</option>
<option value="option2">Option #8</option>
<option value="option3">Option #9</option>
</select>
</div>


<div class="form-group"> 
<h3>Radio Types</h3>
<div><label><input type="radio" name="radios" class="radio"><span>Option one</span></label></div>
<div><label><input type="radio" checked="checked" name="radios" class="radio"> <span>Option two checked</span></label> </div>
<div><label><input type="radio" checked="checked" disabled="disabled" name="disabled-radios" class="radio"><span>Option three checked and disabled</span></label> </div>
<div><label><input type="radio" disabled="disabled" name="disabled-radios" class="radio"><span>Option four disabled</span></label> </div>
</div>

<div class="form-group"> 
<label class="control-label">Inline Radios</label>
<div>
<label><input type="radio" name="inline-radios" class="radio"><span>a</span></label> 
<label><input type="radio" name="inline-radios" class="radio"><span>b</span></label> 
<label><input type="radio" name="inline-radios" class="radio"><span>c</span></label>
</div>
</div>

<div class="form-group">
<h4>Radio Types Validation</h4>
<div><label><input class="validate[required] radio" type="radio" id="r1" name="rv1"><span>Option one</span></label></div>
<div><label><input class="validate[required] radio" type="radio" id="r2" name="rv1"><span>Option two</span></label></div>
</div>



<div class="form-group"> 
<h3>Checkboxes Type</h3>
<div> <label><input type="checkbox" class="checkbox"><span>Option one</span></label> </div>
<div> <label><input type="checkbox" checked="checked" class="checkbox"><span>Option two checked</span></label> </div>
<div> <label><input type="checkbox" checked="checked" disabled="disabled" class="checkbox"><span>Option three checked and disabled</span></label></div>
<div> <label><input type="checkbox" disabled="disabled" class="checkbox"><span>Option four disabled</span></label> </div></div>


<div class="form-group"> 
<label class="control-label">Inline Checkboxes</label>
<div> 
<label><input type="checkbox" class="checkbox"><span>a</span></label> 
<label><input type="checkbox" class="checkbox"><span>b</span></label> 
<label><input type="checkbox" class="checkbox"><span>c</span></label> 
</div>
</div>

<div class="form-group"> 
<h4>Checkboxes Validation</h4>
<div><label><input class="validate[required] checkbox" type="checkbox" id="agree" name="agree"/><span>Option one</span></label></div>
</div>

<input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</section>



<?php include 'footer.php';?>
</body>
</html>