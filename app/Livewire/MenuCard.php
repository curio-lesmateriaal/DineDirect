<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class MenuCard extends Component
{
    public $foodCategories;
    public $drinkCategories;

    public $order = [
        // ['name' => 'Kippensoep', 'id' => 4,'amount' => 3, 'price' => '2.50'],

    ];

    public function mount() {
       $this->foodCategories = Category::where('type', 'food')->get();
       $this->drinkCategories = Category::where('type', 'drink')->get();
    }

    public function removeProduct($product) {
        dd($product);
    }

    public function addProduct($product) {
        // check if product already exists in order
        if(array_key_exists($product['id'], $this->order)) {
            $this->order[$product['id']]['amount']++;
        } else {
            $product['amount'] = 1;
            $this->order[$product['id']] = $product;
        }

    }

    public function render()
    {
        return view('livewire.menu-card');
    }
}
