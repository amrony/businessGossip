<?php

namespace App\Http\Controllers;

use App\AddFund;
use App\PaymentMethod;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AddFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add_fund.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $methods = PaymentMethod::all();
        return view('admin.add_fund.create', compact('methods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'amount' => 'required|min:10|numeric',
            'transition_id' => 'required',
            'date' => 'required',
            'payment_method_id' => 'required|not_in:0',
            'details' => 'required'
        ]);

        AddFund::create($attributes);
        Toastr::success('Insert Successfully :)' ,'Success');
        return redirect('/add-fund/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddFund  $addFund
     * @return \Illuminate\Http\Response
     */
    public function show(AddFund $addFund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddFund  $addFund
     * @return \Illuminate\Http\Response
     */
    public function edit(AddFund $addFund)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddFund  $addFund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddFund $addFund)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddFund  $addFund
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddFund $addFund)
    {
        //
    }
}
