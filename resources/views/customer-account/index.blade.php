<h1>Customer n°{{ Auth::user()->id }} Account</h1>
<p>First Name : {{ Auth::user()->firstname }}</p>
<p>Last Name : {{ Auth::user()->lastname }}</p>
<p>Name : {{ Auth::user()->name }}</p>
<p>Email : {{ Auth::user()->email }}</p>

<!-- Authentication -->
<button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    {{ __('Log out') }}
</button>
<form method="POST" id="logout-form" action="{{ route('logout') }}">
    @csrf
</form>
