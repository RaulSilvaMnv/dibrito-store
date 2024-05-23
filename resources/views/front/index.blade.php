@extends('layouts.template-front')
@section('body')
    <style>
        .card {
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .container-fluid {
            position: relative;
            padding-left: 0;
            padding-right: 0;
        }
        #card-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding-left: 1rem; /* Padding to separate from the edge of the screen */
            padding-right: 1rem; /* Padding to separate from the edge of the screen */
        }
        #fade-left, #fade-right {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 50px; /* Adjust the width to control the gradient size */
            z-index: 10;
        }
        #fade-left {
            left: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        }
        #fade-right {
            right: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        }
        button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
        }
    </style>
    <div class="col-12">
        <div class="d-flex">
            @component('componentes.formularios.carrossel')
                
            @endcomponent
        </div> 
        <div class="">
            <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Categorias</span>
        </div>  
        <div class="container-fluid position-relative ps-3">
            <button id="scroll-left" class="btn btn-primary position-absolute start-0 top-50 translate-middle-y" style="z-index: 20;">‹</button>
            <div id="fade-left"></div>
            <div class="d-flex flex-nowrap overflow-auto pt-5" id="card-container">
                <div class="pe-3 pb-3 flex-shrink-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">TERNOS</h5>
                            <p class="card-text">Oxford e Poliviscose, perfeitos para um visual elegante e profissional</p>
                            <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="pe-3 pb-3 flex-shrink-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">CAMISAS</h5>
                            <p class="card-text">Manga curta e longa, proporcionando conforto e estilo.</p>
                            <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="pe-3 pb-3 flex-shrink-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">CAMISAS</h5>
                            <p class="card-text">Manga curta e longa, proporcionando conforto e estilo.</p>
                            <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="pe-3 pb-3 flex-shrink-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">CAMISAS</h5>
                            <p class="card-text">Manga curta e longa, proporcionando conforto e estilo.</p>
                            <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="pe-3 pb-3 flex-shrink-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">CAMISAS</h5>
                            <p class="card-text">Manga curta e longa, proporcionando conforto e estilo.</p>
                            <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="pe-3 pb-3 flex-shrink-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">CAMISAS</h5>
                            <p class="card-text">Manga curta e longa, proporcionando conforto e estilo.</p>
                            <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="pe-3 pb-3 flex-shrink-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">CAMISAS</h5>
                            <p class="card-text">Manga curta e longa, proporcionando conforto e estilo.</p>
                            <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fade-right"></div>
            <button id="scroll-right" class="btn btn-primary position-absolute end-0 top-50 translate-middle-y" style="z-index: 20;">›</button>
        </div>
        <div class="">
        <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Sobre nós</span>
        </div>
        <div class="col-12 row pt-5 pb-5">
            <div class="col-4 d-flex justifly-content-center container-fluid pt-5 me-5">
                <span class="fs-6 fw-medium">
                    Eu trabalhava no Espírito Santo em uma fábrica de massas chamada Belo Massas, onde gostava do meu trabalho e dos benefícios. 
                    No entanto, minha esposa e eu queríamos mais tempo para nosso serviço voluntário ajudando pessoas com deficiência auditiva a estudar a Bíblia em língua de sinais. 
                    Por isso, nos mudamos para Boituva, SP. 
                    Comecei a trabalhar por conta própria, inicialmente vendendo cuecas e meias, depois gravatas, e finalmente lançando minha própria linha de sapatos e ternos. 
                    Sou grato aos clientes que me permitem focar mais no voluntariado. Escolhi o cavalo como logo porque ele representa força, refletindo a qualidade dos meus sapatos de couro. 
                    Assista ao vídeo a seguir para saber mais sobre como quero oferecer o melhor serviço possível.
                </span>
            </div>
            <div class="col-3 container-fluid pt-5 pe-5">
                <img src="{{asset('imagens/dibrittoVideo.png')}}" class="" alt="...">      
            </div>
        </div>
        <div class="pt-5">
        <div class="">
            <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Contato</span>
        </div>
        @component('componentes.formularios.form-contato')
        @endcomponent           
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