@extends('site.admin.home')
@section('corp')
@section('corp')

<div class="container mt-5 text-center">
        <h2 class="mb-4">
             Archives
        </h2>

        <form action="{{ route('archive') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-center">
                    <input type="text" name="year"  required align="centre">
                    
                </div>
            </div>
            <button class="btn btn-primary">Archive</button>
            
        </form>
    </div>
  
@if( Session::has( 'success' ))
     {{ Session::get( 'success' ) }}
@elseif( Session::has( 'warning' ))
     {{ Session::get( 'warning' ) }} <!-- here to 'withWarning()' -->
@endif

@endsection