<nav>
    <ul>
        <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ request()->is('photos') ? 'active' : '' }}"><a href="{{ route('photos') }}">Photos</a></li>
        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>