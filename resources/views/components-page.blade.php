<div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Components / Examples') }}
        </h2>
    </x-slot>


    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold mb-4">Buttons</h2>
        <div class="">
            <x-primary-button>Primary Button</x-primary-button>
            <x-secondary-button>Secondary Button</x-secondary-button>

            <x-danger-button>Danger Button</x-danger-button>
        </div>
    </div>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold mb-4">Form</h2>
        <x-form title="This is my title"></x-form>
    </div>
</x-app-layout>