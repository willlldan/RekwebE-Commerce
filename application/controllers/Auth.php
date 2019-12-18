<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function registration(){

        $this->form_validation->set_rules('name', 'Name', 'required|trim'); // 'nama atribute form', 'nama lain' , rules
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


       if ($this->form_validation->run() == false) { //jika form validasi gagal
    //     $this->load->view('templates/header');
    //     $this->load->view('home/index');
    //     $this->load->view('templates/footer');
    //     echo "<script type=\"text/javascript\">
    //              $(window).on('load',function(){
    //              $('#modalRegister').modal('show');
    //             });
    //         </script>";
       }else {
          echo "data berhasil ditambahkan" ;
       } 
    }
}