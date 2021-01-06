<?php

namespace App\Functions;

class Messages {
   private $types = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];
   
   public static  function alerts($data) {
      $html = "";
      for($i = 0; $i < count($data) ; $i++){
         $str = '<div class="alert alert-'.$data[$i]['class'] . ' alert-dismissible fade show mt-md-2" role="alert">';
         $str .= ' <strong>'. $data[$i]['title'] .'</strong> ';
         $str .= $data[$i]['message'];
         $str .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
         $html .= $str;
      }
      
      return $html;
   }
}