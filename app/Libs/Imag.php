<?php

namespace App\Libs;

use Image;
use Auth;

class Imag{
  public function url($path = null, $dirrectory = null, $name = null){
    if($path != null){
      if($dirrectory != null){
        $dir = public_path() . $dirrectory;
      }else{
        if(!Auth::guest()){
        $dir = public_path() . '/uploads/'. Auth::user()->id . '/';
        }else{
        $dir = public_path() . '/uploads/0/';
        }
        if(!file_exists($dir)){
         mkdir($dir, 0777, true);
        }
      }
      if($name != null){
        $filename = $name;
      }else{
        $filename = date('y_m_d_h_i_s').'.jpg';
      }
      $img = Image::make($path);
      $img->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
      });
      $img->save($dir . $filename);
      $img->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
      });
      $picsmall = 's'. $filename;
      $img->save($dir . $picsmall);
            $img->resize(100, null, function ($constraint) {
            $constraint->aspectRatio();
      });
      $picsmall2 = 'ss'. $filename;
      $img->save($dir . $picsmall2);
      return $filename;
    }else{
      return false;
    }
  }
}