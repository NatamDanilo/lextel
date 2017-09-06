<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>

        <meta charset="utf-8">
    	<meta name="keywords" content="" /> 
        <meta name="description" content="" /> 
        
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
        
    	<title>Alexcom | Contato</title>
        
        <meta name="keywords" content="" /> 
        <meta name="description" content="" />  
        
    	<link rel="shortcut icon" href="images/favicon.ico">
      
    	<link rel="stylesheet" href="styles/base.css" />
    	<link rel="stylesheet" href="styles/skeleton.css" />
    	<link rel="stylesheet" href="styles/layout.css" />   
        
    	<link rel="stylesheet" type="text/css" href="js/tabs/tabs.css" />
    	
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
         
        <!-- Menu -->  
        <script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
        <script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/mainmenu/selectnav.js"></script>
        <script type="text/javascript" src="js/mainmenu/scripts.js"></script>
        
        <!-- Tabs -->
    	<script type="text/javascript" src="js/tabs/tabs.js"></script> 

        <script type="text/javascript" src="js/config.js"></script>
    	
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    </head>

<body>

<div id="page-wrapper">
    <div class="container">
        <?php include('includes/header.php'); ?>
    
    <div class="columns seventeen">
    	<div class="page-main-title">
    		<div class="site_goto_center">
        		<div class="leaft-title">
                    <h1>Contato</h1>
                </div>
                <span class="reght-pagenation"><a href="index.php">Home</a> <i>/</i> Contato</span>
    		</div>
            <div class="waves_graphic"></div>
    	</div>
    </div>  <!-- /columns seventeen -->
    
    <!-- Content --> 
    <div class="columns seventeen">
	   <div class="site_goto_center">
	       <div class="margin_top1"></div>
	
            <div id="content">
                <div class="container">
                    
                    <div class="content-fullwidth">
                        <div class="clearfix"></div> 
                        
                        <div class="one-half"> 

                            <p>Para sugestões e solicitações preencha o formulário abaixo que logo entraremos em contato.</p>
                            
                            <form action="enviar-contato.php" method="post">
                            
                                <fieldset>
                                            
                                <label for="nome" class="blocklabel">Nome <span>*</span></label>
                                <input name="nome" class="input_bg" type="text" id="nome" value="" tabindex="1" />
                                
                                
                                <label for="email" class="blocklabel">E-Mail <span>*</span></label>
                                <input name="email" class="input_bg" type="text" id="email" value="" tabindex="2" />
                                
                                
                                <label for="assunto" class="blocklabel">Assunto <span>*</span></label>
                                <input name="assunto" class="input_bg" type="text" id="assunto" value="" tabindex="3" />
                                
                                
                                <label for="mensagem" class="blocklabel">Mensagem <span>*</span></label>
                                <textarea name="mensagem" class="textarea_bg" id="mensagem" cols="20" rows="7" tabindex="4"></textarea>
                                
                                <br />

                                <div class="clearfix"></div>
                                
                                <input name="enviar" type="submit" value="ENVIAR" class="button medium align right" id="enviar" tabindex="5" /></p>
                                                        
                                </fieldset>
                                
                            </form> 
                            
                        </div> <!-- /one-half -->
                        
                        <div class="one-half last"> 
                            <div class="address-info">
                                <h3>Endereço</h3>
                                <ul>
                                    <li>
                                    <img src="images/ac.png" alt="ALEXCOM Internet e Serviços" width="170" /><br />
                                    ALEXCOM Internet e Serviços<br />
                                    <strong>Telefone:</strong> 3919-2629<br />
                                    <strong>E-mail:</strong> <a href="mailto:cac@alexcom.com.br">cac@alexcom.com.br</a><br />
                                    São Paulo, SP<br />
                                    </li>
                                </ul>
                            </div> <!-- /address-info -->
                            
                            <h3>Cobertura</h3> 
                            <div class="one-three">
                               <strong> São Paulo </strong> <br />
                                Capital <br />
                                Perus    <br />
                                Morro Doce <br />
                                Anhanguera <br />
                                Jaraguá  <br />
                                Pirituba <br />
                                Lapa <br />
                                Barra Funda
                            </div>
                            <div class="one-three">
                                 <strong>Grande São Paulo</strong> <br />
                                 ABC<br />
                                 Caieiras<br />
                                 Franco da Rocha<br />
                                 Baltazar Fidelis<br />
                                 Francisco Morato<br /> 
                            </div>
                            <div class="one-three last">
                                <strong>Litoral</strong><br />
                                Baixada Santista <br />
                                Vale do Paraíba<br /><br />
                                <strong>Minas Gerais</strong><br />
                                Região Sul <br /><br />
                                <strong>Rio de Janeiro</strong><br />
                                Capital<br />
                                Baixada Fluminense<br />
                                Niterói<br />
                                São Gonçalo<br />
                                Região Serrana<br />
                            </div>
                                
                        </div> <!-- /one-half last -->
                        
                </div> <!-- /content-fullwidth -->
                
            </div> <!-- /container -->
        </div> <!-- /content -->
        
    </div> <!-- /site_goto_center -->
</div> <!-- /columns seventeen -->
    

    <a href="#" class="scrollup">Scroll</a>
    <?php include('includes/footer.php'); ?>

    </div> <!-- /container -->
</div> <!-- /page-wrapper -->

</body>
</html>
