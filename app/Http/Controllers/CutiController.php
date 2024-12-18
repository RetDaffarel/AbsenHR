<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CutiController extends Controller
{
    //
    public function index()
    {
        return view('frontend.form');
    }

    public function status()
    {
        $status = Cuti::paginate(15);

        return view('frontend.status', compact('status'));
    }
    public function id()
    {
        $data = Cuti::all()->count();

        return view('frontend.index', compact('data'));
    }
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'tanggal_izin' => 'required|date',
            'jeniscuti' => 'required|string|max:255',
            'nrk' => 'required|string|max:255',
        ]);

        // dd($data);
        Cuti::create($data);

        toast('Cuti C', 'success');

        return redirect()->back()->with('success', 'Created Cuti successfully');
    }


    public function destroy($id)
    {
        $id = Cuti::findOrFail($id);
        $id->delete();

        toast('Notification Deleted', 'success');
        return redirect()->back();
    }
}
