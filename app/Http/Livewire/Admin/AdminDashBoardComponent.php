<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashBoardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dash-board-component')->layout('layouts.base');
    }
}
