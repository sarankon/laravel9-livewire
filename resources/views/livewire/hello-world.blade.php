<div>
    Data Binding
    <hr/>
    With View {{ $withView }}
    <hr/>
    Hello {{ $name }}
    <hr/>

    Input <input wire:model="inputDefault" type="text"/><br/> 
    Default: {{ $inputDefault }}<br/><br/>

    Input <input wire:model.debounce.1000ms="inputDebounce" type="text"/><br/> 
    Debounce: {{ $inputDebounce }} <br/><br/>

    Input <input wire:model.lazy="inputLazy" type="text"/><br/>
    Lazy: {{ strtoupper($inputLazy) }}<br/>
    <hr/>

    <input wire:model="show" type="checkbox">
    ;@if($show) Show @endif<br/>

    <input wire:model="check" value="1" type="checkbox"> 1
    <input wire:model="check" value="2" type="checkbox"> 2
    ; {{ implode(',',$check) }}
    <hr/>

    <select wire:model="select">
        <option value="1">Value 1</option>
        <option value="2">Value 2</option>
        <option>Value 3</option>
        <option>Value 4</option>
    </select>
    {{ $select }}
    <br/><br/>
    <select wire:model="multiple" multiple>
        <option value="1">Value 1</option>
        <option value="2">Value 2</option>
        <option>Value 3</option>
        <option>Value 4</option>
    </select>
    {{ implode(',', $multiple) }}
    <hr/>
    <button wire:click="resetName">Reset Name</button>
    <button wire:click="setName('Jumbo')">Set Name</button>
    <button wire:click="setName($event.target.innerText)">Set Name JavaScript</button>
    <hr/>
    <form action="#" wire:submit.prevent="setName('Form')">
        <button>Form Submit (Prevent)</button>
    </form>
    <form action="#" wire:submit.prevent="$set('name','Set')">
        <button>Form Submit (Prevent) $Set()</button>
    </form>
    <hr/>
    Mount: {{ $nameMount }}<br/>
    Request: {{ $requestMount }}
</div>
