<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('home/mhome');
	}
	/*public function index(){
		$data['template'] = 'login';
		$data['title'] = 'Đăng nhập vào hệ thống';
		$this->load->view('home/layout/home', $data);
	}*/
	public function index(){
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules($this->mhome->validation_login_capchar);
			if ($this->form_validation->run()){

				redirect(site_url());
			}
			
		}
		$data['template'] = 'add';
		$data['title'] = 'Add Sinh Viên';
		$this->load->view('home/layout/home', $data);

	}

}