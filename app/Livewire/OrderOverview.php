<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderOverview extends Component
{
    public $orders;

    public function mount() {
        $this->orders = Order::all();
    }

    public function render()
    {
        return view('livewire.order-overview');
    }
}
