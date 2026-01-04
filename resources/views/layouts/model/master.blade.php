<!doctype html>
<html lang="en">

@include('layouts.model.partials.head')


<body>

    <main class=" my-5 d-flex align-items-center py-3">

        @yield('content')
    </main>

    @include('layouts.model.partials.script')
</body>

</html>