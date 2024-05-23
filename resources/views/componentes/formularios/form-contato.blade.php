<div class="container mt-5">
    <div class="text-center">
        <label class="fs-3 fw-bold text-uppercase">Formulário de Contato</label><br>
    </div>
    <form onsubmit="sendToWhatsApp(); return false;" class="mt-4">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label text-uppercase fw-bold  ">Nome:</label>
                <input type="text" class="form-control rounded-0" id="nome" name="nome" required>
            </div>
            <div class="col-md-6">
                <label for="sobrenome" class="form-label text-uppercase fw-bold  ">Sobrenome:</label>
                <input type="text" class="form-control rounded-0" id="sobrenome" name="sobrenome" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="email" class="form-label text-uppercase fw-bold  ">E-mail:</label>
                <input type="email" class="form-control rounded-0" id="email" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="celular" class="form-label text-uppercase fw-bold  ">Celular:</label>
                <input type="text" class="form-control rounded-0" id="celular" name="celular" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="assunto" class="form-label text-uppercase fw-bold  ">Assunto de Interesse:</label>
            <textarea class="form-control rounded-0" id="assunto" name="assunto" rows="10" style="height: 500px;" required></textarea>
        </div>
        <div class="text-end">
            <button type="submit" value="" class="btn btn-lg btn-info rounded-0 border border-primary fw-bolder text-secondary fs-5">Enviar<i class="ps-3 fa fa-envelope" aria-hidden="true"></i></button>
        </div>
    </form>
</div>