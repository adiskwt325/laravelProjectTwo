<!DOCTYPE html>
<html>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<!-- <div style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; bottom: 0; right: 0; left: 0;">
<h1>Laravel Project Two</h1>
</div> -->

<h1>Laravel Project Two</h1>
</body>
</html>