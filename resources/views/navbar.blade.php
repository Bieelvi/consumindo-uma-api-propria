<?php $session = new \Symfony\Component\HttpFoundation\Session\Session(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        
        @if ($session->get('token'))
            <a href="/sair">Sair</a>               
        @else    
            <a href="/login">Entrar</a>    
        @endif
    </div>
</nav>