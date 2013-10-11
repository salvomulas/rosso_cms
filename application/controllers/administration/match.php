<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Match extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users');
        $this->load->model('articles');
    }

    public function index()
    {
        $this->show();
    }

    public function show()
    {
        if ($this->session->userdata('is_logged_in')) {

            $this->load->library('pagination');

            // Pagination properties
            $config = array();
            $config["base_url"] = base_url() . "administration/show";
            $config["total_rows"] = $this->articles->countArticles();
            $config["per_page"] = 20;
            $config["uri_segment"] = 3;

            // Initialize Pagination
            $this->pagination->initialize($config);

            // Set the offset and create links
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["links"] = $this->pagination->create_links();

            // Load articles
            $data['matchReports'] = $this->articles->getArticlesLimit($config['per_page'], $page);

            $data['page_title'] = "Matchberichte";

            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/view_matchReports", $data);
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PermissionDenied");
        }
    }

    public function edit($id) {
        if ($this->session->userdata('is_logged_in')) {

            $data['page_title'] = "Matchbericht bearbeiten";

            $data ['actualUser'] = $this->users->get_user($this->session->userdata('userid'));
            $data ['matchReport'] = $this->articles->getArticle($id);

            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/edit_matchReports", $data);
            $this->load->view("elements/footer");

        } else {
            redirect ("error/PermissionDenied");
        }
    }

}
