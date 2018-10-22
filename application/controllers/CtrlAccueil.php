<?php

class CtrlAccueil extends CI_Controller
{
    public function index()
    {
        $this->load->model('ModelConference');
        $data['lesConferences']=$this->ModelConference->getAllConferences();
        $this->load->view('viewAccueil', $data);
    }
}




?>