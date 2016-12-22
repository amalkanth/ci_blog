<?php
class Posts extends Ci_Controller{
	public function index()
	{
		
		$data['title']='latest posts';
		
		$data['posts']=$this->Post_model->get_posts();
		$this->load->view('template/header');
		$this->load->view('posts/index',$data);
		$this->load->view('template/footer');
		
}
}