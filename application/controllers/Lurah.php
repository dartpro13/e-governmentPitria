<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author NVM Team Creative
 */
class Lurah extends CI_Controller {
    //put your code here
var $assets;
var $css;
var $js;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()

	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->assets=base_url().'assets/';
		$this->css=base_url().'assets/css/';
		$this->js=base_url().'assets/js/';
		$this->load->model('m_data');
	}
	public function index()
	{
                $data['title']='Lurah';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('lurah/head',$data, true);
                $data['menu_profile']=$this->load->view('lurah/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('lurah/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('lurah/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('lurah/top_navigation',$data, true);
                $data['content']=$this->load->view('lurah/content_dashboard',$data, true);
                $data['footer_content']=$this->load->view('lurah/footer_content',$data, true);
		$this->load->view('lurah/index',$data);
	}
        public function login()
	{
                $data['title']='Login';
		$data['assets']=base_url().'assets/login/';
                $data['img']=base_url().'assets/images/';
                $this->load->view('login/index',$data);
	}
	public function list_data_penduduk()
{
					$data['penduduk'] = $this->m_data->tampil_data_penduduk()->result();
					$data['title']='Admin';
					$data['assets']=$this->assets;
					$data['css']=$this->css;
					$data['js']=$this->js;
					$data['head']=$this->load->view('admin/head',$data, true);
					$data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
					$data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
					$data['sidebar']=$this->load->view('admin/sidebar',$data, true);
					$data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
					$data['content']=$this->load->view('admin/content_list_data_penduduk',$data, true);
					$data['footer_content']=$this->load->view('admin/footer_content',$data, true);
					$this->load->view('admin/index',$data);
}
public function list_surat_kelahiran()
	{
					$data['surat'] = $this->m_data->tampil_data_surat_kelahiran()->result();
					$data['title']='Lurah';
					$data['assets']=$this->assets;
					$data['css']=$this->css;
					$data['js']=$this->js;
					$data['head']=$this->load->view('lurah/head',$data, true);
					$data['menu_profile']=$this->load->view('lurah/menu_profile',$data, true);
					$data['menu_footer']=$this->load->view('lurah/menu_footer',$data, true);
					$data['sidebar']=$this->load->view('lurah/sidebar',$data, true);
					$data['top_navigation']=$this->load->view('lurah/top_navigation',$data, true);
					$data['content']=$this->load->view('lurah/content_list_surat_kelahiran',$data, true);
					$data['footer_content']=$this->load->view('lurah/footer_content',$data, true);
					$this->load->view('lurah/index',$data);
	}

        public function slider2()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_slider2',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function slider3()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_slider3',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function premium_service()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_premium_service',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function global_solution()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_global_solution',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function expertise()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_expertise',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function resources()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_resources',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function research()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_research',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function profile_desc()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_profile_desc',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function service1()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_service1',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function service2()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_service2',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function service3()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_service3',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function service4()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_service4',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function image()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_image',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function motivate()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_motivate',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function clients()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_clients',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function team()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_team',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function relations()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_relations',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
        public function privacy_police()
	{
                $data['title']='Admin';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('admin/head',$data, true);
                $data['menu_profile']=$this->load->view('admin/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('admin/menu_footer',$data, true);
                $data['sidebar']=$this->load->view('admin/sidebar',$data, true);
                $data['top_navigation']=$this->load->view('admin/top_navigation',$data, true);
                $data['content']=$this->load->view('admin/content_privacy_police',$data, true);
                $data['footer_content']=$this->load->view('admin/footer_content',$data, true);
		$this->load->view('admin/index',$data);
	}
}
