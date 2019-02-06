@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('profile.update_image') }}" method="post">
            {{--<input type=""--}}
        </form>
    </div>

@endsection