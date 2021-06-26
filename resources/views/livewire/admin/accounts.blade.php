<div>
<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accounts') }}

        </h2>
        <div>
            <a href="#" wire:click.prevent="addAccount">
                {{ __('Add Account') }}
            </a>
        </div>
    </div>

    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4 m-2 bg-white">
            <table class="table w-full table-auto">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</x-app-layout>
<x-jet-dialog-modal wire:model="addAccountShow">
<x-slot name="title">Create An Account</x-slot>
<x-slot name="content">
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="username" value="{{ __('User Name') }}" />
        <x-jet-input id="username" type="text" class="mt-1 block w-full" wire:model.defer="state.username" />
        <x-jet-input-error for="username" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="incoming_mail" value="{{ __('Incoming Mail') }}" />
        <x-jet-input id="incoming_mail" type="text" class="mt-1 block w-full" wire:model.defer="state.incoming_mail" />
        <x-jet-input-error for="incoming_mail" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="incoming_port" value="{{ __('Incoming Port') }}" />
        <x-jet-input id="incoming_port" type="text" class="mt-1 block w-full" wire:model.defer="state.incoming_port" />
        <x-jet-input-error for="incoming_port" class="mt-2" />
    </div>
</x-slot>
<x-slot name="footer">
    <x-jet-secondary-button wire:click="$toggle('addAccountShow')" wire:loading.attr="disabled">
        {{ __('Cancel') }}
    </x-jet-secondary-button>

    <x-jet-button class="ml-2" wire:click="saveAccount" wire:loading.attr="disabled">
        {{ __('Save') }}
    </x-jet-button></x-slot>
</x-jet-dialog-modal>
</div>
