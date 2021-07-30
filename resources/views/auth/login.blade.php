<!DOCTYPE html>
<html lang="en-gb" dir="ltr">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sprin | Courses and Events HTML Template</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" />
  <script src="{{ asset('frontend/js/uikit.js')}}"></script>

</head>

<body >

<div class="uk-grid-collapse" data-uk-grid>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center" data-uk-height-viewport>
    <div class="uk-width-3-4@s">
      <div class="uk-text-center uk-margin-bottom">
        <a class="uk-logo uk-text-primary uk-text-bold" href="/">Sprin</a>
      </div>
      <div class="uk-text-center uk-margin-medium-bottom">
        <h1 class="uk-letter-spacing-small">Sign In to Sprin</h1>
      </div>
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex uk-flex-center uk-margin">
        <div>
          <a href="#" data-uk-icon="icon: facebook" class="uk-icon-button uk-icon-button-large facebook"></a>
        </div>
        <div>
          <a href="#" data-uk-icon="icon: google-plus" class="uk-icon-button uk-icon-button-large google-plus"></a>
        </div>
        <div>
          <a href="#" data-uk-icon="icon: linkedin" class="uk-icon-button uk-icon-button-large linkedin"></a>
        </div>
      </div>    
      <div class="uk-text-center uk-margin">
        <p class="uk-margin-remove">Or use your email account:</p>
      </div>
      <form action="/login" method="POST">
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="email">Email</label>
          <input id="email" class="uk-input uk-form-large" type="email" placeholder="tom@company.com" name="email">
          @error('email')
              <span style="color: red">email error</span>
          @enderror
        </div>
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="password">Password</label>
          <input id="password" class="uk-input uk-form-large" type="password" placeholder="Min 8 characters">
        </div>
        <div class="uk-width-1-1 uk-margin uk-text-center">
          <a class="uk-text-small uk-link-muted" href="#">Forgot your password?</a>
        </div>
        <div class="uk-width-1-1 uk-text-center">
          <button class="uk-button uk-button-primary uk-button-large">
            <a class="uk-text-small uk-link-muted" href="#">Sign In</a></button>
        </div>
      </form>
    </div>
  </div>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center uk-light
    uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-overlay-blend" 
    style="background-image: url(https://source.unsplash.com/2FPjlAyMQTA/680x1000);" data-uk-height-viewport>
    <div>
      <div class="uk-text-center">
        <h2 class="uk-h1 uk-letter-spacing-small">Hello There, Join Us</h2>
      </div>
      <div class="uk-margin-top uk-margin-medium-bottom uk-text-center">
        <p>Enter your personal details and join the learning community</p>
      </div>
      <div class="uk-width-1-1 uk-text-center">
        <a href="/signup" class="uk-button uk-button-primary uk-button-large">Sign Up</a>
      </div>
    </div>
  </div>
</div>

</body>


</html>

