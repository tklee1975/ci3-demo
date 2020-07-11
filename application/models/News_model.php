<?php
class News_model extends CI_Model {

  public function __construct()
  {
          $this->load->database();
  }

  public function get_news($slug = FALSE) // slug= not filter !
  {
    if ($slug === FALSE)
    {
            $query = $this->db->get('news');
            return $query->result_array();
    }

    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }

  public function set_news($title, $text)
  {
      $this->load->helper('url');

      $slug = url_title($title, 'dash', TRUE);

      $data = array(
          'title' => $title,
          'slug' => $slug,
          'text' => $text
      );

      return $this->db->insert('news', $data);
  }

}
