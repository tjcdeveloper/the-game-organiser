<div class="user-card-right">
    <p class="user-name">{{ Auth::user()->name }}</p>
    <a href="{{ route('logout') }}" class="link-btn">Log Out</a>
</div>
<div class="user-card-left">
    <img src="https://via.placeholder.com/72" alt="{{ Auth::user()->name }} user avatar" class="user-avatar" />
</div>
