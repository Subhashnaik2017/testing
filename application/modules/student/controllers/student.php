<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends MY_Controller {


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

function add_student()
{

$data['view_file']="student/create";

$this->template->admin($data);

}

function mytest()
{

echo "thejldasjfldjsaf dslafj ldsjfl echo ";

}

function manage_student()
{

$data['view_file']="student/manage";

$this->template->admin($data);

}

}