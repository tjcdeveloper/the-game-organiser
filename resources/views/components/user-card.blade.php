<div class="user-card-right">
    <p class="user-name">{{ Auth::user()->name }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="button is-fullwidth is-primary" type="submit">
            Log Out
        </button>
    </form>
</div>
<div class="user-card-left">
    <img src="{{ URL::asset('images/avatars/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }} user avatar" class="user-avatar" />
</div>
