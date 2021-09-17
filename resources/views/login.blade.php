@extends('layout.app')

@section('content')
    <div class="login-div" style="margin-left: 5vw">
        <h1>Login</h1>
        @if (session()->has('error'))
            <div class="alert alert-danger" style="width:40%">
                {{ session()->get('error') }}
            </div>
        @endif
        {{-- {{ $hash }} --}}
        <form action="{{ route('login-post') }}" method="post" class="form-all">

            {{ csrf_field() }}
            <div class="form" style="display: flex; flex-direction: column; width: 30vw">
                <div class="flex1">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control">
                    @if ($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
                </div>
                <div class="flex2">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" style="margin-bottom: 20px">
                    @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
@stop
