@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container p-5">
            <form action="{{ route('login')}}" method="POST">
                @csrf                
                @if (session('status'))                
                    <div class="bg-danger">
                        {{ session('status') }}
                    </div>                    
                @endif

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email" value="">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>                    
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Choose a password" name="password" value="">
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>                    
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="d-flex align-item-center">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember"> Remember me</label>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </form>
        </div>
    </div>
@endsection