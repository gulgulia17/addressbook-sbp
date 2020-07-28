<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use Illuminate\Http\Request;
use App\DataTables\CustomerDataTable;
use Svg\Tag\Rect;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

use function Ramsey\Uuid\v1;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatable = Customer::latest()->get();
        return view('customer.index', compact('datatable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::create($this->validateRequest($request));
        return redirect(route('customer.index'))->with('success', 'Customer added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($this->validateRequest($request));
        return redirect(route('customer.index'))->with('success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customer.index'))->with('success', 'Customer removed successfully');
    }

    public function print(Customer $customer)
    {
        $userAddress = auth()->user()->user_addresses()->first();
        return view('customer.print', compact('customer', 'userAddress'));
    }

    public function showCustomerImportForm()
    {
        return view('customer.import');
    }

    public function importCustomer(Request $request)
    {
        $request->validate([
            'importFile' => 'required|mimes:xlsx|size:5000',
        ]);
        dd($request);
    }
    
    public function validateRequest($request)
    {
        return $request->validate([
            'customername' => 'required',
            'addressline1' => 'required',
            'addressline2' => '',
            'addressline3' => '',
            'pincode' => 'required|numeric',
            'number' => 'required',
        ]);
    }
}
