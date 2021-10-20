<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Home</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<style>
			* {
				margin: 0;
				padding: 0;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="headerTengah">
				<a href="/home">
					<img src="{{asset('Assets/logo.png')}}" alt="" />
				</a>
			</div>
			<div id="headerKanan">
					@if(Auth::user())
						<label for="" class="welcome" >Welcome, {{Auth::user()['username']}}</label>
						<form action="/logout" method="POST">
						@csrf
							<button type="submit">Logout</button>
						</form>
						@else
						<a href="/login">
							<button>Login</button>
                    	</a>
					@endif
			</div>
		</div>

		<div class="content">
			<div class="content1">
				<h1>Selamat datang di Dogo</h1>
				<p>
					Dogo, adalah komunitas yang dibentuk bagi para user yang
					membutuhkan rekomendasi design sebuah ruangan, kamar ataupum
					rumah. User juga dapat mendaftar sebagai pemberi ide apabila
					memenuhi syarat kami. Syarat kami dapat dilihat di bawah
					ini.
				</p>
				<a href="">Syarat & Ketentuan</a>
			</div>
			<div class="content2">
				<input type="text" placeholder="Search.." />
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
			<br />
			<div class="content3">
				<div class="kiri-content3">
					<span class="span1">Panas</span>
					<span class="span1">Terbaru</span>
					<span class="span1">Rumah</span>
					<span class="span1">Ruangan</span>
				</div>
				<div class="kanan-content3">
					@if(Auth::user())
						<button onclick="openForm(event)">Post</button>
					@else
						<a href="{{route('login')}}">
							<button>Post</button>
						</a>
					@endif
				</div>
			</div>

			<div class="form-popup" id="popup-discussion">
				<form action="{{ route('createPost') }}" class="form-container" method="POST">
				@csrf
					<h1>New Discussion</h1>
					<br />
					<label for="title">Title</label>
					<input
						type="text"
						placeholder="Your Discussion Title"
						id="titleField"
						name="title"
					/>

					<label for="desc">Description</label>
					<textarea
						name="description"
						id="descField"
						cols="30"
						rows="10"
						placeholder="Your Discussion Description"
					></textarea>
					<button class="btn" onclick="newDiscussion(event)">
						Post it
					</button>
					<button class="btn-cancel" onclick="closeForm(event)">
						Cancel
					</button>
				</form>
			</div>
			
			<div class="content4">
				<div id="kiricontent4">
					@foreach($posts as $post)
					<a href="/discussion/{{$post->id}}" class="discussion">
						<div class="discussions">
							<div class="trending-paw">
								<div class="baris1">
									<img
										src="{{asset('Assets/4fecdf203e93afdfd0360d3f8194ccbf.png')}}"
										alt=""
									/>
								</div>
								<div class="baris2">
									<label for="">19.5K </label>
								</div>
							</div>
							<div class="isi-discussion">
								<h1>{{$post->title}}</h1>
								<h3>{{$post->username}}</h3>
								<br />
								<p>
								{{$post->description}}
								</p>
							</div>
						</div>
					</a>
					@endforeach
				</div>
				<div class="kanan">
					<h2>Followed Artist :</h2>
					<div class="artist">
						<a href="">
							<img src="{{asset('Assets/User.png')}}" alt="" />
							<div class="kanan-artist">
								<h4>Sachio</h4>
							</div>
						</a>
					</div>
					<div class="artist">
						<a href="">
							<img src="{{asset('Assets/User.png')}}" alt="" />
							<div class="kanan-artist">
								<h4>Michael</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="baris1">
				<div class="aboutus">
					<a href="">About Us</a>
				</div>
			</div>
			<div class="baris2">
				<div class="kiri-footer">
					Kantor kami :
					<br />
					Gedung ABC lantai 51
					<br />
					Jalan Raya Garuda, Jakarta Pusat, 14320
				</div>
				<div class="kanan-footer">
					<div class="text">Our Social Media</div>
					<div class="socialMedia">
						<img src="{{asset('Assets/facebook.png')}}" alt="" />
						<img
							src="{{asset('Assets/logo-ig-lighting-and-furniture-design-studio-aqua-creations-32.png')}}"
							alt=""
						/>
						<img src="{{asset('Assets/twitter.png')}}" alt="" />
						<img src="{{asset('Assets/youtube.png')}}" alt="" />
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('js/action.js')}}"></script>
	</body>
</html>
