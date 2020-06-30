// JavaScript Document
$(document).ready(function() {
$('.sidebar-menu > ul > li:has(ul)').addClass("has-sub");
$('.sidebar-menu > ul > li > a').click(function() {
var checkElement = $(this).next();
$('.sidebar-menu li').removeClass('active');
$(this).closest('li').addClass('active');
if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
$(this).closest('li').removeClass('active');
checkElement.slideUp('normal');
}
if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
$('.sidebar-menu ul ul:visible').slideUp('normal');
checkElement.slideDown('normal');
}
if (checkElement.is('ul')) {
return false;
} else {
return true;
}
});

$('#password-3').pwdMeter({
minLength: 6,
displayGeneratePassword: true,
generatePassText: 'Password Generator',
generatePassClass: 'GeneratePasswordLink',
RandomPassLength: 13
});
});

$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper, #page-sidebar").toggleClass("active");
});

$("#menu-toggle").click(function(e) {
e.preventDefault();
$("body").toggleClass("noscroll");
});

$("#menu-toggle").click(function(){
$("#menu-toggle").toggleClass("active");
});

jQuery(document).ready(function(){
// binds form submission and fields to the validation engine
jQuery("#AdminForm").validationEngine('attach', {promptPosition : "bottomLeft", autoPositionUpdate : true});
});

$(document).ready( function () {
$('#dataTable')
.addClass('nowrap')
.dataTable( {
responsive: true,
});
});

$(document).ready(function() {
var fixHelperModified = function(e, tr) {
var $originals = tr.children();
var $helper = tr.clone();
$helper.children().each(function(index)
{
$(this).width($originals.eq(index).width())
});
return $helper;
};

$("#dataTable tbody").sortable({
helper: fixHelperModified,
stop: function(event,ui) {renumber_table('#dataTable')}
}).disableSelection();

$('table').on('click','.btn-delete',function() {
tableID = '#' + $(this).closest('table').attr('id');
r = confirm('Delete this item?');
if(r) {
$(this).closest('tr').remove();
renumber_table(tableID);
}
});
});

function renumber_table(tableID) {
$(tableID + " tr").each(function() {
count = $(this).parent().children().index($(this)) + 1;
$(this).find('.priority').html(count);
});
}


$(document).ready(function() {
//Example 1
$('#filer_input').filer({
showThumbs: true
});
//Example 2
$("#filer_input2").filer({
limit: null,
maxSize: null,
extensions: null,
changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
showThumbs: true,
theme: "dragdropbox",
templates: {
box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
item: '<li class="jFiler-item">\
<div class="jFiler-item-container">\
<div class="jFiler-item-inner">\
<div class="jFiler-item-thumb">\
<div class="jFiler-item-status"></div>\
<div class="jFiler-item-info">\
<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
<span class="jFiler-item-others">{{fi-size2}}</span>\
</div>\
{{fi-image}}\
</div>\
<div class="jFiler-item-assets jFiler-row">\
<ul class="list-inline pull-left">\
<li>{{fi-progressBar}}</li>\
</ul>\
<ul class="list-inline pull-right">\
<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
</ul>\
</div>\
</div>\
</div>\
</li>',
itemAppend: '<li class="jFiler-item">\
<div class="jFiler-item-container">\
<div class="jFiler-item-inner">\
<div class="jFiler-item-thumb">\
<div class="jFiler-item-status"></div>\
<div class="jFiler-item-info">\
<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
<span class="jFiler-item-others">{{fi-size2}}</span>\
</div>\
{{fi-image}}\
</div>\
<div class="jFiler-item-assets jFiler-row">\
<ul class="list-inline pull-left">\
<li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
</ul>\
<ul class="list-inline pull-right">\
<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
</ul>\
</div>\
</div>\
</div>\
</li>',
progressBar: '<div class="bar"></div>',
itemAppendToEnd: false,
removeConfirmation: true,
_selectors: {
list: '.jFiler-items-list',
item: '.jFiler-item',
progressBar: '.bar',
remove: '.jFiler-item-trash-action'
}
},
dragDrop: {
dragEnter: null,
dragLeave: null,
drop: null,
},
uploadFile: {
//url: "./php/upload.php",
data: null,
type: 'POST',
enctype: 'multipart/form-data',
beforeSend: function(){},
success: function(data, el){
var parent = el.find(".jFiler-jProgressBar").parent();
el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
$("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
});
},
error: function(el){
var parent = el.find(".jFiler-jProgressBar").parent();
el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
$("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
});
},
statusCode: null,
onProgress: null,
onComplete: null
},
files: null,
addMore: false,
clipBoardPaste: true,
excludeName: null,
beforeRender: null,
afterRender: null,
beforeShow: null,
beforeSelect: null,
onSelect: null,
afterShow: null,
onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
var file = file.name;
//$.post('./php/remove_file.php', {file: file});
},
onEmpty: null,
options: null,
captions: {
button: "Choose Files",
feedback: "Choose files To Upload",
feedback2: "files were chosen",
drop: "Drop file here to Upload",
removeConfirmation: "Are you sure you want to remove this file?",
errors: {
filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
filesType: "Only Images are allowed to be uploaded.",
filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
}
}
});
});

(function($){
$(window).on("load",function(){
$("#content-scroll").mCustomScrollbar({
scrollButtons:{enable:true},
theme:"3d-thick"
});
});
})(jQuery);


$(function(){$(".images-container").sortable({animation:150,handle:".control-btn.move",draggable:".image-container",onMove:function(t){var n=$(t.related);return n.hasClass("add-image")?!1:void 0}}),$controlsButtons=$(".controls"),$controlsButtonsStar=$controlsButtons.find(".star"),$controlsButtonsRemove=$controlsButtons.find(".remove"),$controlsButtonsStar.on("click",function(t){t.preventDefault(),$controlsButtonsStar.removeClass("active"),$controlsButtonsStar.parents(".image-container").removeClass("main"),$(this).addClass("active"),$(this).parents(".image-container").addClass("main")})});

$(function(){
$({ someValue: 0 }).animate({ someValue: Math.floor(Math.random() * 3000) }, {
duration: 3000,
easing: 'swing', // can be anything
step: function () { // called on every step
// Update the element's text with rounded-up value:
$('.count').text(commaSeparateNumber(Math.round(this.someValue)));
}
});
function commaSeparateNumber(val) {
while (/(\d+)(\d{3})/.test(val.toString())) {
val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
}
return val;
}
});


document.getElementById("uploadBtn").onchange = function () {
document.getElementById("uploadFile").value = this.value;
};