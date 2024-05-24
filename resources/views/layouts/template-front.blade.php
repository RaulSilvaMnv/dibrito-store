<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/bootstrap.scss', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" media="screen" />
    <link rel="shortcut icon" href="{{asset('image/favicon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap4.min.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/template.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/front.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/portal-servicos.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/nav-bar.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/icones.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/produtos.css')}}" media="screen" />
    
    <title>DiBrito</title>
</head>
<body>
    <header class=" bg-primary" style="height: 80px">
        @component('componentes.header.header')
        @endcomponent
    </header>
    <main class="col-12 d-flex bg-secondary" style="height: 2800px">
        @yield('body')
    </main>
    <footer class="bg-info-light">
       @component('componentes.footer.footer')
       @endcomponent
    </footer>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/template.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/funcoes.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/front.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/produtos.js')}}"></script>
    @yield('script')
</body>
</html>