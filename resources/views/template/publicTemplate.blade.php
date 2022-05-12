<!DOCTYPE html>
<html>
    @include('template.head', ['title' => 'Spamfone'])
    <body>
        @include('template.header', ['title' => 'Spamfone', 'slogan' => 'Compartilhar é a melhor forma de se proteger!'])

        <div class="container">
            @yield('page')
        </div>

        @include('template.footer')
        <script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="./js/fontawesome/all.min.js"></script>
    </body>
</html>