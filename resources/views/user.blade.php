@extends('layouts.app')

@section('content')

<body>
    <div>
        @include('layouts.inc.navbar')
        @yield('sadrzaj')
        @include('layouts.inc.footer')
    </div>
</body>
@endsection