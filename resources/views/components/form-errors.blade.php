@props(['errors'])

@if ($errors->any())
    <section {{ $attributes->merge(['class' => 'message is-danger-dark']) }} x-data="message()" x-show.transition.duration.300ms="isOpen()">
        <header class="message-header">
            {{ trans_choice('Sorry, there was a problem:', $errors->count()) }}
            <button class="delete" aria-label="Close list of errors" x-on:click="close"></button>
        </header>

        <main class="message-body">
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </main>
    </section>

    <script>
        window.message = function () {
            return {
                show: true,
                close() { this.show = false },
                isOpen() { return this.show === true },
            }
        }
    </script>
@endif
