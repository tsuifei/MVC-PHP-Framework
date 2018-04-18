<?php
class Pages extends Controller
{
    public function __construct()
    {
     
    }
    public function index()
    {
        $data = [
            'title' => 'Welcome',
        ];

        $this->view('pages/index', $data); //不需加.php 會自動去views裡載過來這裡。

    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        //echo 'This is About';
        $this->view('pages/about', $data);
    }
}