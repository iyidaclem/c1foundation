<div>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Wysiwig Editor - Ninja Admin Template</title>

        <!-- Main Styles -->
        <link rel="stylesheet" href="/dark/assets/styles/style.min.css">

        <!-- mCustomScrollbar -->
        <link rel="stylesheet" href="/dark/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

        <!-- Waves Effect -->
        <link rel="stylesheet" href="/dark/assets/plugin/waves/waves.min.css">

        <!-- Sweet Alert -->
        <link rel="stylesheet" href="/dark/assets/plugin/sweet-alert/sweetalert.css">

        <!-- TinyMCE -->
        <link rel="stylesheet" href="/dark/assets/plugin/tinymce/skins/lightgray/skin.min.css">
        <!-- Must include this script FIRST -->
        <script src="/dark/assets/plugin/tinymce/tinymce.min.js"></script>

        <!-- Dark Themes -->
        <link rel="stylesheet" href="/dark/assets/styles/style-dark.min.css">
    </head>

    <body>


        <!-- /#message-popup -->

        <h4 class="box-title">Create Post</h4>
        <!-- /.box-title -->

        <!-- /.dropdown js__dropdown -->
        <div>
            <form action="{{route('home.blogs.create')}}" method="post" enctype="multipart/form-data">

                @csrf
                @if(session('failure'))
                <div class="alert alert-danger">
                    {{ session('failure') }}
                </div>
                @elseif(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <label for="title">Title</label>
                <input name="title" value="{{ old('title') }}" type="text" style="width: 100%;" placeholder="Enter title">
                @error("title")
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <br><br>
                <div>
                    <textarea name="body" id="tinymce">
                    {{ old('body') }}
					</textarea>
                </div>
                @error("body")
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <br>

                <label for="pdf">Upload PDF</label>

                <input type="file" name="pdf" />
                <br><br>
                <input class="btn btn-primary" type="submit" value="Create Post">
            </form>
        </div>

        <!-- 
	================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/dark/assets/scripts/jquery.min.js"></script>
        <script src="/dark/assets/scripts/modernizr.min.js"></script>
        <script src="/dark/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
        <script src="/dark/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/dark/assets/plugin/nprogress/nprogress.js"></script>
        <script src="/dark/assets/plugin/sweet-alert/sweetalert.min.js"></script>
        <script src="/dark/assets/plugin/waves/waves.min.js"></script>
        <!-- Full Screen Plugin -->
        <script src="/dark/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

        <!-- TinyMCE -->
        <!-- Plugin Files DON'T INCLUDES THESES FILES IF YOU USE IN THE HOST -->
        <link rel="stylesheet" href="/dark/assets/plugin/tinymce/skins/lightgray/skin.min.css">
        <script src="/dark/assets/plugin/tinymce/plugins/advlist/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/anchor/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/autolink/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/autoresize/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/autosave/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/bbcode/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/charmap/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/code/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/codesample/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/colorpicker/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/contextmenu/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/directionality/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/emoticons/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/example/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/example_dependency/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/fullpage/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/fullscreen/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/hr/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/image/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/imagetools/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/importcss/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/insertdatetime/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/layer/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/legacyoutput/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/link/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/lists/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/media/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/nonbreaking/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/noneditable/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/pagebreak/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/paste/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/preview/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/print/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/save/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/searchreplace/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/spellchecker/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/tabfocus/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/table/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/template/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/textcolor/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/textpattern/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/visualblocks/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/visualchars/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/plugins/wordcount/plugin.min.js "></script>
        <script src="/dark/assets/plugin/tinymce/themes/modern/theme.min.js"></script>
        <!-- Plugin Files DON'T INCLUDES THESES FILES IF YOU USE IN THE HOST -->

        <script src="/dark/assets/scripts/tinymce.init.min.js"></script>

        <script src="/dark/assets/scripts/main.min.js"></script>
    </body>

    </html>
</div>