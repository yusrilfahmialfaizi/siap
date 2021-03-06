<head>
    <title>SIAP - Sistem Informasi Absensi Perusahaan</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets\assets\images\logo-kecil.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lilita One' rel='stylesheet'>
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\assets\icon\feather\css\feather.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\assets\pages\data-table\css\buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components\switchery\css\switchery.min.css')}}">
    <!-- Tags css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components\bootstrap-tagsinput\css\bootstrap-tagsinput.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\icon\icofont\css\icofont.css')}}">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\icon\font-awesome\css\font-awesome.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\icon\themify-icons\themify-icons.css')}}">

    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('assets\bower_components/select2/css/select2.min.css')}}" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components/multiselect/css/multi-select.css')}}" />
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/sweetalert/css/sweetalert.css')}}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\assets\css\jquery.mCustomScrollbar.css')}}    ">

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-storage.js"></script>

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\bower_components\sweetalert\css\sweetalert.css')}}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\assets\css\component.css')}}">

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script> --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>