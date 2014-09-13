@extends('layout')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-9">
		<h3>花ちゃんのちょっといいとこ見てみたい</h3>
		<div>
			<img src="/images/200011277513-1p.jpg" alt="hanachan" class="img-rounded img-responsive">
		</div>
		<div class="posting">
			<div class="row">
				<div class="col-xs-2">
					<a href="#">
						<img src="/images/kangoku14.jpg" alt="kangoku14" class="img-rounded img-responsive comment_avator">
					</a>
				</div>
				<div class="col-xs-10">
					<div class="comment">
						<div class="comment_header">
							<div class="comment_header_text">
								<strong>hosokawa</strong>
								commented 2014/09/03
							</div>
						</div>
						<div class="comment_content">
							<div class="comment_context_text">
								<p>よごされちゃった</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="posting">
			<div class="row">
				<div class="col-xs-2">
					<a href="#">
						<img src="/images/kangoku6.jpg" alt="kangoku6" class="img-rounded img-responsive comment_avator">
					</a>
				</div>
				<div class="col-xs-10">
					<div class="comment">
						<div class="comment_header">
							<div class="comment_header_text">
								<strong>hosokawa</strong>
								commented 2014/09/03
							</div>
						</div>
						<div class="comment_content">
							<div class="comment_context_text">
								<p>よごされちゃった</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="posting">
			<div class="row">
				<div class="col-xs-2">
					<a href="#">
						<img src="/images/kangoku6.jpg" alt="kangoku6" class="img-rounded img-responsive comment_avator">
					</a>
				</div>
				<div class="col-xs-10">
					<form class="comment">
						<div class="comment_header">
							<div class="comment_header_text">
								please comment.
							</div>
						</div>
						<div class="comment_form_content">
							<textarea class="form-control" rows="3" placeholder="Leave a comment"></textarea>
							<div class="comment_form_button">
								<button type="button" class="btn btn-success">Comment</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="hidden-xs hidden-sm col-md-3">
		<div class="coach_information">
			<h4>Coach information</h4>
			<p>info</p>
			<p>info</p>
			<p>info</p>
			<p>info</p>
			<p>info</p>
			<p>info</p>
			<div class="social">
				<img src="/images/facebook.png" alt="facebook" class="social_icon">
				<img src="/images/twitter.png" alt="twitter" class="social_icon">
				<img src="/images/googleplus.png" alt="googleplus" class="social_icon">
			</div>
		</div>
	</div>
</div>
@stop