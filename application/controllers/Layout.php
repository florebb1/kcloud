<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /**
     * front layout
     */
    public function meta()
    {
        $this->load->view('layout/front/meta');
    }
    public function header ()
    {
        $this->load->view('layout/front/header');
    }
    public function nav ()
    {
        $this->load->view('layout/front/nav');
    }
    public function footer()
    {
        $this->load->view('layout/front/footer');
    }
    public function base_script()
    {
        $this->load->view('layout/front/base_script');
    }
    public function session()
    {
        $this->load->view('layout/front/session');
    }

    /**
     * admin layout
     */
    public function meta()
    {
        $this->load->view('layout/admin/meta');
    }
    public function header ()
    {
        $this->load->view('layout/admin/header');
    }
    public function nav ()
    {
        $this->load->view('layout/admin/nav');
    }
    public function footer()
    {
        $this->load->view('layout/admin/footer');
    }
    public function base_script()
    {
        $this->load->view('layout/admin/base_script');
    }

}