<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Emails') }}

        </h2>
        <div>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current hover:text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </a>
        </div>
    </div>

    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4 m-2 bg-white">
            @livewire('admin.emails')
        </div>
    </div>
    <x-jet-dialog-modal id="modal" width="500px">
    
    </x-jet-dialog-modal>
</x-app-layout>
