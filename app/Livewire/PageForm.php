<?php

namespace App\Livewire;

use App\Models\Form;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Bobr-Motors: Обратная связь')]
class PageForm extends Component
{   
    public $name;
    public $email;
    public $contactNumber;
    public $message;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'contactNumber' => 'required',
        'message' => 'required|min:10',
    ];

    public function submitForm()
    {
        $this->validate();

        Form::create([
            'name' =>$this->name,
            'email' =>$this->email,
            'contactNumber' =>$this->contactNumber,
            'message' =>$this->message,
        ]);
        
        $this->reset(['name', 'email', 'contactNumber', 'message']);
        $this->success  = 'Ваше сообщение было отправленно, спасибо за отзыв!';
    }

    public function render()
    {
        return view('livewire.page-form');
    }
}

#[Title('Форма обратной связи - (Сообщение отправлено)')]
class PageFormFinished extends Component
{
    public function render()
    {
        return view('livewire.page-form-finished');
    }
}
