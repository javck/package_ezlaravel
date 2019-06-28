<div class="container">

	<div class="row topmargin-lg bottommargin-sm">

		<div class="heading-block center">
			<h2>{{ $item_feedback_center->title }}</h2>
			<h4>{{ $item_feedback_center->subtitle }}</h4>
		</div>

		<div class="col-md-4 col-sm-6 bottommargin">

			@isset($items_feedback[0])
			<div class="feature-box fbox-right topmargin" data-animate="fadeIn{{ $items_feedback[0]->animation }}" data-delay={{ $items_feedback[0]->animationDelay }}>
				<div class="fbox-icon">
					<img src="{{asset('images/'.$items_feedback[0]->pic)}}" alt="{{ $items_feedback[0]->alt }}" style="margin-left: 0px;">
				</div>
				<h3>{{ $items_feedback[0]->title }}</h3>
				<p>{{ $items_feedback[0]->content }}</p>
			</div>
			@endisset @isset($items_feedback[1])
			<div class="feature-box fbox-right topmargin" data-animate="fadeIn{{ $items_feedback[1]->animation }}" data-delay={{ $items_feedback[1]->animationDelay }}>
				<div class="fbox-icon">
					<img src="{{asset('images/'.$items_feedback[1]->pic)}}" alt="{{ $items_feedback[1]->alt }}" style="margin-left: 0px;">
				</div>
				<h3>{{ $items_feedback[1]->title }}</h3>
				<p>{{ $items_feedback[1]->content }}</p>
			</div>
			@endisset @isset($items_feedback[2])
			<div class="feature-box fbox-right topmargin" data-animate="fadeIn{{ $items_feedback[2]->animation }}" data-delay={{ $items_feedback[2]->animationDelay }}>
				<div class="fbox-icon">
					<img src="{{asset('images/'.$items_feedback[2]->pic)}}" alt="{{ $items_feedback[2]->alt }}" style="margin-left: 0px;">
				</div>
				<h3>{{ $items_feedback[2]->title }}</h3>
				<p>{{ $items_feedback[2]->content }}</p>
			</div>
			@endisset

		</div>

		<div class="col-md-4 hidden-sm bottommargin center hidden-xs">
			<img src="{{asset('images/'.$item_feedback_center->pic )}}" alt="{{ $item_feedback_center->alt }}">
		</div>

		<div class="col-md-4 col-sm-6 bottommargin">

			@isset($items_feedback[3])
			<div class="feature-box fbox-left topmargin" data-animate="fadeIn{{ $items_feedback[3]->animation }}" data-delay={{ $items_feedback[3]->animationDelay }}>
				<div class="fbox-icon">
					<img src="{{asset('images/'.$items_feedback[3]->pic)}}" alt="{{ $items_feedback[3]->alt }}" style="margin-left: 0px;">
				</div>
				<h3>{{ $items_feedback[3]->title }}</h3>
				<p>{{ $items_feedback[3]->content }}</p>
			</div>
			@endisset @isset($items_feedback[4])
			<div class="feature-box fbox-left topmargin" data-animate="fadeIn{{ $items_feedback[4]->animation }}" data-delay={{ $items_feedback[4]->animationDelay }}>
				<div class="fbox-icon">
					<img src="{{asset('images/'.$items_feedback[4]->pic)}}" alt="{{ $items_feedback[4]->alt }}" style="margin-left: 0px;">
				</div>
				<h3>{{ $items_feedback[4]->title }}</h3>
				<p>{{ $items_feedback[4]->content }}</p>
			</div>
			@endisset @isset($items_feedback[5])
			<div class="feature-box fbox-left topmargin" data-animate="fadeIn{{ $items_feedback[5]->animation }}" data-delay={{ $items_feedback[5]->animationDelay }}>
				<div class="fbox-icon">
					<img src="{{asset('images/'.$items_feedback[5]->pic)}}" alt="{{ $items_feedback[5]->alt }}" style="margin-left: 0px;">
				</div>
				<h3>{{ $items_feedback[5]->title }}</h3>
				<p>{{ $items_feedback[5]->content }}</p>
			</div>
			@endisset

		</div>

	</div>

</div>
