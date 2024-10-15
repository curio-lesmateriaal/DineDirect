<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Table;
use Livewire\Component;

class MenuCard extends Component
{

    public $tableId;
    public $foodCategories;
    public $drinkCategories;

    public $order = [
        // ['name' => 'Kippensoep', 'id' => 4,'amount' => 3, 'price' => '2.50'],

    ];

    public function getOrderPrice() {
        $total = 0;
        foreach($this->order as $product) {
            $total += $product['price'] * $product['amount'];
        }
        return number_format($total, 2);
    }

    public function mount() {
        $this->tableId = request('table_code');

        $table = Table::find($this->tableId);
        if(!$table) {
            abort(404, 'Tafel niet gevonden');
        }

        $this->foodCategories = Category::where('type', 'food')->get();
        $this->drinkCategories = Category::where('type', 'drink')->get();
    }

    public function removeProduct($product) {
        if($this->order[$product['id']]['amount'] > 1) {
            $this->order[$product['id']]['amount']--;
        } else {
            unset($this->order[$product['id']]);
        }
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

    public function placeOrder (){
        $tableId = $this->tableId;
        $total = $this->getOrderPrice();
        $status = 'pending';

        $order = Order::create([
            'table_id' => $tableId,
            'total' => $total,
            'status' => $status
        ]);
        foreach($this->order as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['amount']
            ]);
        }
        $this->order = [];
        session()->flash('message', 'Bestelling Succesvol! U wordt zo geholpen.');


    }

    public function render()
    {
        return view('livewire.menu-card');
    }
}
