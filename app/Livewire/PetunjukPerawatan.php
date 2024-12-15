<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.layout')]
#[Title('SFES - Snakefruit Fertilization Expert System')]
class PetunjukPerawatan extends Component
{
    public function render()
    {
        return view('livewire.petunjuk-perawatan');
    }
}
