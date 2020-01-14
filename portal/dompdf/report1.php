<?php
//require_once 'dompdf/autoload.inc.php';
//use Dompdf\Dompdf;
require_once("dompdf_config.inc.php");

if (!isset($_GET['pdf'])) {
	$content = '<html>';
	$content .= '<head>';
	$content .= '<style>';
	$content .= 'body { font-family: DejaVu Sans; }';
	$content .= '</style>';
	$content .= '</head><body>';
	$content .= '<h1>Ejemplo generaci&oacute;n PDF</h1>';
	$content .= '<a href="report1.php?pdf=1">Generar documento PDF</a>';
	$content .= '</body></html>';
	echo $content;
	exit;
}



$content = '<html>';
$content .= '<head>';
$content .= '<style>';
$content .= '</style>';
$content .= '</head><body>';
$content .= '<h1>Ejemplo generaci&oacute;n PDF</h1>';
$content .= 'Almacena en una variable todo el contenido que quieras incorporar ';
$content .= 'en el documento <b>formato HTML</b> para generar a partir de &eacute;ste ';
$content .= 'el documento PDF.<br><br>';
$content .= 'Ejemplo lista<br>';
$content .= '<ul><li>Uno</li><li>Dos</li><li>Tres</li></ul>';
$content .= 'Ejemplo imagen<br><br>';
$content .= '<img src="logo-openwebinars.png" alt="PNG" />';
$content .= '<img src="mario.jpg" alt="JPG" />';
$content .= '<img src="nose.bmp" alt="bmp" />';
$content .= '<img src="gato.gif" alt="gif" />';
$content .= '</body></html>';

//echo $content; exit;
$dompdf = new DOMPDF();
//$dompdf = new Dompdf();
$dompdf->load_html($content);
$dompdf->set_paper("A4", "portrait");
//$dompdf->setPaper('A4', 'landscape'); // (Opcional) Configurar papel y orientación
$dompdf->render(); // Generar el PDF desde contenido HTML
$pdf = $dompdf->output(); // Obtener el PDF generado
$dompdf->stream("ejemplo.pdf", array('Attachment' => 0)); // Enviar el PDF generado al navegador

/*
$dompdf = new DOMPDF();
$dompdf->load_html(file_get_contents('index1.php'));
$dompdf->render();
$dompdf->stream("ejemplo-basico.pdf", array('Attachment' => 0));
*/

?>