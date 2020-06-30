<footer class="footer">&copy; Copyright and All Reserved by Site Title</footer>

<!--Image Info Modal -->
<div class="modal fade" id="ImgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Image</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group"><input type="text" class="form-control" placeholder="Image Title" /></div>
                    <div class="form-group"><input type="text" class="form-control" placeholder="Image Alt Title" /></div>
                    <div class="form-group"><textarea type="text" class="form-control" placeholder="Image Description"></textarea></div>
                    <div class="text-right"><input type="submit" class="btn btn-primary" value="Save Changes" /></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Image Info Modal -->

<!--Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span></button>
                <h4 class="modal-title" id="myModalLabel">Insert Media</h4>
            </div>
            <div class="modal-body">
                <h5 class="modal-subtitle">Media Library</h5>
                <div id="content-scroll" class="content">
                    <label>Multiple Selection With Checkbox</label>
                    <ul class="img-gallery-thumb">
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c1" name="cc1" /><label for="c1"><span></span><img src="{{ asset('images/thumb-1.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c2" name="cc2" /><label for="c2"><span></span><img src="{{ asset('images/thumb-2.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c3" name="cc3" /><label for="c3"><span></span><img src="{{ asset('images/thumb-3.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c4" name="cc4" /><label for="c4"><span></span><img src="{{ asset('images/thumb-4.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c5" name="cc5" /><label for="c5"><span></span><img src="{{ asset('images/thumb-5.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c6" name="cc6" /><label for="c6"><span></span><img src="{{ asset('images/thumb-6.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                    </ul>
                    <label>Single Selection With Radio</label>
                    <ul class="img-gallery-thumb">
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r4" name="rr1" /><label for="r4"><span></span><img src="{{ asset('images/thumb-1.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r5" name="rr1" /><label for="r5"><span></span><img src="{{ asset('images/thumb-2.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r6" name="rr1" /><label for="r6"><span></span><img src="{{ asset('images/thumb-3.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r7" name="rr1" /><label for="r7"><span></span><img src="{{ asset('images/thumb-4.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r8" name="rr1" /><label for="r8"><span></span><img src="{{ asset('images/thumb-5.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r9" name="rr1" /><label for="r9"><span></span><img src="{{ asset('images/thumb-6.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-2 col-md-offset-10 col-sm-3 col-sm-offset-9 col-xs-6 col-xs-offset-6">
                        <input type="button" class="btn btn-primary btn-block" value="Inset to Post" />
                    </div>
                </div>
            </div>
            <div class="modal-footer text-left">
                <h5 class="modal-subtitle">Upload Files</h5>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" method="post" enctype="">
                            <input type="file" name="files[]" id="filer_input" multiple="multiple" />
                            <div class="row">
                                <div class="col-md-2 col-md-offset-10 col-sm-3 col-sm-offset-9 col-xs-6 col-xs-offset-6">
                                    <input type="submit" class="btn btn-primary btn-block" value="Upload" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Gallery Modal -->

<!-- Bootstrap core JavaScript================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.filer.js') }}"></script>
<script src="{{ asset('js/jquery.validationEngine-en.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('js/jquery.validationEngine.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('js/hideShowPassword.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script language="javascript" src="{{ asset('js/jquery.pwdMeter.js') }}"></script>
<script src="{{ asset('js/clipboard.min.js') }}"></script>
<script src="{{ asset('js/trigger.js') }}"></script>
<script src="{{ asset('js/tooltips.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/fstdropdown.js') }}"></script>
<script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $("#password-1").hidePassword(true);
    $("#password-2").hidePassword(true);
    $("#password-3").showPassword("focus", {
        toggle: { className: "my-toggle" },
    });
    $("#show-password").change(function () {
        $("#password-4").hideShowPassword($(this).prop("checked"));
    });
    var clipboard = new Clipboard(".btn");
    clipboard.on("success", function (e) {
        console.log(e);
    });
    clipboard.on("error", function (e) {
        console.log(e);
    });
</script>

<script>
    setTimeout(function() {
        $('.message').fadeOut('fast');
    }, 3000);
</script>

    <script>
        // CKEDITOR.replace("editor",{
        //      filebrowserImageBrowseUrl : '/media/view'
        // });

        // CKEDITOR.replace("editor2x",{
        //       height: "700px",
        //      filebrowserImageBrowseUrl : '/media/view'
        // });

        if($(".editor").length){
            $('.editor').each( function() {
                    CKEDITOR.replace( $(this).attr('id'),{
                        filebrowserImageBrowseUrl : '/media/view',
                        allowedContent : true
                    });
            });
        }

        if($(".editor2x").length){
            $('.editor2x').each( function() {
                    CKEDITOR.replace( $(this).attr('id'),{
                        height: "700px",
                        filebrowserImageBrowseUrl : '/media/view',
                        allowedContent : true,
                    });
            });
        }

        if($(".editor1x").length){
            $('.editor2x').each( function() {
                    CKEDITOR.replace( $(this).attr('id'),{
                        height: "400px",
                        filebrowserImageBrowseUrl : '/media/view',
                        allowedContent : true,
                    });
            });
        }

        window.opener.CKEDITOR.tools.callFunction(1,"https://www.busfam.com/public/frontFiles/media/703loginpage.png");

        function SLUG(Text,ID){

            document.querySelector(ID).value = Text.trim()
                                            .toLowerCase()
                                            .replace(/[^\w ]+/g,'')
                                            .replace(/ +/g,'-');

        }

    </script>
