<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        
    	<meta charset="utf-8">
    	<meta name="keywords" content="" /> 
        <meta name="description" content="" /> 
        
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
        
    	<title><?= $title_page; ?></title>
        
        <meta name="keywords" content="" /> 
        <meta name="description" content="" />  
        
    	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico');?>">
        
    	<link rel="stylesheet" href="<?= base_url('assets/styles/base.css'); ?>" />
    	<link rel="stylesheet" href="<?= base_url('assets/styles/skeleton.css'); ?>" />
    	<link rel="stylesheet" href="<?= base_url('assets/styles/layout.css'); ?>" />

        <?php if($this->uri->segment(2) != 'internet'): ?>     
            <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/rs-plugin/css/responsive.css'); ?> " media="screen" />
            <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/rs-plugin/css/settings.css'); ?> " media="screen" />
            <link rel="stylesheet" media="screen" href="<?= base_url('assets/js/shortslide/common.css'); ?>" />
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
        <?php endif; ?>
        
        <!-- Short Slide -->
        <script src="<?= base_url('assets/js/shortslide/_lib/jquery-1.8.2.min.js'); ?> "></script>
    	<script src="<?= base_url('assets/js/shortslide/_lib/jquery.easing-1.3.js'); ?> "></script>
    	<script src="<?= base_url('assets/js/shortslide/_js/common.js'); ?> "></script>
        <script src="<?= base_url('assets/js/shortslide/_src/jquery.iosslider.js'); ?> "></script>
         
        <!-- Main Menu -->  
        <script type="text/javascript" src="<?= base_url('assets/js/mainmenu/ddsmoothmenu.js'); ?> "></script>
        <script type="text/javascript" src="<?= base_url('assets/js/mainmenu/jquery-1.7.1.min.js'); ?> "></script>
        <script type="text/javascript" src="<?= base_url('assets/js/mainmenu/selectnav.js'); ?> "></script>
        <script type="text/javascript" src="<?= base_url('assets/js/mainmenu/scripts.js'); ?> "></script>

                

        <?php if($this->uri->segment(2) == 'quem_somos'): ?>
                <!-- Tabs -->
            <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/tabs/tabs.css'); ?>" />	
            <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/tabs/tabs-style2.css') ?>" />
            <script type="text/javascript" src="<?= base_url('assets/js/tabs/tabs.js'); ?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/js/tabs/tabs-style2.js'); ?>"></script>

        <?php endif; ?>
        
        <!-- Revolution Banner  -->
    	<script type="text/javascript" src="<?= base_url('assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js'); ?> "></script>
        <script type="text/javascript" src="<?= base_url('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?> "></script>
        <script type="text/javascript" src="<?= base_url('assets/js/rs-plugin/js/custom.js'); ?> "></script>

        <script type="text/javascript" src="<?= base_url('assets/js/config.js'); ?> "></script>
        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    </head>

<body>