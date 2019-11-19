<?php

$curso=array('0'=>'20191_C_DOR016N_CEJ',
			 '1'=>'20192_C_LID007N_CEJ',
			 '2'=>'20193_C_EAD205N_CEJ',
			 '3'=>'20194_C_MGC227N_CEJ',
			 '4'=>'20195_C_SER228N_CEJ');

$data=array('Rut'=>'16407930-9',
			'Malla'=>'GCA_E_2019',
			'Nombre'=>'Diplomado Ejecutivo en Gestión del Cambio (GCA_E_2019)',
			'cursos'=>$curso);

echo json_encode($data,true);
?>