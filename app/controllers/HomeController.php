<?php 

class HomeController extends RenderView
{
  public function index()
  {
    $this->loadView('partials/header', ['title' => 'Upload Avatar - Home']);
    $this->loadView('home', []);
    $this->loadView('partials/footer', []);
  }
}