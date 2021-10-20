<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion</title>
    <link rel="stylesheet" href="{{asset('css/discussionstyle.css')}}">
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
        <div class="discussion-box">
            <div class="upper-box">
                <div class="logo">
                    <img src="{{asset('Assets/4fecdf203e93afdfd0360d3f8194ccbf.png')}}" alt="">
                    <p>Trending paws</p>
                </div>
                <div class="discuss">
                    <p class="discuss-title">{{$post->title}}</p>
                    <p class="discuss-desc">{{$post->description}}</p>
                </div>
            </div>
            <div class="action">
                <img src="{{asset('Assets/share-option.svg')}}" alt="">
                <P class="share">Share</P>
                <img src="{{asset('Assets/exclamation-warning-sign.svg')}}" alt="">
                <p class="report">Report</p>
                <img src="{{asset('Assets/star.svg')}}" alt="">
                <p class="follow">Follow</p>
            </div>
            <hr>
            <div class="comment-box">
                <input type="text" class="comment" placeholder="Comment">
            </div>
            <div class="middle-box">
                <img src="{{asset('Assets/link.svg')}}" alt="">
                <button class="post-button">Paw It</button>
            </div>
            <hr>
            <div class="user-box1">
                <div class="user1">
                    <img src="{{asset('Assets/user.png')}}" alt="">
                    <p class="username">Designer112</p>
                </div>
                <div class="user-comment">
                    <p class="user-desc">Maybe i can help you with that. Would you like to tell me the concept you chose to renovate your house?</p>
                </div>
                <div class="tip-button">
                    <a href="">Tip</a>
                </div>
            </div>
            <div class="reply-report">
                <div class="reply">
                    <a href="">Reply</a>
                </div>
                <div class="report">
                    <a href="">Report</a>
                </div>
            </div>
            <div class="user-box2">
                <div class="user2">
                    <img src="{{asset('Assets/user.png')}}" alt="">
                    <p class="username">User101</p>
                </div>
                <div class="user-comment">
                    <p class="user-desc">I'm using minimalist concept to renovate my house</p>
                </div>
            </div>
            <div class="reply-report2">
                <div class="reply">
                    <a href="">Reply</a>
                </div>
                <div class="report">
                    <a href="">Report</a>
                </div>
            </div>
        </div>
        <div class="right-box">
            <div class="profile-box">
                <div class="profile-user">
                    <img src="{{asset('Assets/user.png')}}" alt="">
                    <div class="profile">
                        <p class="profile-name">{{$post->username}}</p>
                        <a href="" onclick="openModal()">View Pawfile</a>
                    </div>
                </div>
                <p class="status">A man who always smile</p>
                <div class="post-followers">
                    <p class="post">Post: 2</p>
                    <p class="followers">Followers: 0</p>
                </div>
            </div>
            <div class="related-box">
                <div class="relatedtitle-box">
                    <p class="related-title">Related Posts</p>
                </div>
                <div class="related-post">
                    <a href="">Design idea for house</a>
                    <p class="short-desc">Here is some idea to design your house.</p>
                </div>
                <div class="related-post">
                    <a href="">What flower motive should i use for my house wallpaper?</a>
                    <p class="short-desc">Discussion for wallpaper in house.</p>
                </div>
                <div class="related-post">
                    <a href="">RIP my closet. Someone please help!!!</a>
                    <p class="short-desc">You should know more about closet.</p>
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
        <script src="{{asset('js/DiscussionPage.js')}}"></script>
</body>
</html>