<div class="bg-white mx-auto shadow-md w-1/2 border border-amber-50 rounded-2xl py-12 my-12 text-center">
    <h1 class="font-bold ">Counter: {{ $count }}</h1>
   <div class="flex justify-center items-center gap-2 mt-4">
       <button wire:click="decrement" class="border border-gray-200 font-bold  w-1/3 text-red-500 rounded-2xl">-</button>
       <button wire:click="increment" class="border border-gray-200 font-bold  w-1/3 text-green-500 rounded-2xl">+</button>
    </div>
</div>
