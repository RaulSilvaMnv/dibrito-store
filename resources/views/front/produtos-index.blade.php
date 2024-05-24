@extends('layouts.template-front')
@section('body')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/produtos.css')}}" media="screen" /> --}}
    <style>
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
                    <img src="{{ asset($product['imagem']) }}" alt="{{ $product['tipo'] }}">
                    <img src="{{ asset($product['imagem_2']) }}" alt="{{ $product['tipo'] }}">
                    <img src="{{ asset($product['imagem_3']) }}" alt="{{ $product['tipo'] }}">
                    <img src="{{ asset($product['imagem_4']) }}" alt="{{ $product['tipo'] }}">
                </div> 
            </div>
            <div class="img-select">
                <div class="img-item">
                    <a href="#" data-id="1">
                        <img src="{{ asset($product['imagem']) }}" alt="{{ $product['tipo'] }}">   
                    </a>    
                </div> 
                <div class="img-item">
                    <a href="#" data-id="2">
                        <img src="{{ asset($product['imagem_2']) }}" alt="{{ $product['tipo'] }}">   
                    </a>    
                </div>
                <div class="img-item">
                    <a href="#" data-id="3">
                        <img src="{{ asset($product['imagem_3']) }}" alt="{{ $product['tipo'] }}">   
                    </a>    
                </div>  
                <div class="img-item">
                    <a href="#" data-id="4">
                        <img src="{{ asset($product['imagem_4']) }}" alt="{{ $product['tipo'] }}">   
                    </a>    
                </div>
            </div>
        </div>
        <div class="product-content">
            <h2 class="product-title">
                {{ $product['tipo'] }}   
            </h2>
            <a href="#" class="product-link">Mais sobre a marca</a>
            <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half pe-2"></i>
                <span>4.7(21)</span>
            </div>

            <div class="product-price">
                <p class="valor">Valor <span>R$ {{ number_format($product['preco'], 2, ',', '.') }}</span></p>
            </div>

            <div class="product-detail">    
                <h2>Sobre esse item</h2>
                <p>{{ $product['descricao'] }}</p>
                <ul>
                    <li>Cores: <span>{{ $product['cores'] }}</span></li>
                    <li>Disponibilidade: <span>{{ $product['disponibilidade'] }}</span></li>
                    <li>Área de Entrega: <span>{{ $product['area_entrega'] }}</span></li>
                </ul>
            </div>
            <div class="purchase-info">
                <input class="" type="number" min="1" value="1">
                <button id="btnFazerPedido" class="btn mt-3">Fazer pedido</button>
            </div>
            <div class="social-links">
                <p>Compartilhar</p>
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
   
@section('script')
    <script type="text/javascript">
        document.getElementById('btnFazerPedido').addEventListener('click', function() {
            // Aqui você fará a requisição ao backend (PHP) para processar o pedido
            fetch('processar_pedido.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ /* Aqui você pode enviar quaisquer dados adicionais necessários */ }),
            })
            .then(response => response.json())
            .then(data => {
                // Exibe uma mensagem para o usuário ou redireciona para outra página, etc.
                alert(data.message); // Você pode retornar uma mensagem do backend para exibir para o usuário
            })
            .catch(error => {
                console.error('Erro ao processar pedido:', error);
            });
        });       
    </script>    
@endsection