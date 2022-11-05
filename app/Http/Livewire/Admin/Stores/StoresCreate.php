<?php

namespace App\Http\Livewire\Admin\Stores;

use App\Enums\Currencys;
use App\Models\Store;
use Livewire\Component;

class StoresCreate extends Component
{
    public $name;
    public $slug;
    public $currency;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'currency' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.stores.stores-create', [
            'currencys' => Currencys::cases()
        ])->layout('layouts.admin');
    }

    public function submit()
    {
        $data = $this->validate();

        Store::create($data);

        $this->reset();
    }
}
