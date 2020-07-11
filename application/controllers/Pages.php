<?php
class Pages extends CI_Controller {
  // http://localhost:8888/php/ci3-demo/index.php/pages/
  public function index() {
    echo "Main Index";
  }

  public function view($page = 'home')
  {
    error_log("CI3-DEMO: page=$page");

    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
            // Whoops, we don't have a page for that!
            echo("ERROR: requested page [$page]\n");
            error_log("CI3-DEMO: [$page] not found");
            show_404(); // ken: will exit logic  here!!
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);   // Dump the content of the given view
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }

  public function test($page = 'something')
  {
    echo "<li>Controller: Pages\n";
    echo "<li>Function: test\n";  // this is case insensitive
    echo "<li>page: $page\n";     // this is case sensitive
  }

  // http://localhost:8888/php/ci3-demo/index.php/pages/arglist/aaa/222/33123
  // http://localhost:8888/php/ci3-demo/index.php/pages/arglist/$arg1/$arg2/$arg3
  public function arglist($arg1 = '1', $arg2 = '2', $arg3 = '3')
  {
    echo "<li>Controller: Pages\n";
    echo "<li>Function: arglist\n";  // this is case insensitive
    echo "<li>arg1: $arg1\n";     // this is case sensitive
    echo "<li>arg2: $arg2\n";     // this is case sensitive
    echo "<li>arg3: $arg3\n";     // this is case sensitive
  }

}
