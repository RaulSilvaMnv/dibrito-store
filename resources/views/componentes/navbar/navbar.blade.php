<link rel="stylesheet" type="text/css" href="{{asset('css/nav-bar.css')}}" media="screen" />
<script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
<style>
    .nav {
        height: 80px;
    }
    @media (max-width: 768px) {
        .navbar-nav {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            width: 200px;
            background-color: #333;
            padding-top: 80px;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            z-index: 999;
        }
        .navbar-nav.active {
            display: flex;
        }
        .navbar-nav li {
            margin-bottom: 20px;
        }
        .navbar-toggler {
            display: block;
        }
        .navbar-toggler-icon {
            display: block;
            width: 30px;
            height: auto;
            background-color: #fff;
            border-radius: 4px;
            padding: 2px;
            text-align: center;
        }
    }

</style>
<nav class="navbar bg-primary nav">
    <div class="container-fluid d-flex d-grid">
        <ul class="navbar-nav me-auto mb-2">
            <li class="d-flex nav-item">
                <a class="nav-link active text-white fs-5 pe-5" href="#" aria-current="page">Produtos</a>
                <a class="nav-link text-white fs-5 pe-5" href="#" aria-current="page">Sobre Nós</a>
                <a class="nav-link text-white fs-5 pe-5" href="#" aria-current="page">Contatos</a>
                <i class="icon-link icone facebook me-2"></i>
                <i class="icon-link icone instagram me-2"></i>
            </li>
        </ul>
        <div class="pe-5">
            <form class="d-flex">
                <input class="form-control-sm rounded-0 border-0" style="width: 400px" type="search" placeholder="O que você procura?" aria-label="Search">
                <button class="btn btn-sm py-1 rounded-0 border-0 bg-white" type="submit"><i class="fa fa-search me-2"></i></button>
            </form>
        </div>
    </div>
</nav>
<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar-toggler').on('click', function() {
            $('.navbar-nav').toggleClass('active');
        });
    });
</script>