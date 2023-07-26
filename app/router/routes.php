<?php 

$routes = [
  '/' => 'HomeController@index',

  '/upload' => 'AvatarController@index',
  '/avatars' => 'AvatarController@images',
  '/avatars/list/{id}' => 'AvatarController@show',
  '/avatars/remove' => 'AvatarController@remove',
];