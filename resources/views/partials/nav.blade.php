<?php use Illuminate\Support\Facades\Request; ?>
<nav>
    <a href="/" class="@if (request()->routeIs('welcome')) active @endif">Home</a> |
    <a href="/article/5" class="@if (request()->routeIs('article')) active @endif">Article</a> |
    <a href="/facture/7" class="@if (request()->routeIs('facture')) active @endif">Facture</a> |
    <a href="/t" class="@if (request()->routeIs('test')) active @endif">Test</a> |
    <a href="/users" class="@if (request()->routeIs('users')) active @endif">Compte</a> |
    <a href="/contact" class="@if (Request::is('contact')) active @endif">Contact</a> |
    <a href="/email" class="@if (Request::is('email')) active @endif">Email</a>
</nav>
