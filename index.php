<?php
require __DIR__."./vendor/autoload.php";


use Spipu\Html2Pdf\Html2Pdf;

if(isset($_POST['crear'])){

    // Recoger contenido desde otro fichero
ob_start();
require_once "print_view.php";
$html = ob_get_clean();
// formulacion
$html2pdf = new Html2Pdf('P','A4', 'es', 'true', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generated.pdf');
}

?>

<form action="" method="POST">
   <input type="text" placeholder="Titulo" name="titulo">
    <button type="submit" name="crear" >Crea tu pdf</button>
    
</form>
