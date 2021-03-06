@section('css')
 <link href="{!! asset('css/card.css') !!}" rel="stylesheet">
@endsection
	<div class="row">

		@include('layout.partials.sidebar')
		<div class="col-md-10 col-md-offset-1">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="{!! asset('img/profilePic.jpg') !!}">
                </div>
                <div class="info">
                    <div class="title">
                        {{ ucfirst(Auth::user()->name) }}
                    </div>
                    <div class="desc">Senior PHP Web Developer</div>
                    <div class="desc">MenaItech</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/fateen_alzubi">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
