@extends(\Request::ajax() == 1 ? 'admin::layouts.ajax' : 'admin::layouts.app')

@section('content')
    <main id="main-container">
        {{--<div class="content">--}}
            <div class="wrapper">
                @yield('dataContent')
            </div>
        {{--</div>--}}
    </main>
@endsection
