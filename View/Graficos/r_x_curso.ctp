<?php
header("Content-Type: application/json");

function Cursos() {

   App::uses('ConnectionManager', 'Model'); 
    $db = ConnectionManager::getDataSource('default');
    if (!$db->isConnected()) {
       $this->Session->setFlash(__('Could not connect to database.'), 'default', array('class' => 'error'));
    } else {
        $cursos = $db->Query('SELECT * FROM `cursos_inscripcions` WHERE 1');        
                $numcursos = sizeof($cursos);
        // var_dump($alumnos);

        $i = 0;
        $id_repetida = array();
        $array[] = array("Cursos"  ,"Recursantes" );
        while ($i < $numcursos) {
                $curso_id = $cursos[$i]['cursos_inscripcions']['curso_id'].'<br>';
                $inscripcion_id= $cursos[$i]['cursos_inscripcions']['inscripcion_id'].'<br>';

               if (!in_array($curso_id, $id_repetida)) {

                        $cursos_inscripcions = $db->Query("SELECT curso_id,inscripcion_id,recursante FROM `cursos_inscripcions` LEFT JOIN inscripcions ON cursos_inscripcions.inscripcion_id = inscripcions.id where inscripcions.recursante = '1' and curso_id = '$curso_id'");
                        $curso_num = sizeof($cursos_inscripcions);
                        $anio = $db->Query("SELECT * FROM `cursos` WHERE id= '$curso_id'");
                        $array[] =  array($anio[0]['cursos']['anio'].' '.$anio[0]['cursos']['division'],$curso_num);
                 }

                        $id_repetida[] = $curso_id;
                        $i++;  
        }
        return $array;
    }
}

$ob = array(
        "options" => array(
                "title" => "RECURSANTES POR CURSO",
                "is3D"  => true
        ),
        "data" => Cursos()
);
 
echo json_encode($ob);
?>
