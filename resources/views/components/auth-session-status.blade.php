@if ($status->any())
    <x-bulma-message {{ $attributes->merge(['class' => 'is-success-dark']) }} :messages="$status">
        {{ __('Success') }}
    </x-bulma-message>
@endif
