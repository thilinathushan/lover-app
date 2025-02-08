<?php

namespace App\Http\Controllers;

use App\Models\PartnerInfo;
use App\Models\Proposal;
use App\Models\ShareableLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $addPersonalizationForm = null;
        $userData = Auth::user();
        $partnerDetails = PartnerInfo::where('user_id', $userData->id)->first();
        if (!isset($partnerDetails)) {
            $addPersonalizationForm = true;
        } else {
            $addPersonalizationForm = false;
        }

        return view('dashboard', compact('userData', 'addPersonalizationForm'));
    }

    public function shareLinkIndex()
    {
        $userData = Auth::user();
        $partnerDetails = PartnerInfo::where('user_id', $userData->id)->first();
        if (!isset($partnerDetails)) {
            return redirect()->route('dashboard')->with('error', 'Please Add Your Partner Details First.');
        }
        return view('sharelink');
    }

    public function wish($token)
    {
        $shareableLink = ShareableLink::where('token', $token)->first();

        // first i neeed to check if the link is expired or not and if link exsits or not
        if (!$shareableLink || $shareableLink->expires_at < now()) {
            return view('oops');
        }
        $partnerInfo = PartnerInfo::where('user_id', $shareableLink->user_id)->first();

        // then when the link is valid then i will show the wish page and store the timestamp the link opened
        Proposal::updateOrCreate(
            ['user_id' => $shareableLink->user_id],
            [
                'partner_info_id' => $partnerInfo->id,
                'link_opened_at' => now(),
            ],
        );

        return view('wish', compact('partnerInfo', 'token'));
    }

    public function partnerAccept($token)
    {
        $shareableLink = ShareableLink::where('token', $token)->first();

        // first i neeed to check if the link is expired or not and if link exsits or not
        if (!$shareableLink || $shareableLink->expires_at < now()) {
            return view('oops');
        }
        $partnerInfo = PartnerInfo::where('user_id', $shareableLink->user_id)->first();
        $user = User::where('id', $shareableLink->user_id)->first();

        return view('partner-accept', compact('partnerInfo', 'user', 'token'));
    }

    public function partnerLetter($token)
    {
        $shareableLink = ShareableLink::where('token', $token)->first();

        // first i neeed to check if the link is expired or not and if link exsits or not
        if (!$shareableLink || $shareableLink->expires_at < now()) {
            return view('oops');
        }
        return view('partner-wish', compact('token'));
    }

    public function storePartnerWish(Request $request, $token)
    {
        $validate = $request->validate([
            'wish' => 'required',
        ]);

        $shareableLink = ShareableLink::where('token', $token)->first();

        // first i neeed to check if the link is expired or not and if link exsits or not
        if (!$shareableLink || $shareableLink->expires_at < now()) {
            return view('oops');
        }
        $proposal = Proposal::where('user_id', $shareableLink->user_id)->first();

        $proposal->update([
            'status' => 'Accepted',
            'custom_message' => $request->wish,
        ]);

        return redirect()->route('sharePlatform', $token);
    }

    public function sharePlatform($token)
    {
        $shareableLink = ShareableLink::where('token', $token)->first();

        // first i neeed to check if the link is expired or not and if link exsits or not
        if (!$shareableLink || $shareableLink->expires_at < now()) {
            return view('oops');
        }
        return view('share-app');
    }

    public function viewResponse()
    {
        $userData = Auth::user();
        $proposal = Proposal::where('user_id', $userData->id)->first();
        if (!$proposal) {
            return redirect()->route('dashboard')->with('error', 'No Response Found.');
        }
        $partner = PartnerInfo::where('id', $proposal->partner_info_id)->first();
        return view('view-response', compact('proposal', 'partner'));
    }

    public function signOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
