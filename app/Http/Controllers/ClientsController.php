<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientsController extends Controller
{
    public function index(){
        $clients = Client::all();

        return view('layouts.private.client', [
            'clients' => $clients,
        ]);

        $response = response()->view('login')
                            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');

        return $response;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'perusahaan' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'kesan' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = 'user.png'; // Default image name
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $imageName);
        }

        Client::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'perusahaan' => $request->perusahaan,
            'jabatan' => $request->jabatan,
            'kesan' => $request->kesan,
            'image' => $imageName,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    public function update(Request $request, $id)
{
    $client = Client::findOrFail($id);

    // Validasi input
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'perusahaan' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'kesan' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // batasan untuk gambar jika ada
    ]);

    // Update data klien
    $client->nama = $validatedData['nama'];
    $client->alamat = $validatedData['alamat'];
    $client->perusahaan = $validatedData['perusahaan'];
    $client->jabatan = $validatedData['jabatan'];
    $client->kesan = $validatedData['kesan'];

    // Handle file upload if new image is provided
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika bukan gambar default
        if ($client->image !== 'user.png') {
            $imagePath = public_path('assets/images/' . $client->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Upload gambar baru
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/images/'), $imageName);

        // Simpan nama gambar ke database
        $client->image = $imageName;
    }

    // Simpan perubahan
    $client->save();

    return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
}

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        
        // Hapus gambar dari direktori jika bukan gambar default
        if ($client->image !== 'user.png') {
            $imagePath = public_path('assets/images/' . $client->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
