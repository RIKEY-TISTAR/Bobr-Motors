<?php

namespace App\Livewire;

use App\Helpers\CartManagment;
use App\Livewire\Partials\Header;
use App\Models\Product;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SingleProduct extends Component
{
    use LivewireAlert;

    public function addToCart($product_id)
    {
        $total_count = CartManagment::addItemToCart($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Header::class);

        $this->alert('success', 'Вы добавили товар в корзину', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public $slug;
    public $description;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where("slug", $this->slug)->firstOrFail();
        $this->description = $product->description;
        return view('livewire.single-product', [
            'product' => $product,
        ]);
    }

}
  