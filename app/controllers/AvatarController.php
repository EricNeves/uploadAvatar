<?php

class AvatarController extends RenderView
{
  public function index()
  {
    $method = $_SERVER['REQUEST_METHOD'];
    $response = [];

    $resizeImage = new Resize();
    $avatar = new Avatar();

    if ($method === "POST") {

      if (isset($_FILES['avatar']['tmp_name']) && !empty($_FILES['avatar']['tmp_name'])) {

        $resize = $resizeImage->minify($_FILES);

        if (isset($resize['type_error'])) {

          $response['error'] = $resize['type_error'];

        } else if (isset($resize['image']) && isset($resize['type_img'])) {

          $image = $resize['image'];
          $type_img = $resize['type_img'];

          $add_image = $avatar->add($image, $type_img);

          http_response_code(201);
          ($add_image) ? $response['success'] = "Uploaded Successfully!" : $response['error'] = "Sorry, something went wrong!";

        } else {
          $response['error'] = "Sorry, something went wrong!";
        }

      } else {
        $response['error'] = "Please, send a image!";
      }

    } else {
      http_response_code(405);
      $response['error'] = "Method not allowed";
    }

    echo json_encode($response);
  }

  public function show($id)
  {
    $avatar = new Avatar();

    $image = $avatar->listById((int) $id[0]);

    if ($image) {
      
      header("Content-type: ".$image['img_type']);
      echo $image['avatar'];

    } else {
      header('Location: ../');
    }
  }

  public function images()
  {
    $avatar = new Avatar();

    $this->loadView('partials/header', ['title' => 'Upload Avatar - Avatars']);
    $this->loadView('avatars', [
      "images" => $avatar->list()
    ]);
    $this->loadView('partials/footer', []);
  }

  public function remove() 
  {
    $method = $_SERVER['REQUEST_METHOD'];
    $response = [];

    $avatar = new Avatar();

    if ($method === 'POST') {
      if (isset($_POST['id']) || !empty($_POST)) {

        $deleteAvatar = $avatar->remove($_POST['id']);

        if ($deleteAvatar) {
          http_response_code(200);
          $response['success'] = "Successfully deleted image!";

        } else {
          http_response_code(406);
          $response['error'] = "Sorry, something went wrong!";
        }
      } else {
        http_response_code(406);
        $response['error'] = "Image ID not found!";
      }
    } else {
      http_response_code(405);
      $response['error'] = "Method not allowed";
    }

    echo json_encode($response);
  }
}