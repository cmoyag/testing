<?php

/* 
Integracion realizada por MindFree Ingenieria Limitada
Version 1.0
20151028
contacto@mindfree.cl
 */

$token = 'efeb8e73275c39dad7752c71f6cc2ed6';

$domainname = 'https://ecursos.claseejecutiva.cl';
//$domainname = 'https://mf-test-cej.testing.mindfree.cl';

/// FUNCTION NAME
$functionname = 'local_moodle_claseejecutiva_MatricularUsuario';


///// XML-RPC CALL
header('Content-Type: text/plain');
$serverurl = $domainname . '/webservice/xmlrpc/server.php'. '?wstoken=' . $token;
require_once('./curl.php');
$curl = new curl;


$params = array(
            array(
                array( 'rut' => '14507564-5',
                        'nombre' => 'CRISTIAN',
                        'apellido' => 'MOYA',
                        'email' => 'cmoya@diplomadosuc.cl',
                        'curso' => '20185_C_PDC206N_CEJ',
						'password' => '25d55ad283aa400af464c76d713c07ad',
						'sence' => 1,
                        'rol' => 2,
                        'estado_libro' => 0,
                        'convenio' => 'CEJ',
                ),
            )
);

/*
$params = array(
            array(
                array( 'rut' => '17289609-K',
                        'nombre' => 'Daniela Francisca',
                        'apellido' => 'Pardo Gonzalez',
                        'email' => 'danielaf.pardo@gmail.com',
                        'curso' => '20193_C_MDI047N_CEJ',
						'password' => '8adcc6752ecbea7217324e7fd97ec337',
						'sence' => 0,
                        'rol' => 2,
                        'estado_libro' =>'0',
                        'convenio' => '',
                ),
            )
);

*/

$post = xmlrpc_encode_request($functionname, $params);
$resp = xmlrpc_decode($curl->post($serverurl, $post));
print_r($resp);

//echo '\n';

echo'---------Paranetros Enviados---------';
echo '';
print_r($params);

echo'------------------------------';


?>