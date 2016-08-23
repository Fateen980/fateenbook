@extends('layout.default')


@section('content')

@include('layout.partials.header')
@include('pages.feedify')

    <script src="{!! asset('js/feedify.min.js') !!}"></script>
    <script>
    $(function() {
      $('.feedify').feedify();
    });
    </script>


@stop