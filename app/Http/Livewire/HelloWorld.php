<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $count = 0;
    public $name = 'Jumbo';
    public $nameMount = 'Jumbo';
    public $requestMount;

    public $inputDefault;
    public $inputDebounce;
    public $inputLazy;

    public $show = false;
    public $check = [];

    public $select = 1;
    public $multiple = [1,'Value 4'];

    public function resetName() {
        $this->name = 'Reset';
    }

    public function setName($name = 'Default') {
        $this->name = $name;
    }

    // Lifecycle Hooks 
    // run first time 
    public function mount(Request $request, $mount = null) {
        $this->nameMount = "Mount Name";
        $this->requestMount = "Request Name - "
            . $request->input('mount', $mount);
        // http://localhost:8000/?mount=data
    }

    // each time before update
    public function hydrate() {
        $this->name = '@hydrate' . $this->count++ ;
    }

    // each time update public variable
    public function updated() {
        // $this->name = '@updated' . $this->count++ ;;
    }
    
    /*
    public function updated($name) {
        $name = '@updated'
    }
    */

    public function updatedName($name) {
        // When name updated
        $name = '@updated';
    }

    public function render()
    {
        return view('livewire.hello-world', [
            'withView' => 'Data (withView)'
        ]);
    }
}
