<x-app-layout>
    <div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pb-4">
                    {{ __('Create New Contact') }}
                </h2>
            </div>
            <form method="POST" action="/contact?test=1&data=string">
							@csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name"  :value="__('Name')"/>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus
                        autocomplete="name" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="phone_number"  :value="__('Phone Number')"/>
                    <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number"
                        required autocomplete="username" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
