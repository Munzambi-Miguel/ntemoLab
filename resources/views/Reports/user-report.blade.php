<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laravel PDF</title>
    <style>
        /*! CSS Used from: http://pdflaravel:8000/dist/css/adminlte.min.css */
        *,::after,::before{box-sizing:border-box;}
        body{margin:0;font-family:"Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff;}
        h1{margin-top:0;margin-bottom:.5rem;}
        img{vertical-align:middle;border-style:none;}
        table{border-collapse:collapse;}
        th{text-align:inherit;text-align:-webkit-match-parent;}
        h1{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
        h1{font-size:2.5rem;}
        .table{width:100%;margin-bottom:1rem;color:#212529;background-color:transparent;}
        .table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;}
        .table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6;}
        .table-sm td,.table-sm th{padding:.3rem;}
        .table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05);}
        .table-hover tbody tr:hover{color:#212529;background-color:rgba(0,0,0,.075);}
        .card-body{-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;min-height:1px;padding:1.25rem;}
        .badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
        @media (prefers-reduced-motion:reduce){
            .badge{transition:none;}
        }
        .badge:empty{display:none;}
        .bg-warning{background-color:#ffc107!important;}
        .rounded-circle{border-radius:50%!important;}
        .p-0{padding:0!important;}
        @media print{
            *,::after,::before{text-shadow:none!important;box-shadow:none!important;}
            thead{display:table-header-group;}
            img,tr{page-break-inside:avoid;}
            body{min-width:992px!important;}
            .badge{border:1px solid #000;}
            .table{border-collapse:collapse!important;}
            .table td,.table th{background-color:#fff!important;}
        }
        body{min-height:100%;}
        .card-body::after{display:block;clear:both;content:"";}
        .card-body>.table{margin-bottom:0;}
        .card-body>.table>thead>tr>th{border-top-width:0;}
        .table:not(.table-dark){color:inherit;}
        .card-body.p-0 .table tbody>tr>td:first-of-type,.card-body.p-0 .table thead>tr>th:first-of-type{padding-left:1.5rem;}
        .card-body.p-0 .table tbody>tr>td:last-of-type,.card-body.p-0 .table thead>tr>th:last-of-type{padding-right:1.5rem;}
        .elevation-2{box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)!important;}
        .bg-warning{background-color:#ffc107!important;}
        .bg-warning{color:#1f2d3d!important;}
        .bg-cyan{background-color:#17a2b8!important;}
        .bg-cyan{color:#fff!important;}
    </style>
</head>
<body>
<h1>Listagem de utilizadores</h1>
<br>
<div class="card-body p-0">
    <table class="table table-striped table-sm table-hover">
        <thead>
        <tr>
            <th style="width: 5%">#</th>
            <th style="width: 35%">Nome</th>
            <th style="width: 35%">Email</th>
            <th style="width: 10%">Perfil</th>
        </tr>
        </thead>
        <tbody>
        @foreach($utilizadores as $utilizador)
            <tr>
                <td style="width: 5%">{{$loop->iteration}}</td>
                <td style="width: 35%">
                    <img src="{{$utilizador->getAvatarUrlAttribute()}}" style="width:25px;height: 25px;" class="rounded-circle elevation-2" alt="User Image">
                    {{$utilizador->name}}

                </td>
                <td style="width: 35%">{{$utilizador->email}}</td>
                <td style="width: 10%">
                    @if($utilizador->hasRole('Administrador'))
                        <span class="badge bg-warning">Administrador</span>
                    @else
                        <span class="badge bg-cyan">Técnico</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
