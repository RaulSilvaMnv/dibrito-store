<h1>Formulário de Contato</h1>
<form onsubmit="sendToWhatsApp(); return false;">
    <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="sobrenome">Sobrenome:</label><br>
        <input type="text" id="sobrenome" name="sobrenome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="celular">Celular:</label><br>
        <input type="text" id="celular" name="celular" required><br><br>

        <label for="assunto">Assunto de Interesse:</label><br>
        <input type="text" id="assunto" name="assunto" required><br><br>

        <input type="submit" value="Enviar">
</form>