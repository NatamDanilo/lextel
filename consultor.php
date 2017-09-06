<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>

        <meta charset="utf-8">
    	<meta name="keywords" content="" /> 
        <meta name="description" content="" /> 
        
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
        
    	<title>Alexcom | Solicite um Consultor</title>
        
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
                    <h1>Consultor</h1>
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
                        
                        <p>Sinta-se livre para solicitar o nosso representante a qualquer momento, usando nosso sistema de mensagens instantâneas abaixo.</p>
                        
                        
                        <form action="enviar-consultor.php" method="post">
                            <div class="one-half">
                                
                                <label for="nome" class="blocklabel">Nome/Razão Social <span>*</span></label>
                                <input name="nome" class="input_bg" type="text" id="nome" value="" tabindex="1" />
                                
                                <label for="responsavel" class="blocklabel">Responsável <span>*</span></label>
                                <input name="responsavel" class="input_bg" type="text" id="responsavel" value=""  tabindex="2" />
                                
                                <label for="cpf" class="blocklabel">CPF/CNPJ <span>*</span></label>
                                <input name="cpf" class="input_bg" type="text" id="cpf" value="" tabindex="3" />
                                
                                <label for="endereco" class="blocklabel">Endereço de Instalação <span>*</span></label>
                                <input name="endereco" class="input_bg" type="text" id="endereco" value='' tabindex="4" />
                                
                                <span class="floatleft middle">
                                    <label for="cidade" class="blocklabel">Cidade <span>*</span></label>
                                    <input name="cidade" class="input_bg input_bg_small" type="text" id="cidade" value="" tabindex="5" />
                                </span>
                                
                                <span class="floatleft middle">
                                    <label for="estado" class="blocklabel">Estado <span>*</span></label>
                                    <input name="estado" class="input_bg input_bg_small" type="text" id="estado" value="" tabindex="6" />
                                </span>
                                
                                <br />
                                
                                <span class="floatleft middle">
                                    <label for="cep" class="blocklabel">CEP <span>*</span></label>
                                    <input name="cep" class="input_bg input_bg_small" type="text" id="cep" value="" tabindex="7" />
                                </span> 
                                
                                
                                <span class="floatleft middle">
                                    <label for="tel" class="blocklabel">Telefone <span>*</span></label>
                                    <input name="tel" class="input_bg input_bg_small" type="text" id="tel" value="" tabindex="8" />
                                </span>


                            </div> <!-- /one-half -->
                        
                            <div class="one-half last"> 
                                
                                <label for="email" class="blocklabel">E-mail <span>*</span></label>
                                <input name="email" class="input_bg" type="text" id="email" value="" tabindex="9" />
                                
                                <span class="floatleft middle extraright">
                                    <label for="horario" class="blocklabel">Horário <span>*</span></label>
                                    <select name="horario" id="horario" class="input_bg input_bg_small" tabindex="10"> 
                                        <option value="07:00 às 12:00" selected="selected">07:00 às 12:00</option>
                                        <option value="12:00 às 14:00">12:00 às 14:00</option>
                                        <option value="14:00 às 18:00">14:00 às 18:00</option>
                                    </select> 
                                </span>   
                                
                                <span class="floatleft middle">
                                    <label for="data" class="blocklabel">Data <span>*</span></label>
                                    <input name="data" class="input_bg input_bg_small" type="text" id="data" value="" tabindex="11" />
                                </span>
                                
                                <span class="floatleft middle">
                                    <label for="produto" class="blocklabel">Produto de Interesse <span>*</span></label>
                                    <select name="produto" id="produto" class="input_bg input_bg_small" tabindex="12"> 
                                        <!-- <option value="Power Flash">Power Flash</option>  -->
                                        <option value="Power Max">Power Max</option>
                                        <option value="Power Fibra" selected="selected">Power Fibra</option>  
                                        <option value="Power PMP">Power PMP</option>  
                                        <option value="Power Corporate Man">Power Man</option>  
                                        <option value="Power Flex">Power Flex</option>  
                                        <option value="Locação">Locação</option>  
                                        <option value="Mobilidade">Mobilidade</option>  
                                        <option value="Automação">Automação</option>  
                                        <option value="Compras">Compras</option> 
                                        <option value="Colocation">Colocation</option> 
                                        <option value="Hosting">Hosting</option> 
                                        <option value="Cloud Computing">Cloud Computing</option> 
                                        <option value="Compras">Compras</option>  
                                    </select> 
                                </span>  

                                <br />
                                
                                <label for="observacoes" class="blocklabel">Observações</label>
                                <textarea name="observacoes" class="textarea_bg textarea_bg_big" id="observacoes" cols="20" rows="7"  tabindex="13" style="width:360px;height:170px;"></textarea>
                            
                                
                            </div> <!-- /one-half last -->
                            
                            <br />  
                                    
                            <div class="clearfix"></div>
                            
                            <input name="enviar" type="submit" value="ENVIAR" class="button medium align right" id="enviar" tabindex="14" />
                            
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
