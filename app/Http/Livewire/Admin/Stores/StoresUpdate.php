<?php

namespace App\Http\Livewire\Admin\Stores;

use App\Enums\Currencys;
use App\Models\Store;
use Livewire\Component;

class StoresUpdate extends Component
{
    public $storeObj;

    public $name;
    public $slug;
    public $currency;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:stores',
        'currency' => 'required',
    ];

    public function mount(Store $store)
    {
        $this->storeObj = $store;

        $this->name = $store->name;
        $this->slug = $store->slug;
        $this->currency = $store->currency;
    }

    public function render()
    {
        return view('livewire.admin.stores.stores-update', [
            'currencys' => Currencys::cases()
        ])->layout('layouts.admin');
    }

    public function submit()
    {
        $data = $this->validate();

        $this->storeObj->update($data);
    }
}
