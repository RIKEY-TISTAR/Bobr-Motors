<?php

namespace App\Livewire;

use App\Helpers\CartManagment;
use App\Livewire\Partials\Header;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Title('Bobr-Motors: Главная')]
class PageHome extends Component
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

    public function render()
    {
        $products = Product::where("is_active", 1)->where('is_featured', 1)->orderBy("updated_at", "DESC")->paginate(10);
        return view('livewire.page-home', [
            'products' => $products,
        ]);
    }
    
}
