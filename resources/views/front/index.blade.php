@extends('layouts.template-front')
@section('body')
<style>
    .card {
        height: 500px;
        width: 300px;
        border-radius: 20px;
        transition: transform 0.1s ease-in-out;
    }
    .card:hover{
        transform: scale(1.05);
    }
    .card-img-top {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    .card-body {
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .card-footer {
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
        
</style>
    <div class="col-12">
        <div class="d-flex flex-column flex-lg-row">
            @component('componentes.formularios.carrossel')
            @endcomponent
        </div> 
        <div class="my-2">
            <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Categorias</span>
        </div>  
        <div class="container-fluid position-relative ps-3">
            <button id="scroll-left" class="btn btn-primary position-absolute start-0 top-50 translate-middle-y" style="z-index: 20;">‹</button>
            <div id="fade-left"></div>
            <div class="d-flex flex-nowrap overflow-auto pt-5" id="card-container">
                @foreach($products as $product)
                    <div class="pe-3 pb-3 flex-shrink-0">
                        <div class="card d-flex flex-column justify-content-between">
                            <img src="{{ asset($product['imagem']) }}" class="card-img-top" alt="{{ $product['tipo'] }}">
                            <div class="card-body d-flex flex-column justify-between">
                                <div>
                                    <h5 class="card-title fw-bold">{{ $product['tipo'] }}</h5>
                                    <p class="card-text">{{ $product['descricao_card'] }}</p>
                                </div>
                                <div class="mt-auto">
                                    <a href="{{ route('produtos-index', $product['id']) }}" class="btn btn-lg btn-primary rounded-3 bg-info w-100">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="fade-right"></div>
            <button id="scroll-right" class="btn btn-primary position-absolute end-0 top-50 translate-middle-y" style="z-index: 20;">›</button>
        </div>
        <div class="my-2">
            <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Sobre nós</span>
        </div>
        <div class="d-flex pt-5 pb-5">
            <div class="col-8 col-md-8 d-flex justify-content-center container-fluid pt-5">
                <span class="fs-6 fw-medium">
                    Eu trabalhava no Espírito Santo em uma fábrica de massas chamada Belo Massas, onde gostava do meu trabalho e dos benefícios. 
                    No entanto, minha esposa e eu queríamos mais tempo para nosso serviço voluntário ajudando pessoas com deficiência auditiva a estudar a Bíblia em língua de sinais. 
                    Por isso, nos mudamos para Boituva, SP. 
                    Comecei a trabalhar por conta própria, inicialmente vendendo cuecas e meias, depois gravatas, e finalmente lançando minha própria linha de sapatos e ternos. 
                    Sou grato aos clientes que me permitem focar mais no voluntariado. Escolhi o cavalo como logo porque ele representa força, refletindo a qualidade dos meus sapatos de couro. 
                    Assista ao vídeo a seguir para saber mais sobre como quero oferecer o melhor serviço possível.
                </span>
            </div>
            <div class="col-12 col-md-4 container-fluid pt-5 pe-5">
                <img src="{{asset('imagens/dibrittoVideo.png')}}" class="img-fluid" alt="...">      
            </div>
        </div>
        <div class="pt-5">
            <div class="my-2">
                <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Contato</span>
            </div>
            @component('componentes.formularios.form-contato')
            @endcomponent           
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    document.getElementById('scroll-left').addEventListener('click', function() {
        document.getElementById('card-container').scrollBy({
            left: -800, // Ajuste este valor conforme necessário
            behavior: 'smooth'
        });
    });

    document.getElementById('scroll-right').addEventListener('click', function() {
        document.getElementById('card-container').scrollBy({
            left: 800, // Ajuste este valor conforme necessário
            behavior: 'smooth'
        });
    });

    function sendToWhatsApp() {
        var nome = document.getElementById("nome").value;
        var sobrenome = document.getElementById("sobrenome").value;
        var email = document.getElementById("email").value;
        var celular = document.getElementById("celular").value;
        var assunto = document.getElementById("assunto").value;

        // Validate required fields
        if (!nome || !sobrenome || !email || !celular || !assunto) {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        var mensagem = `*Nome:* ${nome}%0A` +
                       `*Sobrenome:* ${sobrenome}%0A` +
                       `*E-mail:* ${email}%0A` +
                       `*Celular:* ${celular}%0A` +
                       `*Assunto de Interesse:* ${assunto}`;

        var url = `https://wa.me/5527999109108?text=${mensagem}`;

        window.open(url, '_blank');
    }
</script>
@endsection
