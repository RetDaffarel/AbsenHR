<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NotifController extends Controller
{
    public function index()
    {

        if (Gate::any(['atasanAdmin', 'superAdmin'])) {

            $notification = Cuti::where('status', 'pending')->get();
            return view('frontend.notification', compact('notification'));
        } else {
            abort(403);
        }
    }

    public function accept($id)
    {
        $cuti = Cuti::findOrFail($id);
        $cuti->status = 'accepted';
        $cuti->save();

        return redirect('/notification')->with('success', 'Leave request accepted.');
    }

    public function destroy($id)
    {
        $cuti = Cuti::findOrFail($id);
        $cuti->status = 'rejected';
        $cuti->save();

        return redirect('/notification')->with('success', 'Leave request rejected.');
    }
}
