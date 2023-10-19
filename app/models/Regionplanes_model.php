<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Db\Region_Opti;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Support\Carbon;


//https://notes.enovision.net/codeigniter/eloquent-in-codeigniter/how-to-use-the-models

class RegionPlanes_model extends CI_Model
{
    private $count = 0;
    private $total = 0;
    private $results = null;

    public function __construct()
    {
        parent::__construct();

        // You can also use CodeIgniter models itself
        //$this->load->model('whatever/Model', 'WhateverModel'); 

    }

    public function get_all()
    {
        $lista = Region_Opti::all();
        return $lista;
        //return json_encode($listCareers);
    }

    public function get_select($id)
    {
        $select = Region_Opti::findOrFail($id)->first();
        return $select;
        //return json_encode($listCareers);
    }

    /*
    Store the record in the database
    */
    public function store($request)
    {
        $data = array(
            'region_id' => $request->region_id,
            'codentidad' => $request->codentidad,
            'entidad' => $request->entidad,
            'titulo_entidad' => $request->titulo_entidad,
            'codtipoentidad' => $request->codtipoentidad,
            'codgestionentidad' => $request->codgestionentidad,
            'estado' => $request->estado,
            'flag_visible' => $request->flag_visible,
            'flag_formulario' => $request->flag_formulario
        );

        $model = new Region_Opti();
        $model->fill($data);
        $model->save($data);
    }

    public static function getRegionesPlanes()
    {
        $cantIESTpublicos = DB::table('t_institutos')
            ->selectRaw('count(id) as cant_institutos, id_region')
            ->groupBy('id_region');

        $data = Region_Opti::leftjoin('cod_etapa', 'cod_etapa.id', '=', 't_regiones_etapa_opti.cod_etapa')
            ->leftjoin('t_regiones', 't_regiones.id', '=', 't_regiones_etapa_opti.region_id')
            ->leftjoinSub($cantIESTpublicos, 'cantIESTpublicos', function ($join) {
                $join->on('t_regiones_etapa_opti.region_id', '=', 'cantIESTpublicos.id_region');
            })
            ->where('t_regiones_etapa_opti.cod_etapa',4)
            ->where('t_regiones_etapa_opti.visible',1)
            //->where('t_regiones_etapa_opti.region_id',5)
            ->orderBy('t_regiones_etapa_opti.region_id', 'asc')
            ->get(['t_regiones_etapa_opti.*', 'cod_etapa.item', 't_regiones.region' , 'cantIESTpublicos.cant_institutos']);

        return $data;
        //return $cantIESTpublicos;
    }
}