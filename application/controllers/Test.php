<?php
class Test extends CI_Controller {
  // http://localhost:8888/php/ci3-demo/index.php/pages/
  public function index() {
    echo "This is a Testing Controller";
  }

  public function test_echo()
  {
    echo "Testing Echo<br/>";
    echo "Testing Testing";
  }
}
