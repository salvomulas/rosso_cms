<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends MY_Controller {

    public function index() {
        $this->PageNotFound();
    }

    public function PageNotFound() {
        $data['page_title'] = "404";
        $data['err_title'] = "404 - Seite nicht gefunden";
        $data['err_message'] = "Die von dir gesuchte Seite konnte nicht gefunden werden!";
        $this->load->view("meta/metadata", $data);
        $this->load->view("elements/topNav");
        $this->load->view("meta/error", $data);
    }

    public function ValidationFailed() {

    }

    public function PermissionDenied() {
        $data['page_title'] = "403";
        $data['err_title'] = "403 - Zugriff verweigert";
        $data['err_message'] = "Du hast keine Berechtigung, auf diese Seite zuzugreifen!";
        $this->load->view("meta/metadata", $data);
        $this->load->view("elements/topNav");
        $this->load->view("meta/error", $data);
    }

}

