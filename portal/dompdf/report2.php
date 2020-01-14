<?php
require_once("dompdf_config.inc.php");

$html =
'<html><body>'.
'<p>Put your html here, or generate it with your favourite '.
'templating system.<br><br>Prof. Manuel Gámez</p>'.
'</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$pdf = $dompdf->output();
//$dompdf->stream("sample.pdf");
$dompdf->stream("repochovi.pdf", array('Attachment' => 0));

?>