<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Customer;

class CustomerBackend extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::orderBy('id', 'desc')->get();
        return view('backend.customer.index', [
            'judul' => 'Customer',
            'sub' => 'Data Customer',
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.customer.create', [
            'judul' => 'Customer',
            'sub' => 'Tambah Customer',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:customer',
            'hp' => 'required|min:10|max:13',
            'password' => 'required|min:8', // Password diperlukan jika membuat customer baru dari admin
        ]);

        // Encrypt password if provided
        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        Customer::create($validatedData);
        return redirect('backend/customer')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('backend.customer.show', [
            'judul' => 'Customer',
            'sub' => 'Detail Customer',
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('backend.customer.edit', [
            'judul' => 'Customer',
            'sub' => 'Ubah Customer',
            'edit' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
        $rules = [
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255',
            'hp' => 'required|min:10|max:13',
            'password' => 'nullable|min:8', // Password opsional saat update
        ];

        $validatedData = $request->validate($rules);

        // Encrypt password if provided
        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            // Remove password key if not provided
            unset($validatedData['password']);
        }

        $customer->update($validatedData);
        return redirect('backend/customer')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('backend/customer')->with('warning', 'Data berhasil dihapus');
    }
}
