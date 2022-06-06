<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PieController extends Controller
{
    public function delivarymanPie()
    {
        $result=DB::select(DB::raw("SELECT count(*) as total_address, address from delivarymen group by address"));
        $delivarymanPieData="";
        foreach($result as $list)
        {
            $delivarymanPieData.="['".$list->address."',    ".$list->total_address."],";
        }
        $arr['delivarymanPieData']=rtrim($delivarymanPieData,",");
        
        return view('pages.delivaryman.delivarymanPie',$arr);
        
        
    }
}
