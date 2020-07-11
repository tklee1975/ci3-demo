<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
          $data['news'] = $this->news_model->get_news();

          $data['news'] = $this->news_model->get_news();
          $data['title'] = 'News archive';

          $this->load->view('templates/header', $data);
          $this->load->view('news/index', $data);
          $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
          $data['news_item'] = $this->news_model->get_news($slug);
          if (empty($data['news_item']))
          {
                  show_404();
          }

          $data['title'] = $data['news_item']['title'];

          $this->load->view('templates/header', $data);
          $this->load->view('news/view', $data);
          $this->load->view('templates/footer');
        }


        public function success() {
          $data = array('title' => "News Creation",
                        'news_url' => site_url('news'));

          $this->load->view('templates/header', $data);
          $this->load->view('news/success', $data);
          $this->load->view('templates/footer');
        }

  public function create()
  {
      $this->load->helper('form');
      $this->load->library('form_validation');  // CI_Form_validation

      $data['title'] = 'Create a news item';

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('text', 'Content', 'required');

      if ($this->form_validation->run() === FALSE)
      {
          // Creation Form
          $this->load->view('templates/header', $data);
          $this->load->view('news/create');
          $this->load->view('templates/footer');

      }
      else

      {   // Creation Action
          $text = $this->input->post('text');
          $title = $this->input->post('title');
          $this->news_model->set_news($title, $text);
          //$this->load->view('news/success');
          redirect('news/success');
          //$this->
      }
  }
}
