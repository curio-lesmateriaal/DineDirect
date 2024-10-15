<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class MenuCard extends Component
{
    public $foodCategories;
    public $drinkCategories;
    public $order = [
        ['name' => 'Kippensoep', 'id' => 4,'amount' => 3, 'price' => '2.50'],
        ['name' => 'Tomatensoep', 'id' => 5,'amount' => 1, 'price' => '2.50'],
        ['name' => 'Cola', 'id' => 6,'amount' => 2, 'price' => '1.50'],
        ['name' => 'Fanta', 'id' => 7,'amount' => 1, 'price' => '1.50'],
    ];

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
