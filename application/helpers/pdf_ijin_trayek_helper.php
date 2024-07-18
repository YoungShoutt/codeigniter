 
<?php
define('FPDF_FONTPATH', 'font/');
include_once APPPATH . '/third_party/fpdf/fpdf.php';

class pdf_master extends FPDF
{
  var $widths;
  var $aligns;

  function SetWidths($w)
  {
    //Set the array of column widths
    $this->widths = $w;
  }

  function SetAligns($a)
  {
    //Set the array of column alignments
    $this->aligns = $a;
  }

  function Row($data)
  {
    //Calculate the height of the row
    $nb = 0;
    for ($i = 0; $i < count($data); $i++)
      $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
    $h = 5 * $nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for ($i = 0; $i < count($data); $i++) {
      $w = $this->widths[$i];
      $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
      //Save the current position
      $x = $this->GetX();
      $y = $this->GetY();
      //Draw the border
      $this->Rect($x, $y, $w, $h);
      //Print the text
      $this->MultiCell($w, 5, $data[$i], 0, $a);
      //Put the position to the right of the cell
      $this->SetXY($x + $w, $y);
    }
    //Go to the next line
    $this->Ln($h);
  }

  function CheckPageBreak($h)
  {
    //If the height h would cause an overflow, add a new page immediately
    if ($this->GetY() + $h > $this->PageBreakTrigger)
      $this->AddPage($this->CurOrientation);
  }

  function NbLines($w, $txt)
  {
    //Computes the number of lines a MultiCell of width w will take
    $cw = &$this->CurrentFont['cw'];
    if ($w == 0)
      $w = $this->w - $this->rMargin - $this->x;
    $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
    $s = str_replace("\r", '', $txt);
    $nb = strlen($s);
    if ($nb > 0 and $s[$nb - 1] == "\n")
      $nb--;
    $sep = -1;
    $i = 0;
    $j = 0;
    $l = 0;
    $nl = 1;
    while ($i < $nb) {
      $c = $s[$i];
      if ($c == "\n") {
        $i++;
        $sep = -1;
        $j = $i;
        $l = 0;
        $nl++;
        continue;
      }
      if ($c == ' ')
        $sep = $i;
      $l += $cw[$c];
      if ($l > $wmax) {
        if ($sep == -1) {
          if ($i == $j)
            $i++;
        } else
          $i = $sep + 1;
        $sep = -1;
        $j = $i;
        $l = 0;
        $nl++;
      } else
        $i++;
    }
    return $nl;
  }

  function Header()
  {

    $CI = &get_instance();

    // $this->SetXY(10, 20);
    // $this->SetFont('Times', '', 10);

    // $this->SetLineWidth(0, 2);
    // $this->Line(10, 22, 290, 22);

    // $this->SetLineWidth(1, 5);
    // $this->Line(10, 24, 290, 24);

    // $this->SetLineWidth(0, 1);



    // $this->setXY(10, 30);

    // $cellx3 = $this->getX();
    // $celly3 = $this->getY();
    // $this->setXY($cellx3, $celly3);
    // $this->Cell(190, 225, '', 1, 1, 'C', FALSE);

    $this->setXY(14, 20); //Berhubungan dengan titik awal di Program conytroler

    // $cellx3 = $this->getX();
    // $celly3 = $this->getY();
    // $this->setXY($cellx3, $celly3);
    // $this->Cell(184, 46, '', 1, 1, 'C', FALSE);

    //  $this->setXY(13, 160);

    //  $cellx3 = $this->getX();
    //  $celly3 = $this->getY();
    //  $this->setXY($cellx3, $celly3);
    //  $this->Cell(184, 120, '', 1, 1, 'C', FALSE);

    // $cellx3 = $this->getX();
    // $celly3 = $this->getY();
    // $this->SetFont('times', '', 11);
    // $this->setXY(0, 5);
    // $this->Cell(0, 0, "", 0, 0, 'L', $this->Image('images/Kota_Batu.png', 25, 7, 30, 35));
    // $this->SetFont('arial', 'B', 24);
    // $this->SetTextColor(0, 0, 139);
    // $this->setXY(70, 8);
    // $this->Cell(202, 10, 'PEMERINTAH KOTA BATU', 0, 1, 'C', FALSE);
    // $this->setXY(70, 18);
    // $this->Cell(202, 10, 'DINAS PERHUBUNGAN', 0, 1, 'C', FALSE);
    // $this->SetLineWidth(0.1);
    // $this->Line(70, 33, 272, 33);
    // $this->SetLineWidth(0.5);
    // $this->Line(70, 34, 272, 34);

    // $this->setXY(13, 212);

    // $cellx3 = $this->getX();
    // $celly3 = $this->getY();
    // $this->setXY($cellx3, $celly3);
    // $this->Cell(184, 10, '', 1, 1, 'C', FALSE);

    // $this->setXY(10, 30);
    // $cellx3 = $this->getX();
    // $celly3 = $this->getY();
    // $this->setXY($cellx3, $celly3);
    // $this->Cell(7, 10, 'NO', 1, 1, 'C', FALSE);

    // $cellx3 = $this->getX() + 7;
    // $celly3 = $this->getY();
    // $this->setXY($cellx3, $celly3 - 10);
    // $this->Cell(35, 10, 'Ini Header', 1, 1, 'C', FALSE);


  }

  function Footer()
  {
    $this->SetY(-15);
    $this->SetFont('Arial', 'I', 8);
    //Page number
    $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'R');
    if ($this->isFinished) {
      // Go to 1.5 cm from bottom
      $this->SetY(-15);
      // Select Arial italic 8
      // $this->SetFont('Arial', '', 8);
      // $this->SetTextColor(0,0,205);
      // Print centered page number

      // $this->setXY(13, 251);
      // $this->Cell(20, 5, 'PURCHASER :', 0, 0, 'L', FALSE);
      // $this->setXY(130, 251);
      // $this->MultiCell(65, 5, 'PLEASE ACKNOWLEDGE RECEIPT OF THIS RFQ SIGNATURE :', 0);
      // $this->setXY(130, 272);
      // $this->Cell(20, 5, 'DATE :', 0, 0, 'L', FALSE);

      // $this->SetLineWidth(0.1);
      // $this->Line(13, 250, 197, 250);

      // $this->SetLineWidth(0.5);
      // $this->Line(13, 278, 197, 278);
    }
  }
}

?>
