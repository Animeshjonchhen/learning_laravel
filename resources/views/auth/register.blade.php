@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container p-5">
            <form action="{{ route('register')}}" method="POST">
                @csrf
               
                <div class="mb-3">                    
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>   
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="{{ old('name') }}">                    
                    @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>                    
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{ old('email') }}">
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

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Choose a password" name="password_confirmation" value="">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection