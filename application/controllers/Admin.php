<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function index() {
//            $this->genericMessage();
        $this->loginPage();
    }

    public function loginPage() {
        return $this->load->view('login_page');
    }

}
