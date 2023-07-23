<?php use Illuminate\Support\Facades\Request; ?>
<nav>
    <a href="/" class="@if (request()->routeIs('welcome')) active @endif">Home</a> |
    <a href="/product/5" class="@if (request()->routeIs('article')) active @endif">Product</a> |
    <a href="/bill/7" class="@if (request()->routeIs('facture')) active @endif">Bill</a> |
    <a href="/account" class="@if (request()->routeIs('account')) active @endif">Account</a> | 
    <a href="/film" class="@if (request()->routeIs('film*')) active @endif">Film</a> |
    <a href="/photo" class="@if (Request::is('photo')) active @endif">Photo</a> |
    <a href="/contact" class="@if (Request::is('contact')) active @endif">Contact</a> |
    <a href="/req?name=Lionel" class="@if (request()->routeIs('req')) active @endif">Request</a> |
    <a href="/api/films" class="@if (Request::is('api/films')) active @endif">Api</a><a href="/api/films/7" class="@if (Request::is('api/films/7')) active @endif">7</a> |

    <a href="/t" class="@if (Request::is('t')) active @endif">Test</a>
</nav>
