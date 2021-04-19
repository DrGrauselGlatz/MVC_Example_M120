<?php

class Home extends Controller {

    public function index($name = '') {

        $user = $this->model('User');
        $user->id = 1;

        $mail = $user->getMail();

        $this->view('home/index', ['name' => $mail]);
    }
}

?>