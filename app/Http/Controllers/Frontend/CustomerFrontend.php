<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\Customer;

class CustomerFrontend extends Controller
{
    // Menampilkan detail profil customer yang sedang login
    public function customerdetail()
    {
        $customer = Auth::guard('customer')->user();
        return view('frontend.customerdetail.index', compact('customer'));
    }

    // Menampilkan form untuk mengedit profil
    public function editProfile()
    {
        $customer = Auth::guard('customer')->user();
        return view('frontend.customerdetail.edit', compact('customer'));
    }

    // Update profil customer
    public function updateProfile(Request $request)
{
    $customer = Auth::guard('customer')->user();

    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:customer,email,' . $customer->id,
        'hp' => 'required|digits_between:10,13',
        'alamat' => 'nullable|string|max:255',
        'jenis_kelamin' => 'nullable|string|in:Laki-laki,Perempuan',
        'sosmed' => 'nullable|string|max:255',
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    if ($request->filled('password')) {
        $validatedData['password'] = bcrypt($request->password);
    } else {
        unset($validatedData['password']);
    }

    $customer->update($validatedData);

    // Debugging: Cetak data customer setelah di-update
    dd($customer);

    return redirect()->route('customerdetail.index')->with('success', 'Profil berhasil diperbarui.');
}

}
