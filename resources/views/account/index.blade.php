<?php
use Illuminate\Support\Facades\Auth;
?>
<h2>Welcome, {{\Auth::user()->email}}</h2>
<br>
@if(\Auth::user()->isAdmin == 1)
    <a href="{{ route('admin') }}">In admin panel</a>
@endif
<a href="{{route('logout')}}">Logout</a>

