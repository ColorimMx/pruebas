<?php


include_once 'mba3.php';

try {

    $database = new Mba3();
    $db = $database->openMba3();
    /*$sql = "Select CODIGO_ACTIVO, NOMBRE from ACTV_Ficha_Principal " ;*/
    $sql = "SELECT   codigo_cliente as id, nombre_cliente as nombre, identificacion_fiscal as rfc, "
        ."name_alt_razon_social as razon_social, inactivo, record_date as fecha_ingreso, "
        ." direccion_principal_1,direccion_principal_2, direccion_3 as direccion_principal_3, "
        ."  noexterior_s as num_exterior, nointerior_s as num_interior, colonia_s as colonia, municipio_s as municipio, "
        ."  localidad_s as localidad, codigo_ciudad as id_ciudad, codigo_estado as id_estado, codigo_pais as id_pais, zona as id_zona, "
        ."  codigo_postal_principal as cp, telefono, telefono_2, fax, "
        ."  email_fiscal as email_fiscal, e_mail, codigo_cuenta_contable_cliente as id_cuenta, "
        ."  tipo_moneda as id_moneda, terminos_de_pago_dias as dias_credito, "
        ."  terminos_de_pago_alfa_num as termino_credito, limite_credito, balance as saldo, "
        ."  balance_reserv1 as reserva, client_type as id_tipo, codigo_giro as id_giro, codigo_categoria as id_categoria, "
        ."   codigo_sector as id_sector, localizacion_cliente as id_localizacion,salesman as id_vendedor,current_date ( ) as fecha_mod "
        ." FROM     clnt_ficha_principal "
        ." WHERE empresa = 'CIMSA'";

    foreach ($db->query($sql) as $row) {
        echo " ID: ".$row['ID'] . "<br>";
        echo " ID: ".$row['NOMBRE'] . "<br>";
    }

}
catch (PDOException $e)
{
    echo "Hay algún problema en la conexión: ".$e->getMessage();
}