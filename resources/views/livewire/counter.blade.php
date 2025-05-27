<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container text-center mx-auto p-4">
        <h1 class="text-ceter my-5 text-white text-2xl">Count {{ $count }}</h1>
        <button wire:click="increment"
            class="p-2 cursor-pointer hover:bg-indigo-700 mx-2 rounded-md  border-2 border-indigo-500 text-white">Incrementa</button>
        <button wire:click="decrement"
            class="p-2 cursor-pointer hover:bg-indigo-700 mx-2 rounded-md  border-2 border-indigo-500 text-white">Decrementa</button>
        <button wire:click="resetCount"
            class="p-2 cursor-pointer hover:bg-indigo-700 mx-2 rounded-md  border-2 border-indigo-500 text-white">Reset</button>
    </div>
</div>
