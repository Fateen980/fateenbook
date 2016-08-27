@extends('layouts.app')

@section('css')
<link href="{!! asset('css/sidebar.css') !!}" rel="stylesheet">
<link href="{!! asset('css/dropzone.css') !!}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
<div class="col-md-5">
	 <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
        <legend>About Me</legend>

       {!! Form::open(array('url' => 'saveInfo','method' => 'post')) !!}
        <fieldset>
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="nickname" class="control-label">NickName</label>
            </div>
            <div class="col-lg-8 col-sm-8">
             <input id="nickname" name="nickname" placeholder="NiceName" type="text" class="form-control"  value="{{ old('nickname') }}"  required/>
                
                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
            </div>
            </div>
            </div>
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="fakename" class="control-label">Fake Name</label>
            </div>
            <div class="col-lg-8 col-sm-8">
             <input id="fakename" name="fakename" placeholder="Fake Name" type="text" class="form-control"  value="{{ old('fakename') }}" />
                <span class="text-danger"></span>
            </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="aboutMe" class="control-label">About me</label>
            </div>
            <div class="col-lg-8 col-sm-8">
             <textarea name="about" class="form-control" placeholder="About me"  rows="3" id="aboutMe">{{ old('about') }}</textarea>
                <span class="text-danger"></span>
            </div>
            </div>
            </div>


            <div class="form-group">
            <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                <input id="btn_add" name="btn_add" type="submit" class="flat-btn" value="save" />
               
            </div>
            </div>
        </fieldset>
        {!! Form::close() !!}
        
        </div>
    </div>
	
</div>

<div class="col-md-7">
<legend>Add Your Photos</legend>
<form action="/uploadImgProfile"  method="post"  class="dropzone"   id="myAwesomeDropzone">
 {{csrf_field()}}   
</form>	   

</div>


</div>

@endsection
@section('js')
<script src="{!! asset('js/dropzone.js') !!}"></script>
<script>	
Dropzone.options.myAwesomeDropzone = {
  paramName: "photos", // The name that will be used to transfer the file
  maxFilesize: 3, // MB
  addRemoveLinks:true,
  clickable:true,
  acceptedFiles:'.png,.jpg',
  dictRemoveFile:'Delete',
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};

</script>
@stop
