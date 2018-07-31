<h2>Welcome, {{\Auth::user()->email}}</h2>
<br>
@if(\Auth::user()->isAdmin()):
    <a href="{{ route('admin') }}">In admin panel</a>
@endif
<a href="{{route('logout')}}">Logout</a>

