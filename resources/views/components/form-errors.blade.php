@props(['errors'])

@if ($errors->any())
    <x-bulma-message {{ $attributes->merge(['class' => 'is-danger-dark']) }} :messages="$errors">
            {{ trans_choice('Sorry, there was a problem:', $errors->count()) }}
    </x-bulma-message>
@endif
