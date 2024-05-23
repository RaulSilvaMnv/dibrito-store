@extends('layouts.template-front')
@section('body')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/produtos.css')}}" media="screen" /> --}}
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }
        body{
            line-height: 1.5;
        }
        .card-wrapper{
            max-width: 1100px;
            margin: 0 auto;
        }
        img{
            width: 100%;
            display: block;
        }
        .img-display{
            overflow: hidden;
        }
        .img-showcase{
            display: flex;
            width: 100%;
            transition: all 0.5s ease;
        }
        .img-showcase img{
            min-width: 100%;
        }
        .img-select{
            display: flex;
        }
        .img-item{
            margin: 0.3rem;
        }
        .img-item:nth-child(1),
        .img-item:nth-child(2),
        .img-item:nth-child(3){
            margin-right: 0;
        }
        .img-item:hover{
            opacity: 0.8;
        }
        .product-content{
            padding: 2rem 1rem;
        }
        .product-title{
            font-size: 3rem;
            text-transform: capitalize;
            font-weight: 700;
            position: relative;
            color: #12263a;
            margin: 1rem 0;
        }
        .product-title::after{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            width: 80px;
            background: #12263a;
        }
        .product-link{
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 0.5rem;
            background: #256eff;
            color: #fff;
            padding: 0 0.3rem;
            transition: all 0.5s ease;
        }
        .product-link:hover{
            opacity: 0.9;
        }
        .product-rating{
            color: #ffc107;
        }
        .product-rating span{
            font-weight: 600;
            color: #252525;
        }
        .product-price{
            margin: 1rem 0;
            font-size: 1rem;
            font-weight: 700;
        }
        .product-price span{
            font-weight: 400;
        }
        .last-price span{
            color: #f64749;
            text-decoration: line-through;
        }
        .new-price span{
            color: #256eff;
        }
        .product-detail h2{
            text-transform: capitalize;
            color: #12263a;
            padding-bottom: 0.6rem;
        }
        .product-detail p{
            font-size: 0.9rem;
            padding: 0.3rem;
            opacity: 0.8;
        }
        .product-detail ul{
            margin: 1rem 0;
            font-size: 0.9rem;
        }
        .product-detail ul li{
            margin: 0;
            list-style: none;
            background: url(shoes_images/checked.png) left center no-repeat;
            background-size: 18px;
            padding-left: 1.7rem;
            margin: 0.4rem 0;
            font-weight: 600;
            opacity: 0.9;
        }
        .product-detail ul li span{
            font-weight: 400;
        }
        .purchase-info{
            margin: 1.5rem 0;
        }
        .purchase-info input,
        .purchase-info .btn{
            border: 1.5px solid #ddd;
            border-radius: 25px;
            text-align: center;
            padding: 0.45rem 0.8rem;
            outline: 0;
            margin-right: 0.2rem;
            margin-bottom: 1rem;
        }
        .purchase-info input{
            width: 60px;
        }
        .purchase-info .btn{
            cursor: pointer;
            color: #fff;
        }
        .purchase-info .btn:first-of-type{
            background: #256eff;
        }
        .purchase-info .btn:last-of-type{
            background: #f64749;
        }
        .purchase-info .btn:hover{
            opacity: 0.9;
        }
        .social-links{
            display: flex;
            align-items: center;
        }
        .social-links a{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            color: #000;
            border: 1px solid #000;
            margin: 0 0.2rem;
            border-radius: 50%;
            text-decoration: none;
            font-size: 0.8rem;
            transition: all 0.5s ease;
        }
        .social-links a:hover{
            background: #000;
            border-color: transparent;
            color: #fff;
        }

        @media screen and (min-width: 992px){
            .card{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 1.5rem;
            }
            .card-wrapper{
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .product-imgs{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .product-content{
                padding-top: 0;
            }
        }
    </style>
    <div class="card-wrapper">
        <div class="card">
            {{-- card left --}}
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="{{asset('imagens/TERNO.jpg')}}" alt="Terno 1">
                        <img src="{{asset('imagens/TERNO2.jpg')}}" alt="Terno 2">
                        <img src="{{asset('imagens/TERNO3.jpg')}}" alt="Terno 3">
                        <img src="{{asset('imagens/TERNO4.jpg')}}" alt="Terno 4">
                    </div> 
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="" data-id="1">
                            <img src="{{asset('imagens/TERNO.jpg')}}" alt="Terno 1">   
                        </a>    
                    </div> 
                    <div class="img-item">
                        <a href="" data-id="2">
                            <img src="{{asset('imagens/TERNO2.jpg')}}" alt="Terno 2">   
                        </a>    
                    </div>
                    <div class="img-item">
                        <a href="" data-id="4">
                            <img src="{{asset('imagens/TERNO3.jpg')}}" alt="Terno 4">   
                        </a>    
                    </div>  
                    <div class="img-item">
                        <a href="" data-id="4">
                            <img src="{{asset('imagens/TERNO4.jpg')}}" alt="Terno 4">   
                        </a>    
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h2 class="product-title">
                    Ternos   
                </h2>
                <a href="" class="product-link">Mais sobre a marca</a>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half pe-2"></i>
                    <spam>4.7(21)</spam>
                </div>

                <div class="product-price">
                    <p class="valor">Valor <spam>R$ 750,00</spam></p>
                </div>

                <div class="product-detail">
                    <h2>Sobre esse item</h2>
                    <p>Eleve seu estilo com o Terno Slim Fit de Poliviscose, 
                        uma escolha ideal para ocasiões formais e eventos especiais. 
                        Feito com uma combinação perfeita de poliéster e viscose, 
                        este terno oferece um toque macio, 
                        excelente durabilidade e um caimento impecável.
                    </p>
                    <ul>
                        <li>Cores<spam>Preto, azul, cinza claro e cinza escuro.</spam></li>
                        <li>Disponibilidade:<spam>Por encomenda</spam></li>
                        <li>Área de Entrega:<spam>Região Sudeste</spam></li>
                    </ul>
                </div>
                <div class="purchase-info">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btn">Fazer pedido</button>
                </div>
                <div class="social-links">
                    <p>Compartilhar</p>
                    <a href="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
   
@section('script')
    <script type="text/javascript"></script>    
@endsection