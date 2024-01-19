<x-app-layout>
	<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
		<form method="POST" action="{{ route('chirps.store') }}">
			@csrf
			<textarea
				name="message"
				placeholder="{{ __('What\'s on your mind?') }}"
				class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md"
			>{{ old('message') }}</textarea>
			<x-input-error :message="$errors->get('message')" class="mt-2" />
			<x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
		</form>
	</div>
</x-app-layout>