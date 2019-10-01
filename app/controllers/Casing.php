<?php

class Casing extends Controller {
    public function index()
    {
        $data['judul'] = "Case";
        $this->view('templates/header', $data);
        $this->view('case/index');
        $this->view('templates/footer');
    }
}