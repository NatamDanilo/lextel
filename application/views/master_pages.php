<?php 
$this->load->view('includes/header');
if($this->uri->segment(1) == 'residencial'):
        // Carrega a view/menus residencial ou empresa, de acordo com get url.
        $this->load->view('includes/menu_residencial');
        $this->load->view('pages_residencial/'.$page);
    else:
        $this->load->view('includes/menu_empresa');
        $this->load->view('pages_empresa/'.$page);
endif;

$this->load->view('includes/footer');