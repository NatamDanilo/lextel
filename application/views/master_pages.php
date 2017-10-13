<?php 
$this->load->view('includes/header');
if($this->uri->segment(1) == 'residencial'):
    $this->load->view('includes/menu_residencial');
    else:
    $this->load->view('includes/menu_empresa');
endif;
$this->load->view('pages_residencial/'.$page);
$this->load->view('includes/footer');