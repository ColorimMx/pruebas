<?php
crear(); //Creamos el archivo
leer();  //Luego lo leemos

//Para crear el archivo
function crear(){
    $xml = new DomDocument('1.0', 'UTF-8');

    $comprobante = $xml->createElement('cfdi:Comprobante');
    $comprobante->setAttribute('xmlns:cfdi', 'http://www.sat.gob.mx/cfd/3');
    $comprobante->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
    //$comprobante->setAttribute('xmlns:cartaporte20', 'http://www.sat.gob.mx/CartaPorte20');
    $comprobante->setAttribute('xsi:schemaLocation', 'http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd http://www.sat.gob.mx/CartaPorte20 http://www.sat.gob.mx/sitio_internet/cfd/CartaPorte/CartaPorte20.xsd');
    $comprobante->setAttribute('Version', '3.3');
    $comprobante->setAttribute('Serie', 'TP');
    $comprobante->setAttribute('Folio', '10000000001');
    $comprobante->setAttribute('Fecha', '2021-12-06T11:38:44');
    $comprobante->setAttribute('Sello', '');
    $comprobante->setAttribute('NoCertificado', '00001000000409491341');
    $comprobante->setAttribute('Certificado', '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');
    $comprobante->setAttribute('SubTotal', '0');
    $comprobante->setAttribute('Moneda', 'XXX');
    $comprobante->setAttribute('Total', '0');
    $comprobante->setAttribute('TipoDeComprobante', 'T');
    $comprobante->setAttribute('LugarExpedicion', '01180');


    $comprobante = $xml->appendChild($comprobante);

    $emisor = $xml->createElement('cfdi:Emisor');
    $emisor = $comprobante->appendChild($emisor);
    $emisor->setAttribute('Rfc','CIM581206CI9');
    $emisor->setAttribute('Nombre','COLORANTES IMPORTADOS SA DE CV');
    $emisor->setAttribute('RegimenFiscal','601');


    $receptor = $xml->createElement('cfdi:Receptor');
    $receptor = $comprobante->appendChild($receptor);
    $receptor->setAttribute('Rfc','CIM581206CI9');
    $receptor->setAttribute('Nombre','COLORANTES IMPORTADOS SA DE CV');
    $receptor->setAttribute('UsoCFDI','P01');

    $conceptos = $xml->createElement('cfdi:Conceptos');
    $conceptos = $comprobante->appendChild($conceptos);

    $concepto = $xml->createElement('cfdi:Concepto');
    $concepto = $conceptos->appendChild($concepto);
    $concepto->setAttribute('ClaveProdServ','60121804');
    $concepto->setAttribute('NoIdentificacion','2020010043');
    $concepto->setAttribute('Cantidad','1.00000');
    $concepto->setAttribute('ClaveUnidad','H87');
    $concepto->setAttribute('ValorUnitario','38.7000');
    $concepto->setAttribute('Importe','38.70');



    $xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    $xml->save('traslado.xml');

    //Mostramos el XML puro
    echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>".
        htmlentities($el_xml)."
<hr>";
}

//Para leerlo
function leer(){
    echo "<p><b>Ahora mostrandolo con estilo</b></p>";
    $xml = simplexml_load_file('traslado.xml');
    $salida ="";
    foreach($xml->libro as $item){
        $salida .=
            "<b>Autor:</b> " . $item->autor . "
".
            "<b>Título:</b> " . $item->titulo . "
".
            "<b>Ano:</b> " . $item->anio . "
".
            "<b>Editorial:</b> " . $item->editorial . "
<hr/>";
    }
    echo $salida;
}