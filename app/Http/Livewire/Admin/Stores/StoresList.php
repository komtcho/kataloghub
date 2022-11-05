<?php

namespace App\Http\Livewire\Admin\Stores;

use App\Models\Store;
use Livewire\Component;

class StoresList extends Component
{
    public function render()
    {
        $stores = Store::get();

        return view('livewire.admin.stores.stores-list', [
            'stores' => $stores,
        ])->layout('layouts.admin');
    }
}
