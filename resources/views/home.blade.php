@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="">
                <div class="card-header " style="text-align: right;background-color: #8fc4b7;">
                        <a class="text-white" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="text-decoration: none">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h3 > Hi {{ Auth::user()->name }} </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
