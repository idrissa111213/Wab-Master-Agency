<header class="techwave_fn_header">

			<!-- Header left: token information -->
			<div class="header__left">
				<div class="fn__token_info">
					
					<a href="pricing.html" class="token_upgrade techwave_fn_button"><span>Upgrade</span></a>
					<div class="token__popup">
						
					</div>
				</div>
			</div>
			<!-- /Header left: token information -->

			<!-- Header right: navigation bar -->
			<div class="header__right">
				<div class="fn__nav_bar">

					<!-- Search (bar item) -->
					<div class="bar__item bar__item_search">
						<a href="#" class="item_opener fn__tooltip" title="Search">
							<img src="Assets2/svg/search.svg" alt="" class="fn__svg">
						</a>
						<div class="item_popup" data-position="right">
							<input type="text" placeholder="Search">
						</div>
					</div>
					<!-- !Search (bar item) -->

					<!-- Notification (bar item) -->
					<div class="bar__item bar__item_notification has_notification">
						<a href="#" class="item_opener fn__tooltip" title="Notifications">
							<img src="Assets2/svg/bell.svg" alt="" class="fn__svg">
						</a>
						<div class="item_popup" data-position="right">
							<div class="ntfc_header">
								<h2 class="ntfc_title">Notifications</h2>
								<a href="notifications.html">View All</a>
							</div>
							<div class="ntfc_list">
								<ul>
									<li>
										<p><a href="notification-single.html">Version 1.1.0 has been launched</a></p>
										<span>34 Min Ago</span>
									</li>
									<li>
										<p><a href="notification-single.html">Video Generation has been released</a></p>
										<span>12 Apr</span>
									</li>
									<li>
										<p><a href="notification-single.html">Terms has been updated</a></p>
										<span>12 Apr</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- !Notification (bar item) -->

					<!-- Full Screen (bar item) -->
					<div class="bar__item bar__item_fullscreen">
						<a href="#" class="item_opener fn__tooltip" title="Full Screen">
							<img src="Assets2/svg/fullscreen.svg" alt="" class="fn__svg f_screen">
							<img src="Assets2/svg/smallscreen.svg" alt="" class="fn__svg s_screen">
						</a>
					</div>
					<!-- !Full Screen (bar item) -->

					<!-- Language (bar item) -->
					<div class="bar__item bar__item_language">
						<a href="#" class="item_opener fn__tooltip" title="Language">
							<img src="Assets2/svg/language.svg" alt="" class="fn__svg">
						</a>
						<div class="item_popup" data-position="right">
							<ul>
								<li>
									<span class="active">English</span>
								</li>
								<li>
									<a href="#">Spanish</a>
								</li>
								<li>
									<a href="#">French</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- !Language (bar item) -->

					<!-- Site Skin (bar item) -->
					<div class="bar__item bar__item_skin">
						<a href="#" class="item_opener fn__tooltip" title="Dark/Light">
							<img src="Assets2/svg/sun.svg" alt="" class="fn__svg light_mode">
							<img src="Assets2/svg/moon.svg" alt="" class="fn__svg dark_mode">
						</a>
					</div>
					<!-- !Site Skin (bar item) -->

					 <!-- User (bar item) -->
					 <div class="bar__item bar__item_user">
    <a href="#" class="user_opener fn__tooltip" title="User Profile">
        <!-- Utilisation de la photo de profil de l'utilisateur -->
        <img src="{{ Auth::user()->profile_photo_url ?? asset('Assets2/img/user/default-user.jpg') }}" alt="">
    </a>
    <div class="item_popup" data-position="right">
        <div class="user_profile">
            <div class="user_img">
                <!-- Utilisation de la photo de profil de l'utilisateur -->
                <img src="{{ Auth::user()->profile_photo_url ?? asset('Assets2/img/user/default-user.jpg') }}" alt="">
            </div>
            <div class="user_info">
                <h2 class="user_name">{{ Auth::user()->name }}<span>{{ Auth::user()->role ?? 'Free' }}</span></h2>
                <p><a href="mailto:{{ Auth::user()->email }}" class="user_email">{{ Auth::user()->email }}</a></p>
            </div>
        </div>
        <div class="user_nav">
            <ul>
                <li>
                    <a href="{{ route('layouts1.profil') }}">
                        <span class="icon"><img src="{{ asset('Assets2/svg/person.svg') }}" alt="" class="fn__svg"></span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                <li>
                    <!-- Déconnexion -->
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon"><img src="{{ asset('Assets2/svg/logout.svg') }}" alt="" class="fn__svg"></span>
                        <span class="text">Se deconnecter</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- !User (bar item) -->


				</div>
			</div>
			<!-- /Header right: navigation bar -->

		</header>