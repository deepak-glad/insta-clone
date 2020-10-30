@extends('layouts.app')
@section('title')
Instagram Clone
@endsection

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

                    {{ __('You are successfully logged in!') }}
                    <a href="/home/profile" >Profile</a>
                    //
                    
                    $status =1;
 $info = JOBS::where(function($query) use ($status){        
         $query->where('status',$status);
         })->get();
print_r($info);
                    //
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
