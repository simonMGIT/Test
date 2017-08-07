<?php

class Admin extends MY_Controller {
    
    public function dashboard() {
        $this->load->model('articlesmodel','articles');
        $articles = $this->articles->articles_list();
     $this->load->view('admin/dashboard', ['articles'=>$articles]);
     
     }
     
     	public function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('user_id') )
			return redirect('login');
		$this->load->model('articlesmodel','articles');
		$this->load->helper('form');
	}
}