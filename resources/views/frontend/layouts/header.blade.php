<header class="m-header">
    <div class="header__container">

        <div class="row  middle-xs">
            <div class="col-xs-4  col-sm-4">
                <div class="m-logo">
                    <h1 class="logo__title">Rose Credit Repair</h1>

                    <h1 class="logo__title_text">Rose Credit Repair</h1>

                    <a href="/" class="logo__link"></a>
                </div>
            </div>
            <div class="col-xs-4  col-sm-4  center-xs">

                <label class="nav__toggle" for="root-menu"></label>
                <nav class="m-nav">
                    <div class="o-container">
                        <ul class="nav__list">

                            <li class="nav__item  is-login">
                                <a class="nav__link" href="{{ route('login') }}">
                                    <span class="nav__link-name">Log In</span>
                                </a>
                            </li>
                            <li class="nav__item  is-signout">
                                <a class="nav__link" href="{{ route('signup') }}">
                                    <span class="nav__link-name">Sign Up</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class="col-xs-4  col-sm-4  right-xs">
                <div class="header__actions">

                    <a href="{{ route('login') }}" class="header__login">Log In</a>
                    <a href="{{ route('signup') }}" class="header__sign">Sign Up</a>
                    <label class="header__toggle" for="root-menu">
                        <span class="header__toggle-icon">Menu</span>
                    </label>

                </div>
            </div>
        </div>

    </div>
</header>