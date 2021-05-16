@props(['messages'])

@if ($messages->any())
    <section {{ $attributes->merge(['class' => 'message']) }} x-data="message()"
             x-show.transition.duration.300ms="isOpen()">
        <header class="message-header">
            {{ $slot }}
            <button class="delete" aria-label="Close list of errors" x-on:click="close"></button>
        </header>

        <main class="message-body">
            <ul>
                @foreach ($messages->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </main>
    </section>

    <script>
        window.message = function () {
            return {
                show: true,
                close () { this.show = false },
                isOpen () { return this.show === true },
            }
        }
    </script>
@endif
