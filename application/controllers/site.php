<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
	    $this->home();		
	}	
	public function home(){
		$data['title'] = 'Peggy | Classically minimal';
		$this->load->view('templates/head',$data);
		$this->load->view('templates/header');
		$this->load->model('Peggy_model');
		$data['results'] = $this->Peggy_model->main_image();
		$this->load->view('pages/home/main_image',$data);	
		$data1['results'] = $this->Peggy_model->get_round_image();		
		$this->load->view('pages/home/round_pics',$data1);
		$data2['results'] = $this->Peggy_model->get_content_home();
		$this->load->view('pages/home/content', $data2);
		$data3['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/aside', $data3);
		$data4['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/footer', $data4);

	}


	public function about(){
		$data['title'] = "About Me";
		$this->load->view('templates/head',$data);
		$this->load->view('templates/header');
		$this->load->model('Peggy_model');
		$data3['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/aside', $data3);
		$data4['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/footer', $data4);
	}

	public function contact(){
		$data['title'] = "Contact Me";
		$this->load->view('templates/head',$data);
		$this->load->view('templates/header');
		$this->load->view('pages/contact/contact');	
		$this->load->model('Peggy_model');			
		$data3['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/aside', $data3);
		$data4['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/footer', $data4);		
	}

	public function blog(){
		$data['title'] = "Blog";
		$this->load->view('templates/head',$data);
		$this->load->view('templates/header');
		$this->load->model('Peggy_model');
		$data2['results'] = $this->Peggy_model->get_content_home();
		$this->load->view('pages/blog/content_blog', $data2);
		$data3['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/aside', $data3);
		$data4['results'] = $this->Peggy_model->get_aside();
		$this->load->view('templates/footer', $data4);
	}
}