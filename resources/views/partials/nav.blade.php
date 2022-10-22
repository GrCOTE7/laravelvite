<nav>
    <a href="/article/5" class="@if (request()->routeIs('article')) active @endif">Article</a> |
    <a href="/facture/7" class="@if (request()->routeIs('facture')) active @endif">Facture</a> |
    <a href="/t" class="@if (request()->routeIs('test')) active @endif">Test</a> |
    <a href="/login" class="@if (request()->routeIs('account')) active @endif">Compte</a>
</nav>
