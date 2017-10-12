<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residencial extends CI_Controller {


	public function index()
	{
		$dados = array(
			'title_page' => 'Alexcom | Soluções Tecnológicas',
			'page' => __FUNCTION__
		);
		$this->load->view('master_pages', $dados);
	}
	public function quem_somos()
	{
		$dados = array(
			'title_page' => 'Alexcom | Quem Somos',
			'page' => __FUNCTION__
		);
		$this->load->view('master_pages', $dados);
	}

	public function internet()
	{
		$dados = array(
			'title_page' => 'Alexcom | Internet',
			'page' => __FUNCTION__
		);
		$this->load->view('master_pages', $dados);
	}

}
