<div class="techwave_fn_leftpanel">
    
    <div class="mobile_extra_closer"></div>
    
    <!-- logo (left panel) -->
    <div class="leftpanel_logo">
        <a href="index-2.html" class="fn_logo">
            <span class="full_logo">
                <img src="{{ asset('Assets2/img/logo-desktop-full.png') }}" alt="" class="desktop_logo">
                <img src="{{ asset('Assets2/img/logo-retina-full.png') }}" alt="" class="retina_logo">
            </span>
            <span class="short_logo">
                <img src="{{ asset('Assets2/img/logo-desktop-mini.png') }}" alt="" class="desktop_logo">
                <img src="{{ asset('Assets2/img/logo-retina-mini.png') }}" alt="" class="retina_logo">
            </span>
        </a>
        <a href="#" class="fn__closer fn__icon_button desktop_closer">
            <img src="{{ asset('Assets2/svg/arrow.svg') }}" alt="" class="fn__svg">
        </a>
        <a href="#" class="fn__closer fn__icon_button mobile_closer">
            <img src="{{ asset('Assets2/svg/arrow.svg') }}" alt="" class="fn__svg">
        </a>
    </div>
    <!-- content (left panel) -->
<div class="leftpanel_content">

<!-- #1 navigation group -->
<div class="nav_group">
	<h2 class="group__title">Commencez ici</h2>
	<ul class="group__list">
		<li>
			<a href="{{ route('layouts1.base') }}" class="fn__tooltip active menu__item" data-position="right" title="Tableau de bord">
				<span class="icon"><img src="{{ asset('Assets2/svg/home.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">Accueil</span>
			</a>
		</li>
		<li>
			<a href="{{ route('layouts1.poster_probleme') }}" class="fn__tooltip menu__item" data-position="right" title="Poster un problème">
				<span class="icon"><img src="{{ asset('Assets2/svg/community.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">Poster un problème</span>
			</a>
		</li>
		<li>
			<a href="{{ route('layouts1.mes_demandes') }}" mes-demandes.html" class="fn__tooltip menu__item" data-position="right" title="Mes demandes">
				<span class="icon"><img src="{{ asset('Assets2/svg/person.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">Mes demandes<span class="count">5</span></span>
			</a>
		</li>
		<li>
			<a href="{{ route('layouts1.mes_votes') }}" class="fn__tooltip menu__item" data-position="right" title="Mes votes">
				<span class="icon"><img src="{{ asset('Assets2/svg/cube.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">Mes votes</span>
			</a>
		</li>
	</ul>
</div>
<!-- !#1 navigation group -->

<!-- #2 navigation group -->
<div class="nav_group">
	<h2 class="group__title">Outils utilisateur</h2>
	<ul class="group__list">
		<li>
			<a href="{{ route('layouts1.soumettre_demande') }}" class="fn__tooltip menu__item" data-position="right" title="Soumettre une demande">
				<span class="icon"><img src="{{ asset('Assets2/svg/image.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">Soumettre une demande</span>
			</a>
		</li>
		<li>
			<a href="{{ route('layouts1.moncompte') }}" class="fn__tooltip menu__item" data-position="right" title="Mon compte">
				<span class="icon"><img src="{{ asset('Assets2/svg/chat.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">Mon compte</span>
			</a>
		</li>
	</ul>
</div>
<!-- !#2 navigation group -->

<!-- #3 navigation group -->
<div class="nav_group">
	<h2 class="group__title">Support</h2>
	<ul class="group__list">
		<li>
			<a href="{{ route('layouts1.condition_d_utilisations') }}" class="fn__tooltip menu__item" data-position="right" title="Conditions d'utilisation">
				<span class="icon"><img src="{{ asset('Assets2/svg/dollar.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">Conditions d'utilisation</span>
			</a>
		</li>
		<li class="menu-item-has-children">
			<a href="faq.html" class="fn__tooltip menu__item" title="FAQ & Aide" data-position="right">
				<span class="icon"><img src="{{ asset('Assets2/svg/question.svg') }}" alt="" class="fn__svg"></span>
				<span class="text">FAQ & Aide</span>
				<span class="trigger"><img src="{{ asset('Assets2/svg/arrow.svg') }}" alt="" class="fn__svg"></span>
			</a>
			<ul class="sub-menu">
				
				<li>
					<a href="{{ route('layouts1.faq') }}"><span class="text">FAQ</span></a>
				</li>
				<li>
					<a href="{{ route('layouts1.Contactez_nous') }}"><span class="text">Contactez-nous</span></a>
				</li>
			</ul>
		</li>
		<li>
		<a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon"><img src="{{ asset('Assets2/svg/logout.svg') }}" alt="" class="fn__svg"></span>
                        <span class="text">Se deconnecter</span>
                    </a>
		</li>
	</ul>
</div>
<!-- !#3 navigation group -->

</div>