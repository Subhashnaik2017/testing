<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends MY_Controller {


function __construct()
{
	parent::__construct();
	$this->load->module('template');
}


function index()
{

$data['view_file']="home/create";
//print_r($data);
$this->template->admin($data);
//echo "The is HMVC controller23232";

}

function create_institute()
{

$data['view_file']="institute/create";

$this->template->admin($data);

}

/*function mytest()
{

echo "thejldasjfldjsaf dslafj ldsjfl echo ";

}*/

function manage_institute()
{

$data['view_file']="institute/manage";

$this->template->admin($data);

}

}