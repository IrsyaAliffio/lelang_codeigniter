<?php

class Dashboard extends CI_Controller {
    public function index(){
        $data['title'] = "LELANG.ID - HOME";
        $this->load->view('index',$data); 
    }
}