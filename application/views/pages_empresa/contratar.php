<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>

        <meta charset="utf-8">
    	<meta name="keywords" content="" /> 
        <meta name="description" content="" /> 
        
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
        
    	<title>Alexcom | Contratar</title>
        
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
                    <h1>Contratar</h1>
                </div>
                <span class="reght-pagenation"><a href="index.php">Home</a> <i>/</i> Contratar</span>
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
                        
                        <form action="enviar-contratar.php" method="post">
                            <div class="one-half">
                                <legend>Informações Pessoais</legend>
                                
                                <label for="nome" class="blocklabel">Nome <span>*</span></label>
                                <input name="nome" class="input_bg" type="text" id="nome" value="" tabindex="1" />
                                
                                <label for="email" class="blocklabel">E-Mail <span>*</span></label>
                                <input name="email" class="input_bg" type="text" id="email" value=""  tabindex="2" />
                                
                                <span class="floatleft middle">
                                    <label for="cpf" class="blocklabel">CPF <span>*</span></label>
                                    <input name="cpf" class="input_bg input_bg_small" type="text" id="cpf" value="" tabindex="3" />
                                </span>
                                
                                <span class="floatleft middle">
                                    <label for="rg" class="blocklabel">RG <span>*</span></label>
                                    <input name="rg" class="input_bg input_bg_small" type="text" id="rg" value="" tabindex="4" />
                                </span>
                                
                                <span class="floatleft middle">
                                    <label for="telefone" class="blocklabel">Telefone <span>*</span></label>
                                    <input name="telefone" class="input_bg input_bg_small" type="text" id="telefone" value="" tabindex="5" />
                                </span>
                                
                                <span class="floatleft middle">
                                    <label for="celular" class="blocklabel">Celular <span>*</span></label>
                                    <input name="celular" class="input_bg input_bg_small" type="text" id="celular" value="" tabindex="6" />
                                </span>

                            </div> <!-- /one-half -->
                        
                            <div class="one-half last">
                                <legend>Informações do Plano </legend>

                                <label for="endereco" class="blocklabel">Endereço de Instalação <span>*</span></label>
                                <input name="endereco" class="input_bg" type="text" id="endereco" value='' tabindex="7" />
                                
                                <span class="floatleft middle">
                                    <label for="cidade" class="blocklabel">Cidade <span>*</span></label>
                                    <input name="cidade" class="input_bg input_bg_small" type="text" id="cidade" value="" tabindex="8" />
                                </span>
                                
                                <span class="floatleft middle">
                                    <label for="estado" class="blocklabel">Estado <span>*</span></label>
                                    <input name="estado" class="input_bg input_bg_small" type="text" id="estado" value="" tabindex="9" />
                                </span>
                                
                                <br />
                                
                                <label for="cep" class="blocklabel">CEP <span>*</span></label>
                                <input name="cep" class="input_bg input_bg_small" type="text" id="cep" value="" tabindex="10" />
 
                                <br style="clear: both;" />
                                
                                <span class="floatleft middle">
                                    <label for="pagamento" class="blocklabel">Forma de Pagamento <span>*</span></label>
                                    <select name="pagamento" id="pagamento" class="input_bg input_bg_small" tabindex="13"> 
                                        <option value="Cartão" selected="selected">Cartão</option>
                                        <option value="Débito">Débito</option>
                                        <option value="Boleto">Boleto</option>
                                    </select> 
                                </span>    
                                
                                <span class="floatleft middle">
                                    <label for="fatura" class="blocklabel">Vencimento da Fatura <span>*</span></label>
                                    <select name="fatura" id="fatura" class="input_bg input_bg_small" tabindex="12"> 
                                        <option value="2" selected="selected">2</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="18">18</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select> 
                                </span>
                                
                                <script type="text/javascript">
                                $(document).ready(function(){
                                    $('.webmail, .hospedagem').hide(); 

                                    $('select#tipo').change(function(){
                                        var selection = $(this).val();
                                        switch (selection) {

                                            case "Webmail":
                                                $(".hospedagem").hide();
                                                $(".webmail").fadeIn();
                                            break;

                                            case "Hospedagem":
                                                $(".webmail").hide();
                                                $(".hospedagem").fadeIn();
                                            break; 

                                        } 
                                    });  
                                });
                                </script> 

                            <span class="floatleft inline tipo"> 
                                <label for="tipo" class="blocklabel">Serviço: <span>*</span></label>
                                <select name="tipo" id="tipo" class="input_bg input_bg_small" tabindex="13">
                                    <option value="Escolha o Serviço" selected="selected">Escolha o Serviço</option>
                                    <option value="Webmail">Webmail</option>
                                    <option value="Hospedagem">Hospedagem</option>
                                </select>  
                            </span>
                            
                            <span class="floatleft inline webmail"> 
                                <label for="webmail" class="blocklabel">Webmail <span>*</span></label>
                                <select name="webmail" id="webmail" class="input_bg input_bg_small" tabindex="14">  
                                    <option value="Webmail 10  / R$ 19,90">Webmail 10  / R$ 19,90</option> 
                                    <option value="Webmail 15  / R$ 29,90">Webmail 15  / R$ 29,90</option> 
                                    <option value="Webmail 30  / R$ 39,90">Webmail 30  / R$ 39,90</option> 
                                    <option value="Webmail 50  / R$ 59,90">Webmail 50  / R$ 59,90</option> 
                                </select>  
                            </span>
                            
                            <span class="floatleft inline hospedagem"> 
                                <label for="hospedagem" class="blocklabel">Hospedagem <span>*</span></label>
                                <select name="hospedagem" id="hospedagem" class="input_bg input_bg_small" tabindex="15">  
                                    <option value="Smart / R$ 12,90">Smart / R$ 12,90</option> 
                                    <option value="Basic / 19,90">Basic / 19,90</option> 
                                    <option value="Professional / 27,90">Professional / 27,90</option> 
                                    <option value="Business / 59,90">Business / 59,90</option> 
                                </select>  
                            </span>
                            
                            </div> <!-- /one-half last --> 
                            <br />
                            <br />

                            <label for="observacoes" class="blocklabel">Observações</label>
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
