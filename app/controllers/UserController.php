<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->call->model('User_model');

    }

    public function index()
    {
        $data['users'] = $this->User_model->getUser();
        $this->call->view('home', $data);
    }

    public function insert()
    {   
        if ($this->form_validation->submitted())
        {   $this->form_validation
                ->name('username')
                    ->required()
                    ->min_length(5)
                    ->max_length(20)
                ->name('email')
                    ->valid_email()
                ->name('password')
                    ->required()
                    ->min_length(5)
                ->name('repassword')
                    ->matches('password')
                    ->required()
                    ->min_length(5);
            
            if ($this->form_validation->run())
            {
            $username =$this->io->post('username');
            $email =$this->io->post('email');
            $password =md5($this->io->post('password'));

            $this->User_model->insert($username, $email, $password);
            redirect('');
            
            }else
            {
                echo $this->form_validation->error();
            }
        }	
    }
    
    public function delete($data)
    {
        $this->User_model->delete($data);
            redirect('');
    }

    public function editset($id)
    {
        $data['users'] = $this->User_model->editset($id);
        $this->call->view("edit", $data);
    }
    public function edit()
    {
        if ($this->form_validation->submitted())
        {   $this->form_validation
                ->name('id')
                ->required()
                ->name('username')
                    ->required()
                    ->min_length(5)
                    ->max_length(20)
                ->name('email')
                    ->valid_email()
                ->name('password')
                    ->required()
                    ->min_length(5)
                ->name('repassword')
                    ->matches('password')
                    ->required()
                    ->min_length(5);
            
            if ($this->form_validation->run())
            {
            $id =$this->io->post('id');
            $username =$this->io->post('username');
            $email =$this->io->post('email');
            $password =md5($this->io->post('password'));

            $this->User_model->edit($id, $username, $email, $password);
            redirect('');
            
            }else
            {
                echo $this->form_validation->error();
            }
        }	
    }

}
?>
