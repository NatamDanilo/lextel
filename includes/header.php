        <div class="columns seventeen">
            
        	<div id="sitetop_div_fullw">
                <div id="sitetop_div">
                	
                    <div class="date_wrap">
            			<script type="text/javascript">
                        var mydate = new Date()
                        var year = mydate.getYear()
                        if (year < 1000)
                        year += 1900
                        var day = mydate.getDay();
                        var month = mydate.getMonth();
                        var daym = mydate.getDate();
                        if (daym < 10)
                        daym = "0" + daym
                        var montharray = new Array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                        document.write("<b class='date'>" + daym + " de "+ montharray[month] +" de " + year + "</b>");
                        </script>
                    </div>
                    
                    <div class="columns ten">
                        <div class="top_links">
                        	 <ul>
                             	<li class="facbook"><a href="https://www.facebook.com/internet.alexcom" target="_blank">Facebook</a></li>
                             	<li class="twitter"><a href="https://twitter.com/alexcominternet" target="_blank">Twitter</a></li>
                             	<!-- <li class="googleplus"><a href="#" target="_blank">Google Plus</a></li> -->
                			</ul>
                        </div>
                    </div> <!-- /columns ten -->

                </div> <!-- /sitetop_div -->
            </div> <!-- /sitetop_div_fullw -->
            
       	</div> <!-- /columns seventeen -->
     
        <?php 
            $url = basename($_SERVER['PHP_SELF']);
        ?>

        <div class="columns seventeen header_bg">
            <div class="down_arrow1"></div>
        
            <div class="columns seventeen">
                <div class="site_goto_center">
            
                	<div class="columns">
                    	<div id="site_logo"><a href="index.php"><i>Alex</i><b>com</b></a></div>
                    </div>
            
                    <!-- Menu -->
                    <div class="menu">

                        <nav id="access" class="access" role="navigation">
                            <div id="menu" class="menu">
                            	<ul id="tiny">
                                	<li class="menu_icon1"><a href="index.php" <?php if ($url == "index.php"){ echo "class='selected' ";} ?>>Home</a></li> 
                                    <li class="menu_icon8"><a href="quem-somos.php" <?php if ($url == "quem-somos.php"){ echo "class='selected' ";} ?>>Quem Somos</a></li>
                                    <li class="menu_icon2"><a href="internet.php" <?php 
                                    if ($url == "internet.php"){ echo "class='selected' ";} 
                                    if ($url == "residencial.php"){ echo "class='selected' ";}  
                                    ?>>Internet</a>
                                        <ul>
                                            <li><a href="residencial.php" <?php if ($url == "residencial.php"){ echo "class='selected' ";} ?>>Residencial</a></li>
                                            <li><a href="corporativo.php" <?php if ($url == "corporativo.php"){ echo "class='selected' ";} ?>>Corporativo</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_icon9"><a href="cinealex.php" <?php if ($url == "cinealex.php"){ echo "class='selected' ";} ?>>CineAlex</a></li>
                                    <li class="menu_icon4"><a href="servicos.php" <?php 
                                    if ($url == "servicos.php"){ echo "class='selected' ";}  
                                    if ($url == "corporativo.php"){ echo "class='selected' ";}  
                                    if ($url == "web-development.php"){ echo "class='selected' ";} 
                                    if ($url == "appliance.php"){ echo "class='selected' ";} 
                                    if ($url == "solucao-ti.php"){ echo "class='selected' ";} 
                                    if ($url == "automacao.php"){ echo "class='selected' ";} 
                                    if ($url == "mobilidade.php"){ echo "class='selected' ";} 
                                    if ($url == "locacao.php"){ echo "class='selected' ";} 
                                    ?>>Serviços</a>
                                        <ul>
                                            <!-- <li><a href="datacenter.php" <?php if ($url == "datacenter.php"){ echo "class='selected' ";} ?>>Data Center</a></li> -->
                                            <!-- <li><a href="corporativo.php" <?php if ($url == "corporativo.php"){ echo "class='selected' ";} ?>>Conectividade</a></li> -->
                                            <!-- <li><a href="web-development.php" <?php if ($url == "web-development.php"){ echo "class='selected' ";} ?>>Web Development</a></li> -->
                                            <li><a href="appliance.php" <?php if ($url == "appliance.php"){ echo "class='selected' ";} ?>>Appliance</a></li>
                                            <li><a href="solucao-ti.php" <?php if ($url == "solucao-ti.php"){ echo "class='selected' ";} ?>>Solução TI</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_icon5"><a href="datacenter.php" <?php 
                                    if ($url == "datacenter.php"){ echo "class='selected' ";}
                                    if ($url == "cloud-computing.php"){ echo "class='selected' ";}
                                    if ($url == "hosting.php"){ echo "class='selected' ";}
                                    if ($url == "web-hosting.php"){ echo "class='selected' ";}
                                    if ($url == "colocation.php"){ echo "class='selected' ";}
                                    if ($url == "monitoramento.php"){ echo "class='selected' ";} 
                                    if ($url == "infraestrutura.php"){ echo "class='selected' ";} 
                                    ?>>Data Center</a>
                                    	<ul>
                                        	<li><a href="cloud-computing.php" <?php if ($url == "cloud-computing.php"){ echo "class='selected' ";} ?>>Cloud Computing</a></li>
                                            <li><a href="hosting.php" <?php if ($url == "hosting.php"){ echo "class='selected' ";} ?>>Hosting</a></li>
                                            <li><a href="web-hosting.php" <?php if ($url == "web-hosting.php"){ echo "class='selected' ";} ?>>Web Hosting</a></li>
                                            <li><a href="colocation.php" <?php if ($url == "colocation.php"){ echo "class='selected' ";} ?>>Colocation</a></li>
                                            <li><a href="monitoramento.php" <?php if ($url == "monitoramento.php"){ echo "class='selected' ";} ?>>Gestão e Monitoramento</a></li>
                                            <li><a href="infraestrutura.php" <?php if ($url == "infraestrutura.php"){ echo "class='selected' ";} ?>>Infraestrutura</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="menu_icon3"><a href="cobertura.php" <?php if ($url == "cobertura.php"){ echo "class='selected' ";} ?>>Cobertura</a></li> -->
                                    <li class="menu_icon6"><a href="assine.php" <?php if ($url == "assine.php"){ echo "class='selected' ";} ?>>Assine</a></li>
                                    <li class="menu_icon7"><a href="contato.php" <?php if ($url == "contato.php"){ echo "class='selected' ";} ?>>Contato</a></li>
                    			</ul>
                            </div> <!-- /menu -->
                        </nav>

                    </div> <!-- /columns ten -->
                    
                </div> <!-- /site_goto_center -->
            </div> <!-- /columns seventeen -->
            
        </div> <!-- /columns seventeen header_bg -->