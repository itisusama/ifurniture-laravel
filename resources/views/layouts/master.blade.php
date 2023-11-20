<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.head')
</head>
<body>
    @include('partials.navbar')       
    <section style="margin-top: 100px">
    @yield('ifurniture-content')
    </section>
    @include('partials.footer')   
    @include('partials.scripts')
</body>
</html>