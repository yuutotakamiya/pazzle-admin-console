<?php

namespace App\Http\Controllers;

use App\Http\Resources\LandResource;
use App\Models\Land;
use App\Models\Landstatus;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandController extends Controller
{
    //島の一覧
    public function index(Request $request)
    {
        $land = Land::all();

        return response()->json([LandResource::collection($land)]);
    }

    //島の詳細情報一覧
    public function show(Request $request)
    {
        $land_block_num = Landstatus::select("land_block_num");//島で埋めたブロックの数
        $land_block_sum = Land::select('block_mission_sum');//島で埋める合計のブロックの数


        return response()->json();
    }

    //島の状況登録
    public function store(Request $request)
    {
        //バリデーションチェック
        $validator = Validator::make($request->all(),[
            'land_id'=>['required','int'],
            'user_id'=>['required','int']
        ]);
        if($validator->failed()){
            return response()->json($validator->errors(),400);
        }
        try{
           $getlandstatus =Landstatus::where('land_id','=',$request->land_id)
                ->where('user_id','=',$request->user_id)->first();

           //すでに同じ島が存在していなかったら
           if(empty($getlandstatus)){
               $land_status = Landstatus::create([
                   'land_id'=>$request->land_id,
                   'user_id'=>$request->user_id,
                   'land_block_num' =>$request->land_block_num
               ]);
           }else{
               $getlandstatus->land_block_num +=  $request->land_block_num;

               $getlandstatus->save();
           }
            return response()->json();
        }catch (Exception $e){
            return response()->json($e, 500);
        }
    }
}
