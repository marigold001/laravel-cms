<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Contest;

class Frontend extends Component
{
    public function render()
    {
        return view('livewire.frontend', ['data' => Contest::paginate(3)])->layout('layouts.frontend');
    }
}
