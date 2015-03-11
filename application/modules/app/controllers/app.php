<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App  extends MX_Controller {
	

	public function __construct(){
		
    	parent::__construct();
		$this->load->model('App_model');

    }
	  
	public function index(){

		redirect('app/template/1');
		
 	}
	
	public function template($id = 1){
		
		
		if($this->App_model->get_temporal($id)){
			
			redirect('app/html/'.$id.'/'.$this->App_model->get_temporal($id)->id_html);
		}

		$data['title'] = "HTML ebay";
			
		$data['keywords'] = "";

		$data['description'] = "";
			
		$data['reference'] = 'APP';

		$data['view'] = url_title($this->App_model->get_template($id), 'underscore').'/'.url_title($this->App_model->get_template($id), 'underscore');
		
		$data['folder_template'] = url_title($this->App_model->get_template($id), 'underscore');
			
		$data['robots'] = 'noindex, nofollow';
		
		$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
		
		$data['template'] = $this->App_model->get_template($id);
		
		$data['html'] = $this->App_model->get_primary($id);
		
		$data['style'] = $this->App_model->get_style_html($data['html']->id_html);
		
		$data['social'] = $this->App_model->get_social_html($data['html']->id_html);
		
		$data['menu'] = $this->App_model->get_menu_html($data['html']->id_html);
		
		$data['tabs'] = $this->App_model->get_tabs_html($data['html']->id_html);
		
		$data['carrusel'] = $this->App_model->get_carrusel_html($data['html']->id_html);
		
		$this->load->view('layout', $data);
		
		
 	}
	
	public function html($id = 1, $id_html = 0){
		
		if($id_html == 0){
			
			$this->load->model('Clone_template_model');
			$html = $this->Clone_template_model->clone_template($id);
			redirect('app/html/'.$id.'/'.$html);

		}else{
			
			$this->load->model(url_title($this->App_model->get_template($id), 'underscore').'_model','html_model');
				
			$data['title'] = "HTML ebay";
				
			$data['keywords'] = url_title($this->App_model->get_template($id), 'underscore').'_model';
	
			$data['description'] = "";
				
			$data['reference'] = 'APP';
	
			$data['view'] = url_title($this->App_model->get_template($id), 'underscore').'/'.url_title($this->App_model->get_template($id), 'underscore');
			
			$data['folder_template'] = url_title($this->App_model->get_template($id), 'underscore');
				
			$data['robots'] = 'noindex, nofollow';
			
			$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
			
			$data['template'] = $this->App_model->get_template($id);
		
			$data['html'] = $this->html_model->get_html($id,$id_html);
			
			$data['style'] = $this->html_model->get_style_html($data['html']->id_html);
			
			$data['social'] = $this->html_model->get_social_html($data['html']->id_html);
			
			$data['menu'] = $this->html_model->get_menu_html($data['html']->id_html);
			
			$data['tabs'] = $this->html_model->get_tabs_html($data['html']->id_html);
			
			$data['carrusel'] = $this->html_model->get_carrusel_html($data['html']->id_html);
			
			$this->load->view('layout', $data);
		
		}
		
 	}

 	public function updateInputText(){
 		
		/*$this->load->helper('form');
 		
		if ($this->input->post('id')){
			
			
			
		}else{
				
			show_404();
		}*/
 	}
	
	public function up_load_image(){
		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$folder_template = $this->input->post('folder_template');
			
			$config['upload_path'] = $folder_template.'/top/';
			$config['allowed_types'] = '*';
			$config['max_size']     = '500';
			$config['max_width'] = '200';
			$config['max_height'] = '200';
			$config['overwrite'] = FALSE;
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('file')){
				
				$this->load->model(url_title($this->App_model->get_template($id), 'underscore').'_model','html_model');
				
			}else{
				
				echo $folder_template.'/top/';
				echo $this->upload->display_errors('<div role="alert" class="alert alert-danger">', '</div>');
			}
			
			
		}else{
			
			show_404();
		}

	}
}
