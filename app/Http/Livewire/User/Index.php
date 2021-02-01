<?php

namespace App\Http\Livewire\User;

use App\Models\DeliveryPort;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $products;
    public $deliveryPortId;
    public $deliveryPorts;
    public $productSlider;

    public function updatedDeliveryPortId()
    {
        $this->products = Product::whereId($this->deliveryPortId)->get();
    }

    public function getAllDeliveryPorts()
    {
        $this->deliveryPorts = DeliveryPort::get();
    }

    public function getAllProducts()
    {
        $this->products = Product::get();
        $this->productSlider = Product::limit(5)->get();
    }

    public function mount()
    {
        $this->getAllProducts();
        $this->getAllDeliveryPorts();
    }

    public function render()
    {
        return view('livewire.user.index')->extends('livewire.user.layouts.app')->slot('content');
    }
}
