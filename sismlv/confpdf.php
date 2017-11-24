<?php

  $content = ob_get_clean();
  require_once('vendor/autoload.php');
  use Spipu\Html2Pdf\Html2Pdf;
  try
  {
      $html2pdf = new HTML2PDF('P', 'Letter', 'es', true, 'UTF-8', 3);
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content);
      $html2pdf->Output('inf_inv.pdf');
  }
  catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
}
?>