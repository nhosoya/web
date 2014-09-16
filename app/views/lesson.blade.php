@extends('layout')
@section('content')
<script type="text/javascript">
function setCurrentTime(time) {
	var video = document.getElementById("lesson-video");
	video.currentTime = time;
	video.pause();
}
</script>
<div class="row">
	<div class="col-sm-12 col-md-9">
		<h3>スーパープレイ集に学ぶテクニック</h3>
		<div class="video-wrap">
			<video id="lesson-video" controls>
				<source src="/videos/handball.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
				<source src="/videos/handball.webm" type='video/webm; codecs="vp8, vorbis"' />
				<p>Video tag not supported. Download the video <a href="/videos/handball.webm">here</a>.</p>
			</video>
		</div>
		<div class="posting">
			<div class="row">
				<div class="col-xs-2">
					<a href="#">
						<img src="/images/hosokawa.jpg" alt="hosokawa" class="img-rounded img-responsive comment-avator">
					</a>
				</div>
				<div class="col-xs-10">
					<div class="comment">
						<div class="comment-header">
							<div class="comment-header-text">
								<strong>hosokawa</strong>
								commented 2014/09/03 23:23:23
							</div>
						</div>
						<div class="comment-content">
							<div class="comment-context-text">
								<p>竹山老師、ぜひご教授いただきたいことがございます。<br>
									<a href="#" onClick="setCurrentTime(9)">00:09</a>
									投稿の00:09のシーンですが、浅学非才の私めにはどうしてもこのようなパスコースを想像することができません。<br>
									どうすれば嫁を怒らすことなく合コンへ行き、
									相手を見事に欺くパスを決めてお持ち帰りをすることができるのでしょうか。
								</p>
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
						<img src="/images/naoto.jpg" alt="naoto" class="img-rounded img-responsive comment-avator">
					</a>
				</div>
				<div class="col-xs-10">
					<div class="comment">
						<div class="comment-header">
							<div class="comment-header-text">
								<strong>takeyama</strong>
								commented 2014/09/04 10:05:23
							</div>
						</div>
						<div class="comment-content">
							<div class="comment-context-text">
								<p>筋トレあるのみ。</p>
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
						<img src="/images/hosokawa.jpg" alt="hosokawa" class="img-rounded img-responsive comment-avator">
					</a>
				</div>
				<div class="col-xs-10">
					<form class="comment">
						<div class="comment-header">
							<div class="comment-header-text">
								please comment.
							</div>
						</div>
						<div class="comment-form-content">
							<textarea class="form-control" rows="3" placeholder="Leave a comment"></textarea>
							<div class="comment-form-button">
								<button type="button" class="btn btn-success">Comment</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="hidden-xs hidden-sm col-md-3">
		<div class="coach-information">
			<h4>Coach information</h4>
			<div class="information-box">
				<div class="informatin-label">
					<strong>Name</strong>
				</div>
				<div class="information-content">
					<a href="#">Naoto Takeyama</a>
				</div>
			</div>
			<div class="information-box">
				<div class="informatin-label">
					<strong>Age</strong>
				</div>
				<div class="information-content">
					27
				</div>
			</div>
			<div class="information-box">
				<div class="informatin-label">
					<strong>Gender</strong>
				</div>
				<div class="information-content">
					male
				</div>
			</div>
			<div class="information-box">
				<div class="informatin-label">
					<strong>Nationality</strong>
				</div>
				<div class="information-content">
					Japan
				</div>
			</div>
			<div class="information-box">
				<div class="informatin-label">
					<strong>Sports</strong>
				</div>
				<div class="information-content">
					Ice Hockey<br>
					VolleyBall<br>
					Tennis<br>
					AutoRace
				</div>
			</div>
			<div class="social">
				<a href="#">
					<img src="/images/facebook.png" alt="facebook" class="social-icon">
				</a>
				<a href="#">
					<img src="/images/twitter.png" alt="twitter" class="social-icon">
				</a>
				<a href="#">
					<img src="/images/googleplus.png" alt="googleplus" class="social-icon">
				</a>
			</div>
		</div>
	</div>
</div>
@stop