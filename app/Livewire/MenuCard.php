<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class MenuCard extends Component
{
    public $foodCategories;
    public $drinkCategories;

    public function mount() {
       $this->foodCategories = Category::where('type', 'food')->get();
       $this->drinkCategories = Category::where('type', 'drink')->get();
    }

    public function removeProduct() {
        dd('Removing product!');
    }

    public function addProduct() {
        dd('Adding product!');
    }

    public function render()
    {
        return view('livewire.menu-card');
    }
}
