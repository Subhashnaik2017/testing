<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {


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

function manage_category()
{

$data['view_file']="category/create";

$this->template->admin($data);

}

/*function mytest()
{

echo "thejldasjfldjsaf dslafj ldsjfl echo ";

}*/

function manage_jobprofile()
{

$data['view_file']="category/create_jobprofile";

$this->template->admin($data);

}

function manage_recruiter()
{

$data['view_file']="category/create_recruiter";

$this->template->admin($data);

}

}