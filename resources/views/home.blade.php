@extends('layouts.app')

@section('css')
   <link href="{!! asset('css/feedify.min.css') !!}" rel="stylesheet">
   <link href="{!! asset('css/feedify-theme.min.css') !!}" rel="stylesheet">
   <link href="{!! asset('css/card.css') !!}" rel="stylesheet">
   <link href="{!! asset('css/sidebar.css') !!}" rel="stylesheet">
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">Happening now !</div>

                <div class="panel-body">
                    @include('layout.partials.sidebar')
                    @include('pages.feedify')

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{!! asset('js/feedify.min.js') !!}"></script>
    <script>
    $(function() {
      $('.feedify').feedify();
    });
    </script>
@stop
