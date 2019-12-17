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

        resize: false,
       /*

        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks advcode fullscreen',
            'insertdatetime media table contextmenu powerpaste tinymcespellchecker a11ychecker linkchecker mediaembed',
            'wordcount formatpainter permanentpen pageembed checklist casechange'
        ],
        toolbar: 'undo redo | insert | styleselect | bold italic formatpainter permanentpen pageembed | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | advcode spellchecker a11ycheck | code | checklist | casechange',
        toolbar_drawer: 'sliding',
        permanentpen_properties: {
            fontname: 'arial,helvetica,sans-serif',
            forecolor: '#FF0000',
            fontsize: '18pt',
            hilitecolor: '',
            bold: true,
            italic: false,
            strikethrough: false,
            underline: false
        },
        table_toolbar: "tableprops cellprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
        powerpaste_allow_local_images: true,
        powerpaste_word_import: 'prompt',
        powerpaste_html_import: 'prompt',
        spellchecker_language: 'en',
        spellchecker_dialog: true,
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']*/
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks advcode fullscreen',
            'insertdatetime media table contextmenu powerpaste'
        ],
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code',
        powerpaste_allow_local_images: true,
        powerpaste_word_import: 'prompt',
        powerpaste_html_import: 'prompt',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });
>>>>>>> mardi
</script>

</body>
</html>
