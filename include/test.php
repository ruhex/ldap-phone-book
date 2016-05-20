
<?php
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class

$html = <<<'ENDHTML'
   <html><head><style>body { font-family: DejaVu Sans }</style>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<table width=100% align="center">
        <tr> 
          <td width="94" height="30" bgcolor="#04B404">ФИО</td>
          <td width="94" height="30" bgcolor="#04B404">Отдел</td>
          <td width="94" height="30" bgcolor="#04B404">E-mail</td>
          <td width="94" height="30" bgcolor="#04B404">Внутренний номер</td>
        </tr>
        
        
            
            
                 
          
        
           

      </table>
ENDHTML;



$options = new Options();
$options->set('defaultFont', 'Calibri');
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>
