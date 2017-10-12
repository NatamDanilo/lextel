
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
                                	<li class="menu_icon1"><a href="<?= base_url('empresa/index/') ?>" <?php if ($this->uri->segment(2) == "index" or $this->uri->segment(2) == ""){ echo "class='selected' ";} ?>>Home</a></li> 
                                    <li class="menu_icon8"><a href="<?= base_url('empresa/quem_somos'); ?>" <?php if ($this->uri->segment(2) == "quem_somos"){ echo "class='selected' ";} ?>>Quem Somos</a></li>
                                    <li class="menu_icon2"><a href="<?= base_url('empresa/internet'); ?>"
                                     <?php 
                                    if ($this->uri->segment(2) == "internet.php"){ echo "class='selected' ";} 
                                    if ($this->uri->segment(2) == "residencial.php"){ echo "class='selected' ";}  
                                    ?>>Internet</a>
                                        <ul>
                                            <li><a href="residencial.php" <?php if ($this->uri->segment(2)  == "residencial"){ echo "class='selected' ";} ?>>Residencial</a></li>
                                            <li><a href="corporativo.php" <?php if ($this->uri->segment(2)  == "corporativo"){ echo "class='selected' ";} ?>>Corporativo</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_icon9"><a href="cinealex.php" <?php if ($this->uri->segment(2)  == "cinealex"){ echo "class='selected' ";} ?>>CineAlex</a></li>
                                    <li class="menu_icon4"><a href="servicos.php" <?php 
                                    if ($this->uri->segment(2)  == "servicos"){ echo "class='selected' ";}  
                                    if ($this->uri->segment(2)  == "corporativo"){ echo "class='selected' ";}  
                                    if ($this->uri->segment(2)  == "web-development"){ echo "class='selected' ";} 
                                    if ($this->uri->segment(2)  == "appliance"){ echo "class='selected' ";} 
                                    if ($this->uri->segment(2)  == "solucao-ti"){ echo "class='selected' ";} 
                                    if ($this->uri->segment(2)  == "automacao"){ echo "class='selected' ";} 
                                    if ($this->uri->segment(2)  == "mobilidade"){ echo "class='selected' ";} 
                                    if ($this->uri->segment(2)  == "locacao"){ echo "class='selected' ";} 
                                    ?>>Serviços</a>
                                        <ul>
                                            <!-- <li><a href="datacenter.php" <?php if ($this->uri->segment(2)  == "datacenter"){ echo "class='selected' ";} ?>>Data Center</a></li> -->
                                            <!-- <li><a href="corporativo" <?php if ($this->uri->segment(2)  == "corporativo"){ echo "class='selected' ";} ?>>Conectividade</a></li> -->
                                            <!-- <li><a href="web-development" <?php if ($this->uri->segment(2)  == "web-development"){ echo "class='selected' ";} ?>>Web Development</a></li> -->
                                            <li><a href="appliance" <?php if ($this->uri->segment(2)  == "appliance"){ echo "class='selected' ";} ?>>Appliance</a></li>
                                            <li><a href="solucao-ti" <?php if ($this->uri->segment(2)  == "solucao-ti"){ echo "class='selected' ";} ?>>Solução TI</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu_icon5"><a href="datacenter" <?php 
                                    if ($this->uri->segment(2)  == "datacenter"){ echo "class='selected' ";}
                                    if ($this->uri->segment(2)  == "cloud-computing"){ echo "class='selected' ";}
                                    if ($this->uri->segment(2)  == "hosting"){ echo "class='selected' ";}
                                    if ($this->uri->segment(2)  == "web-hosting"){ echo "class='selected' ";}
                                    if ($this->uri->segment(2)  == "colocation"){ echo "class='selected' ";}
                                    if ($this->uri->segment(2)  == "monitoramento"){ echo "class='selected' ";} 
                                    if ($this->uri->segment(2)  == "infraestrutura"){ echo "class='selected' ";} 
                                    ?>>Data Center</a>
                                    	<ul>
                                        	<li><a href="cloud-computing" <?php if ($this->uri->segment(2)  == "cloud-computing"){ echo "class='selected' ";} ?>>Cloud Computing</a></li>
                                            <li><a href="hosting" <?php if ($this->uri->segment(2)  == "hosting"){ echo "class='selected' ";} ?>>Hosting</a></li>
                                            <li><a href="web-hosting" <?php if ($this->uri->segment(2)  == "web-hosting"){ echo "class='selected' ";} ?>>Web Hosting</a></li>
                                            <li><a href="colocation" <?php if ($this->uri->segment(2)  == "colocation"){ echo "class='selected' ";} ?>>Colocation</a></li>
                                            <li><a href="monitoramento" <?php if ($this->uri->segment(2)  == "monitoramento"){ echo "class='selected' ";} ?>>Gestão e Monitoramento</a></li>
                                            <li><a href="infraestrutura" <?php if ($this->uri->segment(2)  == "infraestrutura"){ echo "class='selected' ";} ?>>Infraestrutura</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="menu_icon3"><a href="cobertura" <?php if ($this->uri->segment(2)  == "cobertura"){ echo "class='selected' ";} ?>>Cobertura</a></li> -->
                                    <li class="menu_icon6"><a href="assine" <?php if ($this->uri->segment(2)  == "assine"){ echo "class='selected' ";} ?>>Assine</a></li>
                                    <li class="menu_icon7"><a href="contato" <?php if ($this->uri->segment(2)  == "contato"){ echo "class='selected' ";} ?>>Contato</a></li>
                    			</ul>
                            </div> <!-- /menu -->
                        </nav>

                    </div> <!-- /columns ten -->
                    
                </div> <!-- /site_goto_center -->
            </div> <!-- /columns seventeen -->
            
        </div> <!-- /columns seventeen header_bg -->