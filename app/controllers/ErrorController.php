<?php 

class ErrorController extends RenderView
{
  public function index()
  {
    $this->loadView('partials/header', ['title' => 'Upload Avatar - Home']);
    $this->loadView('404', []);
    $this->loadView('partials/footer', []);
  }
}