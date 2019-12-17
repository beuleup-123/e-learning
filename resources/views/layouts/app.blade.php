<!DOCTYPE html>
<html lang="en">
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEduc</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navigation -->
<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">HOMEduc</a>
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
        //icons: 'material',
        forced_root_block : false,
        force_br_newlines : true,
        force_p_newlines : false,
        branding: false,
        elementpath: false,
        toolbar_drawer: 'sliding',

    file_picker_callback: function(callback, value, meta) {
            // Provide file and text for the link dialog
            if (meta.filetype == 'file') {
                callback('mypage.html', {text: 'My text'});
            }

            // Provide image and alt text for the image dialog
            if (meta.filetype == 'image') {
                callback('myimage.jpg', {alt: 'My alt text'});
            }

            // Provide alternative source and posted for the media dialog
            if (meta.filetype == 'media') {
                callback('movie.mp4', {source2: 'alt.ogg', poster: 'image.jpg'});
            }
        },
        resize: false,
        autosave_ask_before_unload: false,
       /** mentions_fetch: mentionsFetchFunction,
        powerpaste_allow_local_images: true,*/
        plugins: [
            "a11ychecker advcode advlist anchor autolink codesample fullscreen help image imagetools tinydrive",
            " lists link media noneditable powerpaste preview",
            " searchreplace table template tinymcespellchecker visualblocks wordcount mentions"
        ]
    });
    tinymce.activeEditor.execCommand('mceShowCharmap');
    tinymce.activeEditor.execCommand('mceSpellCheck');
</script>

</body>
</html>
