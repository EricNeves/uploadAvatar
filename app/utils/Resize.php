<?php 

class Resize 
{
  public function minify($image)
  {
    $originalImage = $_FILES['avatar']['tmp_name'];

    $response = [];

    $allowedTypes = [IMAGETYPE_JPEG, IMAGETYPE_PNG];

    $exif = exif_imagetype($originalImage);

    if (file_exists($originalImage) && in_array($exif, $allowedTypes)) {

      $type = $_FILES['avatar']['type'];
      
      [$originalWidth, $originalHeight] = getimagesize($originalImage);

      $width = 200;
      $height = ($originalHeight / $originalWidth) * $width;

      switch($type) {
        case 'image/png':
          $createImage = imagecreatefrompng($originalImage);
          break;
        case 'image/jpeg':
          $createImage = imagecreatefromjpeg($originalImage);
      }

      $newImage = imagecreatetruecolor($width, $height);

      imagecopyresampled($newImage, $createImage, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);

      ob_start();
      imagejpeg($newImage, null, 100);
      $result = ob_get_clean();

      $response = [
        "type_img" => $type,
        "image" => $result
      ];
    
      imagedestroy($newImage);
      imagedestroy($createImage);

    } else {
      $response['type_error'] = "Invalid file format - Accept: PNG | JPEG";
    }

    return $response;
  }
}