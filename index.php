<?php
if(isset($_POST['submit'])){
require_once("dompdf_config.inc.php");
$html = file_get_contents('e-ticket.html');

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$output = $dompdf->output();
file_put_contents('eticket.pdf', $output);
echo '<script type="text/javascript">alert("checkout the file named eticket.pdf")</script>';
}
//$dompdf->stream("sample.pdf"); 
?> 

<html>
    <head>
    
    </head>
    <body>
        <form method="post" action="">
            <input type="submit" name="submit" value="Generate pdf">
            
        </form>
        
    </body>
</html>