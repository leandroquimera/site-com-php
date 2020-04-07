<h1><strong>QUIMERA - Página contato</strong></h1>
<h3>Administração e Soluções em Informática</h3>

<?=get('message')?>

<form action="pages/forms/tratacontato.php" method="POST" role="">

    <legend>Fale conosco!</legend>

    <div class="form-group">
        <label for="">Nome:</label>
        <input class="form-control" type="text" name="name" placeholder="Digite seu nome...">
    </div>
    

    <div class="form-group">
        <label for="">E-mail:</label>
        <input class="form-control" type="email" name="email" placeholder="Digite seu email...">
    </div>

    <div class="form-group">
        <label for="">Assunto:</label>
        <input class="form-control" type="text" name="subject" placeholder="Digite o assunto...">
    </div>

    <div class="form-group">
        <label for="">Mensagem:</label>
        <textarea name="message" cols="30" rows="5" class="form-control">Digite sua mensagem...</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar...</button>

</form>