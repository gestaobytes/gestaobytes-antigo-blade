<!DOCTYPE html>
<html lang="pt-BR">
    @include('layouts.frontend._head')


    <body>
        @include('layouts.frontend._top')

        @yield('content')
        
        @include('layouts.frontend._footer')
        
        @include('layouts.frontend._modals')
    
        @include('layouts.frontend._scripts')
    </body>
</html>
