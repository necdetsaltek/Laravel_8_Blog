

<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

@php $cdn = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/";@endphp
@include('layouts.head')

<body>
    @include('inc.navbar')
    @yield('content')
    @include('layouts.foot')
</body>
</html>