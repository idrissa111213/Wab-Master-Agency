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


<!-- CONTENT -->
<div class="techwave_fn_content">
    <!-- PAGE (all pages go inside this div) -->
    <div class="techwave_fn_page">
        
        <!-- Documentation Page -->
        <div class="techwave_fn_doc_page">
        
            <div class="docpage">
                <!-- Page Title -->
                <div class="techwave_fn_pagetitle">
                    <h2 class="title">Documentation de la Plateforme CDC</h2>
                </div>
                <!-- !Page Title -->
                <div class="doccontent">
                    <div class="container small">
                        <div id="doc_introduction">
                            <h4>Introduction à la Plateforme CDC</h4>
                            <p>Cher utilisateur,</p>
                            <p>Cette documentation fournit un aperçu détaillé de la Plateforme CDC, conçue pour faciliter l'interaction entre les citoyens de la diaspora sénégalaise et leurs représentants. La plateforme permet aux utilisateurs de soumettre des problèmes ou des opinions, de voter et de commenter, tandis que les administrateurs examinent et répondent aux demandes.</p>
                            <p>Nous vous recommandons de lire cette documentation attentivement pour vous familiariser avec les fonctionnalités et les opérations de la plateforme. Pour toute question ou besoin d'assistance, n'hésitez pas à contacter notre support.</p>
                        </div>
                        <div id="doc_authentication">
                            <h4>Authentification et Accès</h4>
                            <p>La plateforme offre les fonctionnalités suivantes pour l'authentification :</p>
                            <ul>
                                <li><b>Création de Compte :</b> Permet aux utilisateurs de créer un compte avec des options pour ajouter, modifier ou supprimer leurs informations.</li>
                                <li><b>Connexion :</b> Les utilisateurs peuvent se connecter via leur adresse e-mail ou par authentification Google.</li>
                                <li><b>Gestion des Sessions :</b> Les utilisateurs peuvent se déconnecter et se reconnecter en toute sécurité.</li>
                            </ul>
                        </div>
                        <div id="doc_features">
                            <h4>Fonctionnalités Clés</h4>
                            <p>Les principales fonctionnalités de la plateforme incluent :</p>
                            <ul>
                                <li><b>Soumettre des Problèmes ou Opinions :</b> Les utilisateurs peuvent publier des problèmes ou opinions pour obtenir l'attention des représentants.</li>
                                <li><b>Vote et Commentaire :</b> Les utilisateurs peuvent voter sur les posts et laisser des commentaires pour exprimer leur soutien ou leurs préoccupations.</li>
                                <li><b>Gestion des Demandes :</b> Les administrateurs (députés et leur équipe) examinent et répondent aux demandes des utilisateurs.</li>
                            </ul>
                        </div>
                        <div id="doc_customization">
                            <h4>Personnalisation</h4>
                            <p>Pour personnaliser l'apparence et le comportement de la plateforme :</p>
                            <ul>
                                <li><b>Modifier le Design :</b> Adaptez le design visuel en modifiant les fichiers CSS dans le répertoire `resources/assets/css`.</li>
                                <li><b>Configurer les Thèmes :</b> Activez les modes clair ou sombre selon les préférences de vos utilisateurs en modifiant les paramètres dans `resources/views/components/layouts/auth.blade.php`.</li>
                            </ul>
                        </div>
                        <div id="doc_prerequisites">
                            <h4>Prérequis Système</h4>
                            <p>Avant de commencer, assurez-vous que les éléments suivants sont installés :</p>
                            <ul>
                                <li><strong>Xampp/Wampp :</strong> PHP version 8.2 ou supérieure pour exécuter Laravel 11.</li>
                                <li><strong>Node.js :</strong> Version LTS recommandée.</li>
                                <li><strong>Composer :</strong> Version 2.2.0 ou supérieure.</li>
                                <li><strong>Git :</strong> Pour le contrôle de version et la gestion du code source.</li>
                            </ul>
                        </div>
                        <div id="doc_installation">
                            <h4>Installation et Déploiement</h4>
                            <p>Pour installer et déployer la plateforme :</p>
                            <ol>
                                <li>Clonez le projet depuis le dépôt :</li>
                                <pre>git clone <URL_DU_DEPOT></pre>
                                <li>Installez les dépendances :</li>
                                <pre>npm install</pre>
                                <pre>composer install</pre>
                                <li>Générez la clé d'application :</li>
                                <pre>php artisan key:generate</pre>
                                <li>Configurez vos informations de base de données dans le fichier `.env` :</li>
                                <pre>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base_de_donnees
DB_USERNAME=utilisateur
DB_PASSWORD=mot_de_passe</pre>
                                <li>Compilez les fichiers SCSS et copiez les fichiers dans le répertoire public :</li>
                                <pre>npm run build</pre>
                                <li>Exécutez les migrations pour créer les tables de la base de données :</li>
                                <pre>php artisan migrate</pre>
                                <li>Démarrez le serveur de développement :</li>
                                <pre>php artisan serve</pre>
                            </ol>
                        </div>
                        <div id="doc_tips">
                            <h4>Conseils Utiles</h4>
                            <p>Voici quelques conseils pour une utilisation optimale de la plateforme :</p>
                            <ul>
                                <li><b>Configurer les Rôles :</b> Assurez-vous que les rôles des utilisateurs et des administrateurs sont correctement configurés dans le fichier `app/Models/User.php`.</li>
                                <li><b>Gestion des Notifications :</b> Vérifiez les paramètres de notification pour que les utilisateurs reçoivent les mises à jour importantes.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="docsidebar">
                <ul>
                    <li><a href="#doc_introduction">Introduction</a></li>
                    <li><a href="#doc_authentication">Authentification</a></li>
                    <li><a href="#doc_features">Fonctionnalités Clés</a></li>
                    <li><a href="#doc_customization">Personnalisation</a></li>
                    <li><a href="#doc_prerequisites">Prérequis Système</a></li>
                    <li><a href="#doc_installation">Installation et Déploiement</a></li>
                    <li><a href="#doc_tips">Conseils Utiles</a></li>
                </ul>
            </div>
        </div>
        <!-- !Documentation Page -->
    </div>
    <!-- !PAGE (all pages go inside this div) -->
</div>
<!-- !CONTENT -->


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

