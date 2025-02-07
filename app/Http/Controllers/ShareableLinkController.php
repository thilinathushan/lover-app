<?php

namespace App\Http\Controllers;

use App\Models\PartnerInfo;
use App\Models\ShareableLink;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ShareableLinkController extends Controller
{
    public function generateShareableLink()
    {
        $user = Auth::user();

        // Check if a link already exists for this user
        $existingLink = ShareableLink::where('user_id', $user->id)->first();
        if ($existingLink) {
            return response()->json([
                'link' => url('/share/' . $existingLink->token),
            ]);
        }

        // Generate a new token
        $token = Str::random(32);

        // Save to the database
        ShareableLink::create([
            'user_id' => $user->id,
            'token' => $token,
            'expires_at' => Carbon::now()->addDays(10),
        ]);

        return response()->json([
            'link' => url('/share/' . $token),
        ]);
    }

    public function getShareableLink()
    {
        $user = Auth::user();

        // Check if a link already exists for this user
        $existingLink = ShareableLink::where('user_id', $user->id)->first();
        if ($existingLink) {
            return response()->json([
                'link' => url('/share/' . $existingLink->token),
            ]);
        } else {
            return response()->json([
                'link' => null,
            ]);
        }
    }

    public function viewSharedLink($token)
    {
        $link = ShareableLink::where('token', $token)->first();

        if (!$link || ($link->expires_at && $link->expires_at < now())) {
            return response()->json(['error' => 'Invalid or expired link'], 404);
        }

        $partnerInfo = PartnerInfo::where('user_id', $link->user_id)->first();

        if ($partnerInfo) {
            return response()->json([
                'partner_name' => $partnerInfo->partner_name,
                'special_note' => $partnerInfo->special_note,
            ]);
        } else {
            return response()->json(['error' => 'No data found'], 404);
        }
    }

    public function revokeLink()
    {
        $user = Auth::user();
        ShareableLink::where('user_id', $user->id)->delete();
        return redirect()->route('dashboard')->with('success', 'Link revoked successfully.');
    }

    public function copyLink()
    {
        $user = Auth::user();
        $existingLink = ShareableLink::where('user_id', $user->id)->first();

        if ($existingLink) {
            $link = url('/share/' . $existingLink->token);
            return response()->json([
                'success' => true,
                'link' => $link
            ]);
        }

        return response()->json([
            'success' => false,
            'link' => null
        ]);
    }

}
