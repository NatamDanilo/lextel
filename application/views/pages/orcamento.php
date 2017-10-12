<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>

        <meta charset="utf-8">
    	<meta name="keywords" content="" /> 
        <meta name="description" content="" /> 
        
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
        
    	<title>Alexcom | Solicitação de Orçamento</title>
        
        <meta name="keywords" content="" /> 
        <meta name="description" content="" />  
        
    	<link rel="shortcut icon" href="images/favicon.ico">
      
    	<link rel="stylesheet" href="styles/base.css" />
    	<link rel="stylesheet" href="styles/skeleton.css" />
    	<link rel="stylesheet" href="styles/layout.css" />    
    	
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
         
        <!-- Menu -->  
        <script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script> 
        <script type="text/javascript" src="js/mainmenu/selectnav.js"></script>
        <script type="text/javascript" src="js/mainmenu/scripts.js"></script> 
    	
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
                    <h1>Assine</h1>
                </div>
                <span class="reght-pagenation"><a href="index.php">Home</a> <i>/</i> Assine</span>
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
                        
                        <p>Preencha as informações abaixo e escolha seu plano.</p>
                        
                        <form action="enviar-orcamento.php" method="post">
                            <div class="one-half">
                                <legend>Informações Pessoais</legend>
                                 
                                <label for="nome" class="blocklabel">Nome <span>*</span></label>
                                <input name="nome" class="input_bg" type="text" id="nome" value="" tabindex="1" />
                                
                                <label for="email" class="blocklabel">E-Mail <span>*</span></label>
                                <input name="email" class="input_bg" type="text" id="email" value=""  tabindex="2" /> 
                                
                                <span class="floatleft middle">
                                    <label for="telefone" class="blocklabel">Telefone <span>*</span></label>
                                    <input name="telefone" class="input_bg input_bg_small" type="text" id="telefone" value="" tabindex="3" />
                                </span>
                                
                                <span class="floatleft middle">
                                    <label for="celular" class="blocklabel">Celular <span>*</span></label>
                                    <input name="celular" class="input_bg input_bg_small" type="text" id="celular" value="" tabindex="4" />
                                </span>

                            </div> <!-- /one-half -->
                        
                            <div class="one-half last">
                                <legend>Informações do Projeto</legend>

                                <label for="empresa" class="blocklabel">Nome da Empresa <span>*</span></label>
                                <input name="empresa" class="input_bg" type="text" id="empresa" value='' tabindex="5" />
                                
                                <label for="ramo" class="blocklabel">Ramo de Atuação <span>*</span></label>
                                <input name="ramo" class="input_bg" type="text" id="ramo" value="" tabindex="6" />  
 
                                <label for="tipo" class="blocklabel">Tipo de Serviço <span>*</span></label>
                                <select name="tipo" id="tipo" class="input_bg" tabindex="7" style="height: 30px; margin-top: 5px;" > 
                                    <option value="Website" selected="selected">Website</option>
                                    <option value="Portal">Portal</option>
                                    <option value="Loja Virtual">Loja Virtual</option>
                                    <option value="Sistema de Gerenciamento">Sistema de Gerenciamento</option>
                                    <option value="Blog">Blog</option>
                                    <option value="Hotsite">Hotsite</option>
                                    <option value="Mídias Sociais">Mídias Sociais</option> 
                                    <option value="Outro">Outro</option>
                                </select> 
                                
                            </div> <!-- /one-half last --> 
                            <br />
                            <br />

                            <label for="observacoes" class="blocklabel">Detalhamento do Projeto<span>*</span></label>
                            <textarea name="observacoes" class="textarea_bg textarea_bg_big" id="observacoes" cols="20" rows="7"  tabindex="16"></textarea>
                            
                            <br /> 
                             <script src="js/livestyle.js"></script>
                            <div class="clearfix"></div>
                            
                            <input name="enviar" type="submit" value="ENVIAR" class="button medium align right" id="enviar" tabindex="17" />
                            
                        </form> 
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
