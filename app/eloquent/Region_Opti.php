<?php
 
namespace Db;
 
use Db\BaseModel;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Support\Carbon;

class Region_Opti extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_regiones_etapa_opti';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'region_id',
        'cod_etapa',
        'documento_aprobacion',
        'fecha_aprobacion',
        'cod_etapa_condicion',
        'ord_referencia',
        'observaciones',
        'fecha_inicio',
        'fecha_fin',
        'url_documento',
        'ruta_alterna',
        'visible',
        'estado',
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
        'fecha_aprobacion',
        'fecha_inicio',
        'fecha_fin'
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'fecha_aprobacion' => 'datetime:Y-m-d',
        'fecha_inicio' => 'datetime:Y-m-d',
        'fecha_fin' => 'datetime:Y-m-d'
    ];
    
    public static function getRegionesPlanes()
    {
        $cantIEST = DB::table('t_institutos')
            ->selectRaw('count(id) as cantIest, id_region')
            ->groupBy('id_region');

        $data = Region_Opti::leftjoin('cod_etapa', 'cod_etapa.id', '=', 't_regiones_etapa_opti.cod_etapa')
            ->leftjoinSub($cantIEST, 'cantIest', function ($join) {
                $join->on('t_regiones_etapa_opti.region_id', '=', 'cantIEST.id_region');
            })
            ->where('t_regiones_etapa_opti.cod_etapa',4)
            ->where('t_regiones_etapa_opti.visible',1)
            ->where('t_regiones_etapa_opti.region_id',5)
            ->orderBy('t_regiones_etapa_opti.id_region', 'asc')
            ->get(['t_regiones_etapa_opti.*', 'cod_etapa.item', 'cantIEST.cantIest']);

        return $data;
    }
}