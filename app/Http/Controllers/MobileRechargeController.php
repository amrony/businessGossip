<?php

namespace App\Http\Controllers;

use App\MobileRecharge;
use App\Operator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MobileRechargeController extends Controller
{
    public function index(){
        $recharges = MobileRecharge::all();
        return view('admin.recharge.index', compact('recharges'));
    }
    public function create(){
        $operators = Operator::all();
        return view('admin.recharge.create', compact('operators'));
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'number' => 'required',
            'operator_id' => 'required|not_in:0',
            'amount' => 'required|min:10|numeric',
        ]);

        MobileRecharge::create($attributes);
        Toastr::success('Recharge Successfully :)' ,'Success');
        return redirect('/recharge/create');
    }
}
