<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vend = Vendor::latest()->paginate(5);
        return view ('vendor.index',compact('vend'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_vendor' => 'required',
            'nama_vendor' => 'required',
            'direktur_vendor' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'rating' => 'required',
            'tentang' => 'required',
            'alamat' => 'required'
        ]);
        Vendor::create($request->all());

        return redirect()->route('vendor.index')->with('succes','Data Vendor Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('vendor.show',compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {

        return view('vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        $vendor = Vendor::findOrFail($vendor->id);
        $request->validate([
            'id_vendor' => 'required',
            'nama_vendor' => 'required',
            'direktur_vendor' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'rating' => 'required',
            'tentang' => 'required',
            'alamat' => 'required'
        ]);

        $vendor->update($request->all());
        return redirect()->route('vendor.index')->with('succes','Data Vendor Telah Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();
        return redirect()->route('vendor.index')->with('succes','Data Vendor Berhasil di Hapus');
    }
}
