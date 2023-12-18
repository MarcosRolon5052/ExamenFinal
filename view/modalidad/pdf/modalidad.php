<?php
/**
 * Html2Pdf Library - modalidads
 * HTML => PDF converter
 **/
include_once ($_SERVER['DOCUMENT_ROOT'].'/sistemagym/routes.php');
require_once(ROOT_PATH.'vendor/autoload.php');

require_once(CONTROLLER_PATH.'modalidadController.php');
$object = new modalidadController();
$rows = $object->select();


use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include dirname(__FILE__).'/doc/modalidad_html.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', 3);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('modalidad.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
