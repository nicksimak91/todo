<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputText extends Component
{

    public function __construct(
        public string $heading,
        public string $text,
        public string $name,
        public string $value,
    ) {
    }


    public function render()
    {
        return view('components.input-text', [
            'heading' => $this->heading,
            'text' => $this->text,
            'name' => $this->name,
            'value' => $this->value,
        ]);
    }
}
