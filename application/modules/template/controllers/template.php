<?php


class Template extends MY_Controller
{

function __construct()
{
	parent::__construct();
}


function home()
{

	echo "testing of home page";
}



function test()
{

$data="";
$this->admin($data);


}

function admin($data=NULL)
{

$this->load->view('template/adminv',$data);

}

}