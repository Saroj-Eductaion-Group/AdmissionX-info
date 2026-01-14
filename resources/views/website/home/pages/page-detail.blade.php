@extends('website.home.layouts.app-layout')

@section('content')
<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>{{ $pageObj->title }}</h1>
            </div>
            
            <div class="page-content" style="background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                {!! $pageObj->body !!}
            </div>
        </div>
    </div>
</div>
@endsection
