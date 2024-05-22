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
    </style>
    <div class="col-12">
        <div class="d-flex">
            @component('componentes.formularios.carrossel')
                
            @endcomponent
        </div> 
        <div class="">
            <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Destaques</span>
        </div>  
        <div class="col-12 d-flex justify-content-center pt-5 pb-5">
            <div class="pe-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">TERNOS</h5>
                        <p class="card-text">Ternos Oxford e Poliviscose.</p>
                        <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="pe-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">TERNOS</h5>
                        <p class="card-text">Ternos Oxford e Poliviscose.</p>
                        <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="pe-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">TERNOS</h5>
                        <p class="card-text">Ternos Oxford e Poliviscose.</p>
                        <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="pe-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">TERNOS</h5>
                        <p class="card-text">Ternos Oxford e Poliviscose.</p>
                        <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="pe-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">TERNOS</h5>
                        <p class="card-text">Ternos Oxford e Poliviscose.</p>
                        <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="pe-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('imagens/TERNO.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">TERNOS</h5>
                        <p class="card-text">Ternos Oxford e Poliviscose.</p>
                        <a href="#" class="btn btn-lg btn-primary rounded-3 bg-info" style="width: 100%; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <span class="bg-primary py-2 text-white border border-primary text-uppercase fs-6 fw-bold d-flex align-items-center rounded-0 ps-4">Contato</span>
        </div>
        @component('componentes.formularios.form-contato')
        @endcomponent           
    </div>
@endsection
@section('script')
<script type="text/javascript">
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