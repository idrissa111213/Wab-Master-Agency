<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="TechWave">
    <meta name="author" content="SRBThemes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Home - TechWave</title>

    <script>
        if (!localStorage.frenify_skin) {
            localStorage.frenify_skin = 'dark';
        }
        if (!localStorage.frenify_panel) {
            localStorage.frenify_panel = '';
        }
        document.documentElement.setAttribute("data-techwave-skin", 'light');
        if (localStorage.frenify_panel !== '') {
            document.documentElement.classList.add(localStorage.frenify_panel);
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- !Google Fonts -->

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets2/css/plugins8a54.css?ver=1.0.0') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets2/css/style8a54.css?ver=1.0.0') }}" />
    <!-- !Styles -->
</head>

<body>

    <!-- Moving Submenu -->
    <div class="techwave_fn_fixedsub">
        <ul></ul>
    </div>
    <!-- !Moving Submenu -->

    <!-- Preloader -->
    <div class="techwave_fn_preloader enabled">
        <svg>
            <circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
            <circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
        </svg>
    </div>
    <!-- !Preloader -->

    <!-- MAIN WRAPPER -->
    <div class="techwave_fn_wrapper">
        <div class="techwave_fn_wrap">

            <!-- Searchbar -->
            <div class="techwave_fn_searchbar">
                <div class="search__bar">
                    <input class="search__input" type="text" placeholder="Search here...">
                    <img src="{{ asset('assets2/svg/search.svg') }}" alt="" class="fn__svg search__icon">
                    <a class="search__closer" href="#"><img src="{{ asset('assets2/svg/close.svg') }}" alt="" class="fn__svg"></a>
                </div>
                <div class="search__results">
                    <!-- Results will come here (via ajax after the integration you made after purchase as it doesn't work in HTML) -->
                    <div class="results__title">Results</div>
                    <div class="results__list">
                        <ul>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Learn about the impact of AI on the financial industry</a></li>
                            <li><a href="#">Delve into the realm of AI-driven manufacturing</a></li>
                            <li><a href="#">Understand the ethical implications surrounding AI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- !Searchbar -->

            <!-- HEADER -->
            <header class="techwave_fn_header">

    <!-- Header left: token information -->
    <div class="header__left">
        <div class="fn__token_info">
            <a href="pricing.html" class="token_upgrade techwave_fn_button"><span>Upgrade</span></a>
            <div class="token__popup">
                <!-- Popup content can be added here -->
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
                    <img src="{{ asset('Assets2/svg/search.svg') }}" alt="" class="fn__svg">
                </a>
                <div class="item_popup" data-position="right">
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <!-- !Search (bar item) -->

            <!-- Notification (bar item) -->
            <div class="bar__item bar__item_notification has_notification">
                <a href="#" class="item_opener fn__tooltip" title="Notifications">
                    <img src="{{ asset('Assets2/svg/bell.svg') }}" alt="" class="fn__svg">
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
                    <img src="{{ asset('Assets2/svg/fullscreen.svg') }}" alt="" class="fn__svg f_screen">
                    <img src="{{ asset('Assets2/svg/smallscreen.svg') }}" alt="" class="fn__svg s_screen">
                </a>
            </div>
            <!-- !Full Screen (bar item) -->

            <!-- Language (bar item) -->
            <div class="bar__item bar__item_language">
                <a href="#" class="item_opener fn__tooltip" title="Language">
                    <img src="{{ asset('Assets2/svg/language.svg') }}" alt="" class="fn__svg">
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
                    <img src="{{ asset('Assets2/svg/sun.svg') }}" alt="" class="fn__svg light_mode">
                    <img src="{{ asset('Assets2/svg/moon.svg') }}" alt="" class="fn__svg dark_mode">
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
                        <span class="text">Profile</span>
                    </a>
                </li>
                <li>
                    <!-- Déconnexion -->
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon"><img src="{{ asset('Assets2/svg/logout.svg') }}" alt="" class="fn__svg"></span>
                        <span class="text">Log Out</span>
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


<!-- content -->


<div class="techwave_fn_content">
		
        <!-- PAGE (all pages go inside this div) -->
        <div class="techwave_fn_page">
            
            <!-- User Profile Page -->
            <div class="techwave_fn_user_profile_page">
                <!-- Page Title -->
                <div class="techwave_fn_pagetitle">
                    <h2 class="title">User Profile</h2>
                </div>
                <!-- !Page Title -->
            
                <div class="container small">
                    <div class="techwave_fn_user_profile">

                    <div class="user__profile">
                        <div class="user_avatar">
                            <!-- Affichage de la photo de profil de l'utilisateur -->
                            <img src="{{ Auth::user()->profile_photo_url ?? asset('Assets2/img/user/default-user.jpg') }}" alt="">
                        </div>
                        <div class="user_details">
                            <ul>
                                <li>
                                    <div class="item">
                                        <h4 class="subtitle">Name</h4>
                                        <!-- Affichage du nom de l'utilisateur -->
                                        <h3 class="title">{{ Auth::user()->name }}</h3>
                                    </div>
                                </li>
                               
                                <li>
                                    <div class="item">
                                        <h4 class="subtitle">Email Address</h4>
                                        <!-- Affichage de l'email de l'utilisateur -->
                                        <h3 class="title">{{ Auth::user()->email }}</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
    <div class="user_edit fn__icon_button">
        <img src="svg/setting.svg" alt="" class="fn__svg">
    </div>
</div>


                    

<div class="user__interests">
    <h4 class="title">Quels sont vos thématiques?</h4>
    <div class="fn__options_list">
        <ul>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="education">
                    <span>Éducation</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="sante">
                    <span>Santé</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="emploi">
                    <span>Emploi</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="logement">
                    <span>Logement</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="justice">
                    <span>Justice et Droits</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="environnement">
                    <span>Environnement</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="culture">
                    <span>Culture et Loisirs</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="entrepreneuriat">
                    <span>Entrepreneuriat et développement économique</span>
                </a>
            </li>
            <li>
                <a href="#" class="techwave_fn_button small__border" data-interest="citoyennete">
                    <span>Citoyenneté et citoyenne</span>
                </a>
            </li>
        </ul>
    </div>
</div>

                
            </div>
            <!-- !User Profile Page -->
            
        </div>
        <!-- !PAGE (all pages go inside this div) -->
        
        

<!-- content -->


            <!-- !HEADER -->

           
            
            
            
        </div>
    </div>
    <!-- !MAIN WRAPPER -->

    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{ asset('assets2/js/jquery8a54.js?ver=1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/plugins8a54.js?ver=1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/init8a54.js?ver=1.0.0') }}"></script>
    <!-- !SCRIPTS -->

    <!-- LEFT PANEL -->
    @include('partials.sidebar')
    <!-- !LEFT PANEL -->

    

</body>



</html>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const interestsButtons = document.querySelectorAll('.techwave_fn_button');

        // Restore selected interests from localStorage
        const savedInterests = JSON.parse(localStorage.getItem('selectedInterests')) || [];
        
        interestsButtons.forEach(button => {
            const interest = button.getAttribute('data-interest');
            if (savedInterests.includes(interest)) {
                button.classList.add('enabled');
                button.classList.remove('disabled');
            } else {
                button.classList.add('disabled');
                button.classList.remove('enabled');
            }
        });

        // Handle button click
        interestsButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                const interest = button.getAttribute('data-interest');
                
                if (button.classList.contains('enabled')) {
                    button.classList.remove('enabled');
                    button.classList.add('disabled');
                    // Remove from saved interests
                    const index = savedInterests.indexOf(interest);
                    if (index > -1) {
                        savedInterests.splice(index, 1);
                    }
                } else {
                    button.classList.remove('disabled');
                    button.classList.add('enabled');
                    // Add to saved interests
                    if (!savedInterests.includes(interest)) {
                        savedInterests.push(interest);
                    }
                }
                // Save to localStorage
                localStorage.setItem('selectedInterests', JSON.stringify(savedInterests));
            });
        });
    });
</script>

