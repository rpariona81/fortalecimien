<?php
 
namespace Db;
 
use Db\BaseModel;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Support\Carbon;

class Oferta_Opti extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_institutos_ofertas';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cod_oferta',
        'instituto_id',
        'carrera_id',
        'activo',
        'fecha_autorizacion',
        'resol_autorizacion',
        'informacion_adicional',
        'ind_aer',
        'd_ind_aer',
        'programa_anterior',
        'condicion_oferta',
        'decision_optimizacion',
        'oferta_optimizacion',
        'proceso_admision',
        'condicion_disertpa',
        'programa_disertpa',
        'nivelform_disertpa',
        'nrocreditos_disertpa',
        'nrooficio_disertpa',
        'personal_disertpa',
        'fechaoficio_disertpa',
        'id_lista_equipamiento',
        'created_by',
        'updated_by'      
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'fecha_autorizacion',
        'fechaoficio_disertpa'
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'fecha_autorizacion' => 'datetime:Y-m-d',
        'fechaoficio_disertpa' => 'datetime:Y-m-d'
    ];
    
    
}