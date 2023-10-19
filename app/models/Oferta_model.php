<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Db\Oferta_Opti;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Support\Carbon;


//https://notes.enovision.net/codeigniter/eloquent-in-codeigniter/how-to-use-the-models

class Oferta_model extends CI_Model
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
        $lista = Oferta_Opti::all();
        return $lista;
        //return json_encode($listCareers);
    }

    public function get_select($id)
    {
        $select = Oferta_Opti::findOrFail($id)->first();
        return $select;
        //return json_encode($listCareers);
    }

    /*
    Store the record in the database
    */
    public function store($request)
    {
        $data = array(
            'carrera_id' => $request->carrera_id,
            'activo' => $request->activo,
            'fecha_autorizacion' => $request->fecha_autorizacion,
            'resol_autorizacion' => $request->resol_autorizacion,
            'informacion_adicional' => $request->informacion_adicional,
            'ind_aer' => $request->ind_aer,
            'd_ind_aer' => $request->d_ind_aer,
            'programa_anterior' => $request->programa_anterior,
            'condicion_oferta' => $request->condicion_oferta,
            'decision_optimizacion' => $request->decision_optimizacion,
            'oferta_optimizacion' => $request->oferta_optimizacion,
            'proceso_admision' => $request->proceso_admision,
            'condicion_disertpa' => $request->condicion_disertpa,
            'programa_disertpa' => $request->programa_disertpa,
            'nivelform_disertpa' => $request->nivelform_disertpa,
            'nrocreditos_disertpa' => $request->nrocreditos_disertpa,
            'nrooficio_disertpa' => $request->nrooficio_disertpa,
            'personal_disertpa' => $request->personal_disertpa,
            'fechaoficio_disertpa' => $request->fechaoficio_disertpa,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        );

        $model = new Oferta_Opti();
        $model->fill($data);
        //$model->save($data);
        if (!$model->save($data)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /*
    Store the record in the database
    */
    public function update($request)
    {
        $model = Oferta_Opti::findOrFail($request->id);
        $data = array(
            'carrera_id' => $request->carrera_id,
            'activo' => $request->activo,
            'fecha_autorizacion' => $request->fecha_autorizacion,
            'resol_autorizacion' => $request->resol_autorizacion,
            'informacion_adicional' => $request->informacion_adicional,
            'ind_aer' => $request->ind_aer,
            'd_ind_aer' => $request->d_ind_aer,
            'programa_anterior' => $request->programa_anterior,
            'condicion_oferta' => $request->condicion_oferta,
            'decision_optimizacion' => $request->decision_optimizacion,
            'oferta_optimizacion' => $request->oferta_optimizacion,
            'proceso_admision' => $request->proceso_admision,
            'condicion_disertpa' => $request->condicion_disertpa,
            'programa_disertpa' => $request->programa_disertpa,
            'nivelform_disertpa' => $request->nivelform_disertpa,
            'nrocreditos_disertpa' => $request->nrocreditos_disertpa,
            'nrooficio_disertpa' => $request->nrooficio_disertpa,
            'personal_disertpa' => $request->personal_disertpa,
            'fechaoficio_disertpa' => $request->fechaoficio_disertpa,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        );
        
        $model->fill($data);
        //$model->save($data);
        if (!$model->save($data)) {
            return FALSE;
        } else {
            return TRUE;
        }
        
    }

    public static function getOfertaEducativa()
    {
        /*$cantIESTpublicos = DB::table('t_institutos')
            ->selectRaw('count(id) as cant_institutos, id_region')
            ->groupBy('id_region');
            */
        $data = Oferta_Opti::leftjoin('t_institutos', 't_institutos.id', '=', 't_institutos_ofertas.instituto_id')
            ->leftjoin('t_regiones', 't_regiones.id', '=', 't_institutos.id_region')
            ->leftjoin('t_carreras', 't_carreras.id', '=', 't_institutos_ofertas.carrera_id')
            ->orderBy('t_institutos_ofertas.updated_at', 'desc')
            ->orderBy('t_institutos.id_region', 'asc')
            ->orderBy('t_institutos.instituto', 'asc')
            ->orderBy('t_institutos_ofertas.cod_oferta', 'asc')
            ->get(['t_institutos_ofertas.*', 't_institutos.instituto','t_institutos.cod_mod', 't_regiones.region' , 't_carreras.carrera_digitacion']);

        return $data;
        //return $cantIESTpublicos;
    }
}