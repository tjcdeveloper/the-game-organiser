<div class="user-card-right">
    <p class="user-name">{{ $userName }}</p>
    <a href="{{ route('logout') }}" class="link-btn">Log Out</a>
</div>
<div class="user-card-left">
    <img src="{{ $userAvatar }}" alt="{{ $userName }} user avatar" class="user-avatar" />
</div>
