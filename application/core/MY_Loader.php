<?php

class MY_Loader extends CI_Loader {

    public function __construct() {
        $this->_ci_view_paths = array(
            APPPATH . '../resources/views/' => TRUE
        );

        parent::__construct();
    }

}