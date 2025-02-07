<?php

namespace App\Http\Controllers;

use App\Models\PartnerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerInfoController extends Controller
{
    public function storePartnerInfo(Request $request)
    {
        $request->validate([
            'partnerName' => 'required|string|max:255',
            'specialNote' => 'required',
        ]);

        PartnerInfo::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'partner_name' => $request->partnerName,
                'special_note' => $request->specialNote,
            ]
        );

        return redirect()->route('dashboard')->with('success', 'Partner information saved successfully.');
    }
}
