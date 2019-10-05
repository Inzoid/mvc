<?php

class Casing extends Controller {
    public function index()
    {
        $data['judul'] = "Case";
        $this->view('templates/header', $data);
        $this->view('case/index');
        $this->view('templates/footer');
    }

    public function faq()
    {
        $data['judul'] = "FAQ";
        $this->view('templates/header', $data);
        $this->view('case/faq');
        $this->view('templates/footer');
    }
}