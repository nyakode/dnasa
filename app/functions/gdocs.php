<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Functions;

/**
 * Description of gdocs
 *
 * @author nyakode
 */
class Gdocs {

   public static function generar() {
      $pdf = new \App\Functions\Pdfphp();
      $pdf->AliasNbPages();
      $pdf->AddPage();
      $pdf->SetFont('Times', '', 12);
      for ($i = 1; $i <= 40; $i++)
         $pdf->Cell(0, 10, 'Imprimiendo línea número ' . $i, 0, 1);
      $pdf->Output();
   }

}
