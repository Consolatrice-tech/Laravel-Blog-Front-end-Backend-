@extends('layout.master')

@section('contents')
<div class="uk-container uk-container-large">
		<div class="uk-position-relative uk-visible-toggle uk-light uk-box-shadow-small uk-overflow-hidden uk-border-rounded"
		 tabindex="-1" data-uk-slider="autoplay: true">
			<ul class="uk-slider-items uk-child-width-1-1">
				<li>
					<img src="{{asset('frontend/img/2.jpg')}}" alt="Slide">
					<div class="uk-position-cover uk-overlay-light uk-flex uk-flex-middle uk-padding-slide">
						<div class="uk-width-3-4@m">
							<h2 class="uk-heading-medium uk-letter-spacing-medium">Start a New Career Begin Today</h2>
							<p>
								<a class="hvr-forward" href="course.html" data-uk-icon="icon: arrow-right">UX Design with Josh Alkin</a>
							</p>
						</div>
					</div>
				</li>
				<li>
					<img src="{{asset('frontend/img/1.jpg')}} "alt="Slide">
					<div class="uk-position-cover uk-overlay-xlight uk-flex uk-flex-middle uk-padding-slide">
						<div class="uk-width-1-2@m">
							<h1 class="uk-heading-medium uk-letter-spacing-medium">Learn New Skills & Hobbies</h1>
							<p>
								<a class="hvr-forward" href="course.html" data-uk-icon="icon: arrow-right">Outdoor Photography with Josh Alkin</a>
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
<div class="uk-section uk-margin-top">
  <div class="uk-container">
    <div class="uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
      <div class="uk-width-expand@m">
        <h2>Popular Courses</h2>
      </div>
      <div class="uk-width-auto@m">
        <select class="uk-select uk-select-light">
          <option>Any Type</option>
          <option>Online</option>
          <option>School</option>
        </select>
      </div>
      <div class="uk-width-auto@m">
        <select class="uk-select uk-select-light">
          <option>Any Category</option>
          <option>Web Design</option>
          <option>Marketing</option>
          <option>Accounting</option>
          <option>Business</option>
          <option>Design</option>
        </select>
      </div>
    </div>
    
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin-medium-top" data-uk-grid>
      @foreach($blogs as $blog)
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src='{{$blog->link}}' alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$27.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>
          </div>

          <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-small-bottom">{{$blog->title}}</h3>
            <div class="uk-text-muted uk-text-small">Thomas Haller</div>
            <div class="uk-text-muted uk-text-xxsmall uk-rating uk-margin-small-top">
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.75"></span>
              <span class="uk-margin-small-left uk-text-bold">5.0</span>
              <span>(324)</span>
            </div>
          </div>
          <a href="{{route('details', $blog->id)}}" class="uk-position-cover"></a>
        </div>
      </div>

      @endforeach
      </div>
     
    </div>
    <div class="uk-text-center uk-margin-large-top">
      <div class="uk-text-primary"><span class="uk-margin-small-right"><img src="img/loader.svg" alt="Loader" width="22" height="22" data-uk-svg></span> Loading More</div>
    </div>
  </div>
</div>



{{-- <table>
    <tr>
        <th>title</th>
    <th>picture</th>
    <th>description</th>
    <th>content</th>
    <th>status</th>
    <th>date</th>
    </tr>
    @foreach($blogs as $blog)
    <tr>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->picture }}</td>
        <td>{{ $blog->description }}</td>
        <td>{{ $blog->content }}</td>
        <td>{{ $blog->status }}</td>
    </tr>
    @endforeach
</table> --}}

@endsection

