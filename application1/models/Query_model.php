<?php

class Query_model extends CI_Model {

    public function __construct() {
        //
    }

    public function get_materias() {
        //$sql = 'SELECT m.codigo, m.Nivel, m.Grado, m.Materia, mc.cod_capitulo, mc.capitulo FROM materias m, materias_capitulos mc where m.codigo = mc.cod_area order by m.codigo, mc.cod_capitulo';
        $sql = 'SELECT m.* FROM materias m order by m.codigo';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}

?>
