<div class="user-card-right">
    <p class="user-name">{{ Auth::user()->name }}</p>
    <a href="{{ route('logout') }}" class="link-btn">Log Out</a>
</div>
<div class="user-card-left">
    <img src="{{ URL::asset('images/avatars/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }} user avatar" class="user-avatar" />
</div>
