<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
     parent::__construct();
     $this->load->model('bases_model');
    }
    
	public function index()
	{
		$this->load->view('headerbootstrap');
		$this->load->view('headerlogin');
		$this->load->view('footerbootstrap');   
	}
    
    public function validaRegister()
    {
        $this->load->view('headerbootstrap');
		$this->load->view('headerlogin4');
		$this->load->view('footerbootstrap');
    }
    
    public function login()
    {
        $this->load->view('headerbootstrap');
		$this->load->view('headerlogin1');
		$this->load->view('footerbootstrap');
    }
    
    public function err1()
    {
        $this->load->view('headerbootstrap');
		$this->load->view('headerlogin2');
		$this->load->view('footerbootstrap');
    }
    
    public function err2()
    {
        $this->load->view('headerbootstrap');
		$this->load->view('headerlogin3');
		$this->load->view('footerbootstrap');
    }
    
    public function mostrarTareas()
    {
        if($this->session->userdata('nivel')!='3')
            redirect('', 'refresh');
        else{
           
            $this->load->view('headerbootstrap');
            $this->load->view('menu');
            $this->load->view('footerbootstrap');
            }
    }
    
    
    public function agregarTareas()
    {
        if($this->session->userdata('nivel')!='3')
            redirect('', 'refresh');
        else{
            $this->load->view('headerbootstrap');
            $this->load->view('agregartarea');
            $this->load->view('footerbootstrap');
        }
    }
    
    
    public function validaLogin(){
       $this->form_validation->set_rules('usern','usern','trim|required');
       $this->form_validation->set_rules('pwd','pwd','trim|required');  
        
       if ($this->form_validation->run() != FALSE){    
       $username=$this->input->post('usern',TRUE);
       $password=$this->input->post('pwd',TRUE);
       $data = array(
               'username'=> $username,'password'=>$password);
       $data["user"]=$this->bases_model->validaLogin($data);    
          /*$data = array(
                   'login'=> $this->input->post('login'),'password'=>$this->input->post('pwd'));
          $usuarios = $this->bases_model->validaLogin($data);
          $data["usuarios"]=$this->bases_model->validaLogin($data); */
       if ($data["user"]==FALSE)
         redirect('/Welcome/login', 'location');   
       else{    
       $datasession="";
       foreach($data["user"]->result() as $row)
          {$datasession = array(
            'username'=> $row->username,'password'=> $row->password,
            'nivel'=> $row->nivel,'id'=> $row->id,);}
        $this->session->set_userdata($datasession);
         if($this->session->userdata('nivel')=='3')
            redirect('/Welcome/mostrarTareas', 'location');     
           else{
            redirect('/Welcome/admin', 'location');    
           }
        }
       }
       else
       {
        $this->load->view('headerbootstrap1');
        $this->load->view('headerlogin');
        $this->load->view('footerbootstrap1');
       }
    
    }
    
    public function register(){
       $this->form_validation->set_rules('username','username','trim|required');
       $this->form_validation->set_rules('matricula','matricula','trim|required');
       $this->form_validation->set_rules('telefono','telefono','trim|required');
       $this->form_validation->set_rules('password','password','trim|required');
       $this->form_validation->set_rules('confirm_password','confirm_password','trim|required');  
       $this->form_validation->set_rules('nivel','nivel','trim|required');  
        
       
       $username=$this->input->post('username',TRUE);
       $matricula=$this->input->post('matricula',TRUE);
       $telefono=$this->input->post('telefono',TRUE);
       $password=$this->input->post('password',TRUE);
       $confirm_password=$this->input->post('confirm_password',TRUE);
       $nivel=$this->input->post('nivel',TRUE);
        
       if ($password == $confirm_password){
           $data = array(
               'username'=> $username,'matricula'=>$matricula,'telefono'=> $telefono,'password'=> $password,'nivel'=> $nivel);
            $data["usuario"]=$this->bases_model->register($data);
           
           if ($data["usuario"]==FALSE)
                redirect('/Welcome/err2', 'location');
           else
                redirect('/Welcome/validaRegister', 'location');
       }
       else
       {
            redirect('/Welcome/err1', 'location');
       }
    
}
    public function insertTarea(){
       $this->form_validation->set_rules('nombre','nombre','trim|required');
       $this->form_validation->set_rules('status','status','trim|required'); 
       
         
               $nombre = $this->input->post('nombre');
               $status = $this->input->post('status');
               
    
               $inser = (['nombre'=>$nombre,
                          'status'=>$status]);
               $data = array_merge($inser);
               if($this->bases_model->insertTarea($data) == false)
               {
                   //$this->session->set_flashdata('pesan','Data in database');
                   redirect('/Welcome/agregarTareas', 'refresh');
               }
               else
               {
                   $this->index();
               }
         
           
       
       
    }
     
    public function cerrarSesion(){
     $datasession = array('nivel' => '');
        $this->session->unset_userdata($datasession);
       $this->session->sess_destroy();
       redirect('', 'refresh');
    }
}
