<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax()) {
            return response()->json(['customers' => Customer::all()]);
        }

        return view('customers.index', ['customers' => Customer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'nullable|max:255',
            'postal_code' => 'nullable|max:255',
            'city' => 'nullable|max:255',
            'vat_number' => 'nullable|unique:customers|max:255',
            'cellphone' => 'nullable|unique:customers|max:255',
            'email' => 'nullable|unique:customers|max:255',
            'other_contact' => 'nullable|max:255',
            'observations' => 'nullable',
        ]);

        $customer = Customer::create($validated);
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        // TODO: if there is other records disable some updates?'
        // TODO: Create a table that tracks the changes to the users?
        
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'nullable|max:255',
            'postal_code' => 'nullable|max:255',
            'city' => 'nullable|max:255',
            'vat_number' => 'nullable|max:255|unique:customers,vat_number,' . $customer->id,
            'cellphone' => 'nullable|max:255|unique:customers,cellphone,' . $customer->id,
            'email' => 'nullable|max:255|unique:customers,email,' . $customer->id,
            'other_contact' => 'nullable|max:255',
            'observations' => 'nullable',
        ]);

        $customer->update($validated);
        return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
