<?php
class Login_C extends Controller
{
    public function index()
    {
        $isipsn['psn'] = $this->session->set_flashdata('pesan');
        $this->load->view('login', $isipsn);
    }