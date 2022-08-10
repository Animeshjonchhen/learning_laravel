@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-center">
            <x-post :post="$post" />
        </div>
    </div>
@endsection