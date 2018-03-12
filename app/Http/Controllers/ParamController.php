<?php

namespace Kat33\Http\Controllers;

use Illuminate\Http\Request;
use Kat33\Http\Resources\Param as ParamResource;
use Kat33\Param;

class ParamController extends Controller
{
    public function index()
    {
        $params = Param::all();
        return ParamResource::collection($params);
    }
    public function store(Request $request){
        $param = new Param();
        $param->speed = $request->input('speed');
        $param->accel = $request->input('accel');
        $param->sudden_break = $request->input('sudden_break');
        $param->forward_collision = $request->input('forward_collision');
        $param->lane_departure = $request->input('lane_departure');
        $param->lat = $request->input('lat');
        $param->lon = $request->input('lon');
        $param->send_date = $request->input('send_date');
        $param->imei_number = $request->input('imei_number');
        if($param->save()){
            return new ParamResource($param);
        }
    }
}
