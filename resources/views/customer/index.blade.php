@extends ('layout')

@section('content')

@foreach($customers as $customer)

    <div class="content">
        <p>{{ $customer->lastname }} {{ $customer->name }}</p>
        <hr>
    </div>
@endforeach

@endsection
