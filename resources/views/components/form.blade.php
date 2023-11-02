@props(['title'])

<div>
    <x-primary-button x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Open Modal') }}</x-primary-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <h2 class="text-xl font-medium text-white dark:text-gray-100 border-b-2 border-gray-200 p-4 px-6 bg-gray-700 dark:bg-gray-700">
                {{ $title }}
            </h2>

            <div class="p-6 flex flex-col gap-6">

                {{$slot}}

            </div>

            <div class="px-6 pt-4 flex justify-end border-t-2 border-gray-200">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ml-3">
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</div>
