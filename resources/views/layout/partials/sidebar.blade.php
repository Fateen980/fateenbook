<div class="col-md-2">

<div id="wrapper">
    
	 <button type="submit" class="flat-btn">Sign In, Man!</button>
    <h1><img src="img/logo.png" class="img-responsive" width="200px" height="150px"></h1>
 
    <div id="emailsignup" class="email-signup animated">
      <span class="email-signup-head">Feeder is awsome!</span>
      <p>Please enter your e-mail address .</p>
 
      {!! Form::open(array('url' => 'signup')) !!}
        <input  type="email"  name="email" class="email-input" placeholder="you@me.com" tabindex="1">
        <button type="submit" class="flat-btn">Sign Me Up, Tony!</button>
         @if (count($errors) > 0)
         <br>
    <div class="alert alert-danger">
       
            @foreach ($errors->all() as $error)
               {{ $error }}
            @endforeach
        
    </div>
    @endif
      {!! Form::close() !!}

      
    </div><!-- @end .email-signup -->
   
  </div><!-- @end #wrapper -->
</div>