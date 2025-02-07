<?php

namespace App\Livewire;

use App\Http\Controllers\ShareableLinkController;
use Livewire\Component;

class ShareLinkForm extends Component
{
    public $shareableLink;

    public function render()
    {
        $shareableLinkController = new ShareableLinkController();
        $response = json_decode($shareableLinkController->getShareableLink()->getContent());
        $this->shareableLink = $response->link;
        return view('livewire.share-link-form');
    }

    public function generateLink()
    {
        $shareableLinkController = new ShareableLinkController();
        $response = json_decode($shareableLinkController->generateShareableLink()->getContent());
        $this->shareableLink = $response->link;
        return $this->shareableLink;
    }

    public function revokeLink()
    {
        $shareableLinkController = new ShareableLinkController();
        $shareableLinkController->revokeLink();
    }

    public function copyLink()
    {
        $shareableLinkController = new ShareableLinkController();
        $response = json_decode($shareableLinkController->copyLink()->getContent());
        if($response->link == null){
            $this->dispatch('link-copy-failed');
            return redirect()->route('dashboard')->with('danger', 'Link copied failed.');
        }else {
            $this->dispatch('link-copied', ['link' => $response->link]);
            return redirect()->route('dashboard')->with('success', 'Link copied successfully.');
        }
    }
}
