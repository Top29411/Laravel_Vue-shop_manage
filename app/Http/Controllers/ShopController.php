<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Store;

class ShopController extends Controller
{
    //
    public function __contruct() {

    }

    public function index() {
        // $rows = DB::select('SELECT DISTINCT(a.store_id), b.store_name, b.url, SUM(a.amount_sold) as total_items, SUM(a.subtotal) as total_sales FROM `products_solds` a LEFT JOIN `stores` b ON b.id = a.store_id where added_at > now() - interval 1 day group by a.store_id ORDER by total_sales DESC');
        // print($rows);exit;
        // $rows = DB::table('stores')
        //             ->get();
        // print_r($rows);exit;

        $rows = DB::table('products_solds AS a')
            ->leftJoin('stores as b', 'b.id', '=', 'a.store_id')
            ->select(DB::raw('DISTINCT(a.store_id)'), 'b.store_name', 'b.url', DB::raw('SUM(a.amount_sold) AS total_items'), DB::raw('SUM(a.subtotal) AS total_sales'))
            // ->where(DB::raw('a.added_at > NOW() - INTERVAL 1 DAY'))
            ->groupBy('a.store_id','b.store_name', 'b.url')
            // ->groupBy('a.store_id')
            ->orderByDesc('total_sales')
            ->get();
        return response($rows->jsonSerialize(), Response::HTTP_OK);

    }

    public function show() {

    }
}
