<?php

Class Login extends MY_Controller
{
    function index()
	{
        $this->load->view('admin/login/index');
	}
}