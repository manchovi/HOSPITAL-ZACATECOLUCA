<?php

require_once("dompdf_config.inc.php");

$html =
    "<html>
	<body>
        <script type=\"text/php\"> 


        if (isset($pdf) ) { 
          $font = Font_Metrics::get_font(\"helvetica\", \"bold\"); 
          $pdf->page_text(72, 18, \"Header: {PAGE_NUM} of {PAGE_COUNT}\", $font, 6, array(0,0,0)); 
        } 
		</script>  


    <p>Hola mundo!</p>
    </body></html>";

$dompdf = new DOMPDF();
$dompdf->load_html($html);


$dompdf->render();


$pdf = $dompdf->stream('temporal.pdf');



?>