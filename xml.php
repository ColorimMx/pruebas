<?php

crear(); //Creamos el archivo
//leer();  //Luego lo leemos

//Para crear el archivo
function crear(){
    $xml = new DomDocument('1.0', 'UTF-8');
    $xml->xmlStandalone = false;

    $comprobante = $xml->createElement('cfdi:Comprobante');
    $comprobante->setAttribute('xmlns:cfdi', 'http://www.sat.gob.mx/cfd/3');

    //$comprobante->setAttribute('Certificado', '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');
    $comprobante->setAttribute('Certificado', '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');
    $comprobante->setAttribute('CondicionesDePago', 'CONTADO');
    $comprobante->setAttribute('Fecha', '2021-11-22T11:38:44');
    $comprobante->setAttribute('Folio', '10000047461');
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
    $comprobante->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
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
    $receptor->setAttribute('UsoCFDI','G01');

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

/*
    $complemento = $xml->createElement('cfdi:Complemento');
    $complemento = $comprobante->appendChild($complemento);

    $timbre = $xml->createElement('tfd:TimbreFiscalDigital');
    $timbre = $complemento->appendChild($timbre);
    $timbre->setAttribute('xmlns:xsi','http://www.w3.org/2001/XMLSchema-instance');
    $timbre->setAttribute('xmlns:tfd','http://www.sat.gob.mx/TimbreFiscalDigital');
    $timbre->setAttribute('xsi:schemaLocation','http://www.sat.gob.mx/TimbreFiscalDigital http://www.sat.gob.mx/sitio_internet/cfd/TimbreFiscalDigital/TimbreFiscalDigitalv11.xsd');
    $timbre->setAttribute('Version','');
    $timbre->setAttribute('UUID','');
    $timbre->setAttribute('FechaTimbrado','');
    $timbre->setAttribute('RfcProvCertif','');
    $timbre->setAttribute('SelloCFD','');
    $timbre->setAttribute('NoCertificadoSAT','');
    $timbre->setAttribute('SelloSAT','');
*/
    $xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    $xml->save('cfdi.xml');

    //Mostramos el XML puro
    echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>".
        htmlentities($el_xml)."
<hr>";
}
/*
//Para leerlo
function leer(){
    echo "<p><b>Ahora mostrandolo con estilo</b></p>";
    $xml = simplexml_load_file('cfdi.xml');
    $salida ="";
    foreach($xml->libro as $item){
        $salida .=
            "<b>Autor:</b> " . $item->autor . "
".
            "<b>T??tulo:</b> " . $item->titulo . "
".
            "<b>Ano:</b> " . $item->anio . "
".
            "<b>Editorial:</b> " . $item->editorial . "
<hr/>";
    }
    echo $salida;
}
*/
?>