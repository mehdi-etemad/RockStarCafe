<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Option;
use App\Models\Order;

class CustomerController extends Controller
{
    private $result = ['code'=>0, 'message'=>null,'data'=>null];
    public function getMenu() {
        $menuArray = [];
        $menus = Menu::all();
        foreach($menus as $menuId=>$menuData) {
            $menuArray[$menuId]['id'] = $menuId;
            $menuArray[$menuId]['name'] = $menuData['name'];
            $menuArray[$menuId]['price'] = $menuData['price'];
            if($menuData['id_option'] != null) {

                $menuArray[$menuId]['optionName'] = Option::find($menuData['id_option'])['name'];
                $menuArray[$menuId]['optionValue'] = Option::find($menuData['id_option'])->values->pluck('id','name');
            } else {
                $menuArray[$menuId]['optionName'] = null;
                $menuArray[$menuId]['optionValue'] = [];
            }
        }
        $result['code'] = 1;
        $result['data'] = $menuArray;
        return response()->json($result);
    }
    public function addOrder(Request $request) {
        $token = null;
        return response()->json($result);
    }
    public function getOrder(Request $request) {
        return response()->json($result);
    }
    public function changeOrder(Request $request) {
        $orderData = Order::find((int)$request->ordet_id);
        if($orderData == null)
            $result = ['code'=>2, 'message'=>'There isn\'t the order', 'data'=>null];
        else
            if($orderData->preparation_at != null)
            $result = ['code'=>2, 'message'=>'The order is at preparation step', 'data'=>null];
            else {

            }
        return response()->json($result);
    }
    public function cancelOrder(Request $request) {
        return response()->json($result);
    }
}
