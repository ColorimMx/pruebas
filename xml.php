<?php

crear(); //Creamos el archivo
leer();  //Luego lo leemos

//Para crear el archivo
function crear(){
    $xml = new DomDocument('1.0', 'UTF-8');

    $comprobante = $xml->createElement('cfdi:Comprobante');
    $comprobante->setAttribute('xmlns:cfdi', 'http://www.sat.gob.mx/cfd/3');
    $comprobante->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
    $comprobante->setAttribute('Certificado', '');
    $comprobante->setAttribute('CondicionesDePago', 'CONTADO');
    $comprobante->setAttribute('Fecha', '2021-11-05T16:38:44');
    $comprobante->setAttribute('Folio', '10000047460');
    $comprobante->setAttribute('FormaPago', '99');
    $comprobante->setAttribute('LugarExpedicion', '01180');
    $comprobante->setAttribute('MetodoPago', 'PUE');
    $comprobante->setAttribute('Moneda', 'MXN');
    $comprobante->setAttribute('NoCertificado', '00001000000409491341');
    $comprobante->setAttribute('Sello', '');
    $comprobante->setAttribute('Serie', 'C');
    $comprobante->setAttribute('SubTotal', '193.50');
    $comprobante->setAttribute('TipoCambio', '1');
    $comprobante->setAttribute('TipoDeComprobante', 'I');
    $comprobante->setAttribute('Total', '224.46');
    $comprobante->setAttribute('Version', '3.3');
    $comprobante->setAttribute('xsi:schemaLocation', 'http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd');
    $comprobante = $xml->appendChild($comprobante);

    $emisor = $xml->createElement('cfdi:Emisor');
    $emisor = $comprobante->appendChild($emisor);
    $emisor->setAttribute('Nombre','COLORANTES IMPORTADOS SA DE CV');
    $emisor->setAttribute('RegimenFiscal','601');
    $emisor->setAttribute('Rfc','CIM581206CI9');

    $receptor = $xml->createElement('cfdi:Receptor');
    $receptor = $comprobante->appendChild($receptor);
    $receptor->setAttribute('Nombre','VM/ MERCADO LIBRE');
    $receptor->setAttribute('Rfc','XAXX010101000');
    $receptor->setAttribute('RegimenFiscal','G01');

    $conceptos = $xml->createElement('cfdi:Conceptos');
    $conceptos = $comprobante->appendChild($conceptos);

    $concepto = $xml->createElement('cfdi:Concepto');
    $concepto = $conceptos->appendChild($concepto);
    $concepto->setAttribute('Cantidad','1.00000');
    $concepto->setAttribute('ClaveProdServ','60121804');
    $concepto->setAttribute('ClaveUnidad','H87');
    $concepto->setAttribute('Descripcion','CITOCOL PASTILLA AZUL BLUE 43');
    $concepto->setAttribute('Importe','38.70');
    $concepto->setAttribute('NoIdentificacion','2020010043');
    $concepto->setAttribute('Unidad','PIEZAS');
    $concepto->setAttribute('ValorUnitario','38.7000');

    $cImpuestos = $xml->createElement('cfdi:Impuestos');
    $cImpuestos = $concepto->appendChild($cImpuestos);

    $cTraslados = $xml->createElement('cfdi:Traslados');
    $cTraslados = $cImpuestos->appendChild($cTraslados);

    $cTraslado = $xml->createElement('cfdi:Traslado');
    $cTraslado = $cTraslados->appendChild($cTraslado);
    $cTraslado->setAttribute('Base','38.70');
    $cTraslado->setAttribute('Importe','6.192');
    $cTraslado->setAttribute('Impuesto','002');
    $cTraslado->setAttribute('TasaOCuota','0.160000');
    $cTraslado->setAttribute('TipoFactor','Tasa');

    $concepto = $xml->createElement('cfdi:Concepto');
    $concepto = $conceptos->appendChild($concepto);
    $concepto->setAttribute('Cantidad','1.00000');
    $concepto->setAttribute('ClaveProdServ','60121804');
    $concepto->setAttribute('ClaveUnidad','H87');
    $concepto->setAttribute('Descripcion','CITOCOL PASTILLA AZUL ACIANO 26');
    $concepto->setAttribute('Importe','38.70');
    $concepto->setAttribute('NoIdentificacion','2020010026');
    $concepto->setAttribute('Unidad','PIEZAS');
    $concepto->setAttribute('ValorUnitario','38.7000');

    $cImpuestos = $xml->createElement('cfdi:Impuestos');
    $cImpuestos = $concepto->appendChild($cImpuestos);

    $cTraslados = $xml->createElement('cfdi:Traslados');
    $cTraslados = $cImpuestos->appendChild($cTraslados);

    $cTraslado = $xml->createElement('cfdi:Traslado');
    $cTraslado = $cTraslados->appendChild($cTraslado);
    $cTraslado->setAttribute('Base','38.70');
    $cTraslado->setAttribute('Importe','6.192');
    $cTraslado->setAttribute('Impuesto','002');
    $cTraslado->setAttribute('TasaOCuota','0.160000');
    $cTraslado->setAttribute('TipoFactor','Tasa');

    $concepto = $xml->createElement('cfdi:Concepto');
    $concepto = $conceptos->appendChild($concepto);
    $concepto->setAttribute('Cantidad','3.00000');
    $concepto->setAttribute('ClaveProdServ','60121804');
    $concepto->setAttribute('ClaveUnidad','H87');
    $concepto->setAttribute('Descripcion','CITOCOL PASTILLA CREMA 12');
    $concepto->setAttribute('Importe','116.10');
    $concepto->setAttribute('NoIdentificacion','2020010012');
    $concepto->setAttribute('Unidad','PIEZAS');
    $concepto->setAttribute('ValorUnitario','38.7000');

    $cImpuestos = $xml->createElement('cfdi:Impuestos');
    $cImpuestos = $concepto->appendChild($cImpuestos);

    $cTraslados = $xml->createElement('cfdi:Traslados');
    $cTraslados = $cImpuestos->appendChild($cTraslados);

    $cTraslado = $xml->createElement('cfdi:Traslado');
    $cTraslado = $cTraslados->appendChild($cTraslado);
    $cTraslado->setAttribute('Base','116.10');
    $cTraslado->setAttribute('Importe','18.576');
    $cTraslado->setAttribute('Impuesto','002');
    $cTraslado->setAttribute('TasaOCuota','0.160000');
    $cTraslado->setAttribute('TipoFactor','Tasa');

    $impuestos = $xml->createElement('cfdi:Impuestos');
    $impuestos = $comprobante->appendChild($impuestos);
    $impuestos->setAttribute('TotalImpuestosTrasladados','30.96');

    $traslados = $xml->createElement('cfdi:Traslados');
    $traslados = $impuestos->appendChild($traslados);

    $traslado = $xml->createElement('cfdi:Traslado');
    $traslado = $traslados->appendChild($traslado);
    $traslado->setAttribute('Importe','30.96');
    $traslado->setAttribute('Impuesto','002');
    $traslado->setAttribute('TasaOCuota','0.160000');
    $traslado->setAttribute('TipoFactor','Tasa');


    $complemento = $xml->createElement('cfdi:Complementos');
    $complemento = $comprobante->appendChild($complemento);


    $xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    $xml->save('libros.xml');

    //Mostramos el XML puro
    echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>".
        htmlentities($el_xml)."
<hr>";
}

//Para leerlo
function leer(){
    echo "<p><b>Ahora mostrandolo con estilo</b></p>";
    $xml = simplexml_load_file('libros.xml');
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
?>