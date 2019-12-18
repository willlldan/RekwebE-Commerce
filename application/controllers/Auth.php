<? php

defined('BASEPATH') or exit('No direct script acces allowed');

class Auth extends CI_Contoller{

    public function __construct(){
        perent::__construct();
        $this->load->library('form_validation');
    }

    public function registration(){

        $this->form_valiadation->set_rules('name', 'Name', 'required|trim'); // 'nama atribute form', 'nama lain' , rules
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');


       if ($this->form_validation->run() == false) { //jika form validasi gagal

       }else {
          echo "data berhasil ditambahkan" ;
       } 
    }
}