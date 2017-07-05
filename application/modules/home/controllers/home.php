<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


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


function mytest()
{

echo "thejldasjfldjsaf dslafj ldsjfl echo ";

}


}