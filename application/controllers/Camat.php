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
class Camat extends CI_Controller {
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
        if ($this->session->userdata('username')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'admin'){
			redirect('admin/');
		}elseif($this->session->userdata('level') == 'lurah'){
			redirect('lurah/');
		}
	}
	public function index()
	{
        $data = array(
					'error' => '',
					'username' => $this->session->userdata('username'), 'active'=>'camat'
				);
        $data['jumlah_penduduk']=$this->m_data->hitung_data('tb_penduduk');
        $data['jumlah_pria']=$this->m_data->hitung_data_laki();
        $data['jumlah_wanita']=$this->m_data->hitung_data_wanita();
        $skl=$this->m_data->hitung_data('surat_kelahiran');
        $skm=$this->m_data->hitung_data('surat_kematian');
        $skkk=$this->m_data->hitung_data('surat_keterangan_kk');
        $skktp=$this->m_data->hitung_data('surat_keterangan_ktp');
        $data['total_surat']=$skl+$skm+$skkk+$skktp;
        $data['title']='Camat';
		$data['assets']=$this->assets;
		$data['css']=$this->css;
		$data['js']=$this->js;
                $data['head']=$this->load->view('template/head',$data, true);
                $data['menu_profile']=$this->load->view('template/menu_profile',$data, true);
                $data['menu_footer']=$this->load->view('template/menu_footer',$data, true);
                $data['top_navigation']=$this->load->view('template/top_navigation',$data, true);
                $data['footer_content']=$this->load->view('template/footer_content',$data, true);   
                $data['sidebar']=$this->load->view('camat/sidebar',$data, true);
                $data['content']=$this->load->view('camat/content_dashboard',$data, true);
		$this->load->view('template/index',$data);
	}
    public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
	public function list_data_penduduk()
{
        $data = array(
					'error' => '',
					'username' => $this->session->userdata('username'),'active' =>'camat'
				);
					$data['penduduk'] = $this->m_data->tampil_data_penduduk()->result();
					$data['title']='Camat';
					$data['assets']=$this->assets;
					$data['css']=$this->css;
					$data['js']=$this->js;
					$data['head']=$this->load->view('template/head',$data, true);
					$data['menu_profile']=$this->load->view('template/menu_profile',$data, true);
					$data['menu_footer']=$this->load->view('template/menu_footer',$data, true);
					$data['sidebar']=$this->load->view('camat/sidebar',$data, true);
					$data['top_navigation']=$this->load->view('template/top_navigation',$data, true);
					$data['content']=$this->load->view('camat/content_list_data_penduduk',$data, true);
					$data['footer_content']=$this->load->view('template/footer_content',$data, true);
					$this->load->view('template/index',$data);
}
    function _gen_pdf($html,$paper='A4')
    {
     ob_end_clean();
     $CI =& get_instance();
     $CI->load->library('MPDF56/mpdf');
     $mpdf=new mPDF('utf-8', $paper );
     $mpdf->debug = true;
     $mpdf->WriteHTML($html);
     $mpdf->Output();
     }
    public function doprint_laporan_penduduk($pdf=false)
    {
        $data['penduduk'] = $this->m_data->tampil_data_penduduk()->result();
        $data['tes'] = 'ini print dari HTML ke PDF';
        $output = $this->load->view('template_surat/laporan_penduduk',$data, true);
        return $this->_gen_pdf($output);
     }
}
