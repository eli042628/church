<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->message = array();
    }

    public function index() {
        return 'hello world';
    }

    public function genericMessage($data) {
        $this->message = array(
            'type' => $data['success'],
            'message' => $data['msg']
        );
//            return $this->message;
//            return $message;
    }

}
