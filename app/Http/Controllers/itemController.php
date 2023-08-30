<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class itemController extends Controller
{
    public function detail($item_id){
        return view('detail', [
            "items" => Item::find($item_id)
        ]);
    }

    public function buy(Request $request){
        $buyItem = [
            'user_id' => $request->userID,
            'item_id' => $request->itemID,
            'price' => $request->price,
        ];

        DB::table('orders')->insert($buyItem);

        return redirect('/home')->with('success', 'Add to Cart Success!');
    }

    public function index(){
        return view('cart', [
            "orders" => Order::all(),
            "items" => Item::all()
        ]);
    }

    public function delete(Request $request){
        DB::delete('delete from orders where id = ?', [$request->orderID]);
        return redirect('/cart')->with('success', 'Success delete item!');
    }

    public function checkOut(Request $request){
        DB::table('orders')->where('user_id', $request->userID)->delete();
        return view('/success');
    }
}
