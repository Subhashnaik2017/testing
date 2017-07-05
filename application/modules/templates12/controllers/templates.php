<?php

class Templates extends MY_Controller
{

function __construct()
{
	parent::__construct();
}

function index()
{

echo "wellcome to hmvc 12121";


}
function home1()
{

echo "testing of home page";
}


function test()
{

$data="";
$test = $this->admin($data);
print_r($test);


}
function admin($data=NULL)
{

$this->load->view('templates/adminv',$data);

}
}