<?php
    if (isset($_FILES['attachments'])) {
        $msg = "";
        $targetFile = "uploads/" . basename($_FILES['attachments']['name'][0]);
        if (file_exists($targetFile))
            $msg = array("status" => 0, "msg" => "File already exists!");
        else if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], $targetFile))
            $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => $targetFile);

        exit(json_encode($msg));
    }
?>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../_img/logoIcon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../_css/style.css">
    <link rel="stylesheet" href="../../_css/digital.css">
    <link rel="stylesheet" href="../../_css/fornecedores.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164587456-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-164587456-2');
    </script>
    <title>Prime Graf | Trabalhe Conosco</title>
	</head>
	<body>
        <div id="home" class="topHeader">
            <div class="container">
                <div class="topInfo">
                    <span class="textDivisor"><img src="../../_img/mailIcon.png">
                    <p>atendimento@primegraf.com.br</p></span>
                    <span class="textDivisor"><img src="../../_img/phoneIcon.png">
                    <p>(48) 3067-8077</p></span>
                </div>
            </div>
        </div>
    <header id="mainHeader">
        <div class="container">
            <div class="logo">
                    <a href="../../index.php#home"><img id="logoPrime" src="../../_img/logoPrime.png"></a>
                </div>
                <nav>
                    <div class="hamburguerWrapper">
                        <div class="hamburguerCircle icon">
                            <span class="line top"></span>
                            <span class="line middle"></span>
                            <span class="line bottom"></span>
                        </div>
                    </div>
                    <ul id="mainNav">
                        <li class="subMenuButtom"><a href="../../index.php">HOME</a></li>
                        <li class="subMenuButtom"><a>PORTFÓLIO</a>
                            <ul id="subDigital" class="subMenu">
                                <li class="segmentoBtn subMenuGrafBtn"><a href="#">Comunicação Visual</a>
                                    <ul id="subMenuGrafica" class="subMenuGrafica">
                                        <li class="subMenuGrafBtn">
                                            <a href="../../adesivos/index.html">Adesivos</a>
                                            <ul id="subMenuGrafBtn" class="subMenuGrafica">
                                                <li><a href="../../adesivos/index.html#perfurado">Adesivo Perfurado</a></li>
                                                <li><a href="../../adesivos/index.html#etiquetas">Etiquetas com Semi-corte</a></li>
                                                <li><a href="../../adesivos/index.html#vinilAdesivo">Vinil Adesivo</a></li>
                                            </ul>
                                        </li>
                                        <li class="subMenuGrafBtn"><a href="../../chapas/index.html">Chapas Adesivadas</a>
                                            <ul id="subMenuGrafBtn" class="subMenuGrafica">
                                                <li><a href="../../chapas/index.html#cardapio">Cardápios</a></li>
                                                <li><a href="../../chapas/index.html#display">Displays</a></li>
                                                <li><a href="../../chapas/index.html#placasPs">Placas em PS, PVC e Poliondas</a></li>
                                            </ul>
                                        </li>
                                        <li class="subMenuGrafBtn"><a href="../../lonas/index.html">Lonas</a>
                                            <ul id="subMenuGrafBtn" class="subMenuGrafica">
                                                <li><a href="../../lonas/index.html#banner">Banners</a></li>
                                                <li><a href="../../lonas/index.html#cavalete">Cavaletes</a></li>
                                                <li><a href="../../lonas/index.html#faixas">Faixas</a></li>
                                                <li><a href="../../lonas/index.html#lonasIlhos">Lonas com ilhós</a></li>
                                            </ul>
                                        </li>
                                        <li class="subMenuGrafBtn"><a href="../../servicos/index.html">Serviços</a>
                                            <ul id="subMenuGrafBtn" class="subMenuGrafica">
                                                <li><a href="../../servicos/index.html#adesivagem">Adesivagem</a></li>
                                                <li><a href="../../servicos/index.html#envelopamento">Envelopamento de Frota</a></li>
                                                <li><a href="../../servicos/index.html#instalacao">Instalação de Materiais</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="segmentoBtn subMenuGrafBtn" ><a href="#">Gráfica</a>
                                    <ul id="subMenuGrafBtn" class="subMenuGrafica">
                                        <li class=""><a href="../../editorial/index.html">Editorial</a></li>
                                        <li class=""><a href="../../index.html">Embalagens</a></li>
                                        <li class=""><a href="../../promo&eventos/index.html">Promocional e Eventos</a></li>
                                        <li class=""><a href="../../outros/index.html">Outros</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="subMenuButtom" ><a href="">PARCERIAS</a>
                            <ul id="subGrafica" class="subMenu">
                                <li class="subMenuGrafBtn"><a href="../fornecedores/index.php">Seja nosso Fornecedor</a></li>
                                <li class="subMenuGrafBtn"><a href="index.html">Trabalhe Conosco</a></li>
                            </ul>
                        </li>
                        <li class="subMenuButtom"><a id="contato" href="../../index.php#contact">CONTATO</a></li>
                        <li class="subMenuButtom"><a id="lojaVirtualBtn" target="_blanck" href="https://primegraf.commercesuite.com.br/"><img id='lojaPic' src="../../_img/lojavirtual-magenta.png" alt="">LOJA</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="header_placeholder"></div>
        <div class="titlePageBar">
            <div class="container">
                <h1>TRABALHE CONOSCO</h1>
            </div>
        </div>
        <div class="containerAnexo">
            <div class="container">
            <?php if(isset($_GET['msg']) && $_GET['msg'] === "enviado"): ?>
            <div id="enviado" class="block">
                <h3>Mensagem enviada.<br> Retornaremos o mais breve possível!</h3>
                <a href="index.php">
                    <button id="retornar" class="rooBtn" type="button">Retornar à página inicial</button>
                </a>
            </div>
            <?php else: ?>
            <form class="enviarEmail" action="enviar.php" method="POST">
                
                <label for="name">Seu nome:</label>
                <input type="text" name="name" id="name" required >
                
                <label for="email">Seu email:</label>
                <input type="text" name="email" id="email" required>
            
                <label for="telefone">Seu telefone:</label>
                <input type="tel" name="telefone" id="telefone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" required>
            
                <label for="message">Digite sua mensagem!</label>
                <textarea name="message" id="message" class='materialize-textarea' required></textarea>
                
                <button class="" type="submit">Enviar</button>
            </form>
            <?php endif; ?>
                <h2>Anexe seu Currículo:</h2>
                <div class="dropZone">
                    <input type="file" id="fileupload" name="attachments[]" multiple>
                    <label for="file" id="anexarArquivoBtn"><span class="material-icons">publish</span>&nbsp;Anexar um arquivo</label>     
                </div>
                <div class="resultado">
                    <h1 id="error"></h1><br><br>
                    <h1 id="progress"></h1><br><br>
                    <div id="files"></div>
                    
                    <h1 id="error"></h1><br><br>
                    <h1 id="progress"></h1><br><br>
                    <div id="files"></div>
                </div>
            </div>
        </div>
        <div class="whatsBtn"><img id="whats" src="../../_img/botao_Whats.png"> </div>
        <div class="whatsLink">
            <section class="topBar">
                <div class="profilePic"></div>
                <h3>Atendimento Prime Graf</h3>
            </section>
            <section class="message"><p>Olá, seja bem-vindo! Pronto para fazer seu pedido?</p></section> 
            <section class="textArea"><img src="../../_img/emojiWhats.png"><a href="https://api.whatsapp.com/send?phone=5548991168077&text=Olá!%20Estou%20navegando%20em%20seu%20site%20e%20tenho%20uma%20dúvida." target="_blank"><p>Clique aqui para Atendimento via WhatsApp!</p></a></section>
        </div>
        <footer>
            <div class="container">
                
                <p>&copy; Prime Graf <span id='currentYear'></span> | Todos os direitos reservados.<p>
                
            </div>
        </footer>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
		<script src="js/jquery.iframe-transport.js" type="text/javascript"></script>
        <script src="js/jquery.fileupload.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {

                var files = $("#files");

                $("#fileupload").fileupload({
                    url: 'index.php',
                    dropZone: '#fileupload',
                    dataType: 'json',
                    autoUpload: false
                }).on('fileuploadadd', function (e, data) {
                    var fileTypeAllowed = /.\.(pdf|jpg|png|jpeg)$/i;
                    var fileName = data.originalFiles[0]['name'];
                    var fileSize = data.originalFiles[0]['size'];

                    if (!fileTypeAllowed.test(fileName))
                        $("#error").html('Apenas imagens e PDF são permitidos!');
                    else if (fileSize > 1000000)
                        $("#error").html('Seu arquivo é muito grande! Tamanho máximo permitido: 1Mb');
                    else {
                        $("#error").html("");
                        data.submit();
                    }
                }).on('fileuploaddone', function(e, data) {
                    var status = data.jqXHR.responseJSON.status;
                    var msg = data.jqXHR.responseJSON.msg;

                    if (status == 1) {
                        var path = data.jqXHR.responseJSON.path;
                        $("#files").fadeIn().append('<p><img style="width: 100px; height: 100px;" src="'+path+'" /></p>');
                    } else
                        $("#error").html(msg);
                }).on('fileuploadprogressall', function(e,data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $("#progress").html("Completed: " + progress + "%");
                });
            });
        </script>
        <script type="text/javascript" src="../../_js/script.js"></script>
	</body>
</html>