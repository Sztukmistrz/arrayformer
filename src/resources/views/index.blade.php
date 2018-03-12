<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </head>
  <body>
  
  <section class="section">
    <div class="container">
      <section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Primary title
      </h1>
      <h2 class="subtitle">
        Primary subtitle
      </h2>
    </div>
  </div>
</section>
      
      @foreach($arr as $k => $v)

@if(is_array($v))
<div class="box">
	<h5>{{$k}}</h5>
		@foreach($v as $kk => $vv)
		
		@if(is_array($vv))
		<div class="box">
			@foreach($v as $kkk => $vvv)
				<div class="field">
				  <label class="label">{{$kkk}}</label>
				  <div class="control">
				    <input class="input" type="text" placeholder="Text input" value="{{$vvv}}">
				  </div>
				</div>
			@endforeach
		</div>
		@else
		<div class="field">
		  <label class="label">{{$kk}}</label>
		  <div class="control">
		    <input class="input" type="text" placeholder="Text input" value="{{$vv}}">
		  </div>
		</div>
		@endif
		



	@endforeach
</div>

@else

<div class="field">
  <label class="label">{{$k}}</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" value="{{$v}}">
  </div>
</div>

@endif

      @endforeach


    



    </div>
  </section>
  
  </body>
</html>