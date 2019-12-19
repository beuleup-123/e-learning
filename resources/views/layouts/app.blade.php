<!DOCTYPE html>
<html lang="en">
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEdu</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navigation -->
<div class="menu">
    <nav class="navbar navbar-expand-xl navbar-toggler navbar-dark bg-info fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><h3 > HOM<small style="text-decoration: #00ff80">Edu</small></h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Accueil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('formation')}}" >Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html" src="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Header -->
<header class=" py-3 mb-3 bg-dark">
    <div class=" container h-100">
        <div class="row h-100 align-items-center">
            <div class="text col-lg-7">
                <h1 class="display-4  mt-5 mb-2 text-white">Cours en ligne</h1>
                <!--p class="lead mb-6 ">ce site vous offre des cours en developpement comme le JavaScript,html.</p-->
            </div>
            <div class="col-5">
                <img src="{{asset('images/IMG_2972.JPG')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</header>

<div class="container">
    @yield("content")
</div>
<!-- /.container -->


<footer class="bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; E-learning 2019</p>
    </div>
    <!-- /.container -->
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.text',
        width: 1110,
        height: 300,
        branding: false,
        resize: false,
        plugins: 'print preview fullpage paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        image_advtab: true,
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ],
        link_list: [
            { title: 'My page 1', value: 'http://www.tinymce.com' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'http://www.tinymce.com' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        height: 400,
        file_picker_callback: function (callback, value, meta) {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }
<<<<<<< HEAD

=======
>>>>>>> home
            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }
<<<<<<< HEAD

=======
>>>>>>> home
            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
       // height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_drawer: 'sliding',
        contextmenu: "link image imagetools table",
<<<<<<< HEAD

        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'postAcceptor.php');

            xhr.onload = function() {
                var json;

=======
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'postAcceptor.php');
            xhr.onload = function() {
                var json;
>>>>>>> home
                if (xhr.status < 200 || xhr.status >= 300) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
<<<<<<< HEAD

                json = JSON.parse(xhr.responseText);

=======
                json = JSON.parse(xhr.responseText);
>>>>>>> home
                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
<<<<<<< HEAD

                success(json.location);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), fileName(blobInfo));

=======
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), fileName(blobInfo));
>>>>>>> home
            xhr.send(formData);
        }
    });
</script>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> home
