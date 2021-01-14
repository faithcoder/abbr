<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>abbreviation</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.bootstrap4.min.css')}}">

    <style>
        @media (max-width: 768px){
            .main-area {
                width:90% !important;
                margin:auto !important;
            }
        }
    </style>

</head>

<body>

<div class="main-area" style="width: 60%; margin: auto;">

    @yield('content')


</div>

<script type="text/javascript" language="javascript" src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script type="text/javascript" class="init">

    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>


</body>

</html>