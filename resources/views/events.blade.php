@extends('layout.master')

@section('contents')



<body class="uk-background-body">

<header id="header">
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ; top: #header">

	</div>
	<div class="uk-container uk-container-large">
		<div class="uk-position-relative uk-visible-toggle uk-light uk-box-shadow-small uk-overflow-hidden uk-border-rounded"
			tabindex="-1" data-uk-slider="autoplay: true">
			<ul class="uk-slider-items uk-child-width-1-1">
				<li>
					<img src="{{asset('frontend/img/4.jpg')}}" alt="Slide">
					<div class="uk-position-cover uk-overlay-light uk-flex uk-flex-right uk-flex-middle uk-padding-slide">
						<div class="uk-width-1-2@m">
							<h2 class="uk-heading-medium uk-letter-spacing-medium">Christmas Concerts in New York</h2>
							<p>
								<a class="hvr-forward" href="event.html" data-uk-icon="icon: arrow-right">Make it an Unforgettable Holiday Season</a>
							</p>
						</div>
					</div>
				</li>
				<li>
					<img src="{{asset('frontend/img/3.jpg')}}" alt="Slide">
					<div class="uk-position-cover uk-overlay-light uk-flex uk-flex-middle uk-padding-slide">
						<div class="uk-width-1-2@m">
							<h2 class="uk-heading-medium uk-letter-spacing-medium">Product Management Conference</h2>
							<p>
								<a class="hvr-forward" href="event.html" data-uk-icon="icon: arrow-right">Coming to San Francisco</a>
							</p>
						</div>
					</div>
				</li>
			</ul>
			<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous
				data-uk-slider-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next
				data-uk-slider-item="next"></a>
		</div>
	</div>
	<div class="uk-container">
		<div class="uk-background-secondary uk-light uk-border-rounded-large uk-header-banner uk-header-banner-events uk-position-relative
			uk-position-z-index uk-box-shadow-small" data-uk-scrollspy="cls: uk-animation-scale-up; repeat: true">
			<div class="uk-grid-small" data-uk-grid>
				<div class="uk-width-expand">
					<div class="uk-child-width-1-3@m uk-grid-small" data-uk-grid>
						<div>
							<label class="uk-form-label" for="where">Looking for</label>
							<input class="uk-input" type="text" placeholder="Anything">
						</div>
						<div>
							<label class="uk-form-label" for="where">In</label>
							<select class="uk-select" id="where">
								<option>Anywhere</option>
								<option>London</option>
								<option>New York</option>
								<option>Paris</option>
								<option>Berlin</option>
								<option>Miami</option>
							</select>
						</div>
						<div>
							<label class="uk-form-label" for="datepicker">When</label>
          		<input id="datepicker" class="uk-input" type="text" placeholder=" Any date" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="uk-width-auto uk-flex uk-flex-bottom">
					<a href="#" class="uk-icon-button" data-uk-icon="icon: search; ratio: 1.2"></a>
				</div>
			</div>
		</div>
	</div>
</header>



<div class="uk-section uk-margin-top">
  <div class="uk-container">
    <div class="uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
      <div class="uk-width-expand@m">
        <h2>Upcoming Events</h2>
      </div>
      <div class="uk-width-auto@m">
        <select class="uk-select uk-select-light">
          <option>Any Type</option>
          <option>Online</option>
          <option>Residential</option>
        </select>
      </div>
      <div class="uk-width-auto@m">
        <select class="uk-select uk-select-light">
          <option>Any Category</option>
          <option>Music</option>
          <option>Marketing</option>
          <option>Accounting</option>
          <option>Business</option>
          <option>Creative</option>
        </select>
      </div>
    </div>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin-medium-top" data-uk-grid>
      <div>

        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/Y_paTwmA7sc/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$59.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Feb</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">2</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Fosters Live in Great Hall</h3>
                <p class="uk-text-muted uk-text-small">10902 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/w423NnHFjFg/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$119.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Nov</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">30</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Door Stopper Rock Concert</h3>
                <p class="uk-text-muted uk-text-small">40111 Small Arena, New York City USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/S3hhrqLrgYM/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$99.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Feb</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">10</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">ProductCon Conference</h3>
                <p class="uk-text-muted uk-text-small">90111 Short Beach Hall, San Francisco</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/W3SEyZODn8U/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">FREE</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Jan</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">8</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Local Food Tasting Group Meetup</h3>
                <p class="uk-text-muted uk-text-small">40111 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/bzdhc5b3Bxs/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$19.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Nov</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">21</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">React Development Conference</h3>
                <p class="uk-text-muted uk-text-small">40111 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/zFBVxClB2I8/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$29.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Mar</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">27</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Software Development Conference</h3>
                <p class="uk-text-muted uk-text-small">40111 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
    </div>
    <div class="uk-text-center uk-margin-large-top">
      <div class="uk-text-primary"><span class="uk-margin-small-right"><img src="img/loader.svg" alt="Loader" width="22" height="22" data-uk-svg></span> Loading More</div>
    </div>
  </div>
</div>



<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index-2.html">Sprin</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-medium-top uk-text-center">
      <li ><a href="index-2.html">Courses</a></li>
      <li class="uk-active"><a href="events.html">Events</a></li>
      <li ><a href="course.html">Course</a></li>
      <li ><a href="event.html">Event</a></li>
      <li ><a href="search.html">Search</a></li>
      <li ><a href="sign-in.html">Sign In</a></li>
      <li ><a href="sign-up.html">Sign Up</a></li>
    </ul>
    <div class="uk-margin-medium-top">
      <a class="uk-button uk-width-1-1 uk-button-primary-light" href="sign-up.html">Sign Up</a>
    </div>
    <div class="uk-margin-medium-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/datepicker.js"></script>


</body>


<!-- events.html  19 Nov 2019 03:39:40 GMT -->
</html>

@endsection
