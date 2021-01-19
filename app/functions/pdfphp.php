<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Functions;

/**
 * Description of pdfphp
 *
 * @author nyakode
 */
class Pdfphp extends \App\Libs\Fpdf\FPDF {

   public function Header() {
      // Logo
      $this->Image(URI . 'public/images/css_header.png', 3, 3, 20);
      // Arial bold 15
      $this->SetFont('Arial', 'B', 15);
      // Movernos a la derecha
      $this->Cell(80);

      // Salto de línea
      $this->Ln(20);
   }

   public function Footer() {

      // Posición: a 1,5 cm del final
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial', 'I', 8);
      // Número de página
      $this->Image(URI . 'public/images/css_footer.png', 6, 275,200);
   }

}
