<!DOCTYPE html>
<html>
    @include('template.head', ['title' => $title])
    <body>
        @include('template.header', ['title' => $title, 'slogan' => $slogan])

        <div class="container">
            @yield('page')
        </div>

        @include('template.footer')
        <script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="./js/fontawesome/all.min.js"></script>
    </body>
</html>