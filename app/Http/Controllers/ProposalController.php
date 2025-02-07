<?php

namespace App\Http\Controllers;

use App\Models\PartnerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Proposal;

class ProposalController extends Controller
{
    // Show the personalization form
    public function showPersonalizationForm()
    {
        $partnerDetails = PartnerInfo::where('user_id', Auth::user()->id)->first();
        if(!isset($partnerDetails))
        {
            return $this->addPersonalizedForm();
        }else{
            return $this->editPersonalizedForm();
        }
    }

    private function addPersonalizedForm()
    {
        $addPersonalizationForm = true;

        return view('personalize', compact('addPersonalizationForm'));
    }

    private function editPersonalizedForm()
    {
        $addPersonalizationForm = false;

        $partnerDetails = PartnerInfo::where('user_id', Auth::user()->id)->first();
        return view('personalize', compact('addPersonalizationForm', 'partnerDetails'));
    }

    public function cancelPersonalization()
    {
        return redirect()->route('dashboard');
    }
}
