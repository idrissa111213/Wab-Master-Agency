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
                        <span class="text">Profil</span>
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

<!-- CONTENT -->
<div class="techwave_fn_content">
    <!-- PAGE (all pages go inside this div) -->
    <div class="techwave_fn_page">
        <!-- Home Page -->
        <div class="container">
            <h2 class="form-title">Soumettre une Demande</h2>
            <!-- Formulaire de demande -->
            <form action="{{ route('demande.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Nom Complet -->
                <div class="form-group">
                    <label for="full_name">Nom Complet</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="{{ Auth::user()->name }}" required>
                </div>
                <br>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                </div>
                <br>

                <!-- Intérêts -->
                <div class="form-group">
                    <label for="interests">Choisissez vos thématiques :</label>
                    <select id="interests" name="interests" onchange="toggleOtherField()" required>
                        <option value="">Sélectionner...</option>
                        <option value="Education">Éducation</option>
                        <option value="Santé">Santé</option>
                        <option value="Emploi">Emploi</option>
                        <option value="Logement">Logement</option>
                        <option value="Justice et Droits">Justice et Droits</option>
                        <option value="Environnement">Environnement</option>
                        <option value="Culture et Loisirs">Culture et Loisirs</option>
                        <option value="Entreprenariat et développement économique">Entreprenariat et développement économique</option>
                        <option value="Citoyenneté et citoyenne">Citoyenneté et citoyenne</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
                <br>

                <!-- Autre Intérêt -->
                <div id="otherField" style="display: none;">
                    <label for="otherInterest">Veuillez spécifier :</label>
                    <input type="text" class="form-control" id="otherInterest" name="otherInterest">
                </div>
                <br>

                <!-- Objet de la Demande -->
                <div class="form-group">
                    <label for="subject">Objet de la Demande</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <br>

                <!-- Message -->
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <br>

                <!-- Pièce Jointe (facultatif) -->
                <div class="form-group">
                    <label for="attachment">Pièce Jointe (facultatif)</label>
                    <input type="file" class="form-control" id="attachment" name="attachment">
                </div>

                <!-- Bouton de Soumission -->
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary" style="background-color: #6a0dad; color: white;">Soumettre la Demande</button>
                </div>
            </form>

            <!-- Message de succès -->
            @if(session('success'))
                <div class="alert alert-success" role="alert" style="text-align: center; margin-top: 20px;">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <!-- !Home Page -->
    </div>
    <!-- !PAGE -->
</div>
<!-- !CONTENT -->

<script>
function toggleOtherField() {
    var interests = document.getElementById('interests');
    var otherField = document.getElementById('otherField');

    if (interests.value === 'Autre') {
        otherField.style.display = 'block';
    } else {
        otherField.style.display = 'none';
        document.getElementById('otherInterest').value = ''; // Réinitialiser le champ texte si "Autre" n'est pas sélectionné
    }
}
</script>

        
        
        <!-- FOOTER (inside the content) -->
        <footer class="techwave_fn_footer">
            <div class="techwave_fn_footer_content">
                <div class="copyright">
                    <p><script>document.write(new Date().getFullYear())</script>© SRBThemes</p>
                </div>
                <div class="menu_items">
                    <ul>
                        <li><a href="terms.html">Terms of Service</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- !FOOTER (inside the content) -->
        
    </div>
    <!-- !CONTENT -->

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

