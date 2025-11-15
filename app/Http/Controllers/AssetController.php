<?php

namespace App\Http\Controllers;

use App\Models\SystemCollateral;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AssetController extends Controller
{
    public function fetchInfo($name){
        
        $asset = SystemCollateral::where('collaterals', $name)->first();

        if (!$asset) {
            return response()->json(['error' => 'Asset not found'], 404);
        }

        return response()->json($asset);
    }
}
