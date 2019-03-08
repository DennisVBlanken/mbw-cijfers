@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>About this app:</h3>
            <div class="card">
                <div class="card-body">
                	Application build number: 2.1<br>
                	Laravel version: {{app()->version()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection