<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <link rel="icon" type="image/png" href="https://cmltrading.com/images/cmlicon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://cmltrading.com/images/cmlicon.png" sizes="192x192">
    <link rel="icon" type="image/png" href="https://cmltrading.com/images/cmlicon.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://cmltrading.com/images/cmlicon.png" sizes="16x16">

    <link rel="canonical" href="https://www.cmltrading.com">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@cmltrading">
    <meta name="twitter:description"
        content="Trade CFDs with CML Markets, a leading global provider. Trade on up to 10,000 instruments, including forex, indices, commodities, shares and treasuries.">
    <meta name="twitter:site" content="@cmltrading">
    <meta name="twitter:title" content="Home">


    <title>Register - CML Trading | Leading Crypto Asset Manager</title>
    <meta name="description"
        content="Trade CFDs with CML Trading, a leading global provider. Trade on up to 10,000 instruments, including forex, indices, commodities, shares and treasuries.">
    <meta name="revised" content="09/06/2022 11:51:02">
    <!-- Critical preload -->
    <link rel="preload" href="/js/vendors/uikit.min.js" as="script">
    <link rel="preload" href="/css/vendors/uikit.min.css" as="style">
    <link rel="preload" href="/css/style.css" as="style">
    <!-- Font preload -->
    <link rel="preload" href="/fonts/rubik-v9-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/rubik-v9-latin-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/rubik-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/vendors/uikit.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>


<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->



    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url(img/in-signin-image.jpg);">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="index-2.html">
                                        <img class="uk-margin-small-right in-offset-top-10" src="/images/logo.svg"
                                            data-src="/images/logo.svg" alt="wave" width="134" height="23"
                                            data-uk-img>
                                    </a>

                                    <x-auth-validation-errors :errors="$errors" />

                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Start your application
                                        now</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom"><a
                                            href="{{ route('login') }}">{{ __('Already registered?') }}</a></p>

                                    <!-- login form begin -->
                                    <form method="POST" class="uk-grid uk-form" action="{{ route('register') }}">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="name"
                                                value="{{ old('name') }}" id="name" type="text"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="email"
                                                value="{{ old('email') }}" id="email" type="text"
                                                placeholder="Email">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="password" id="password"
                                                type="password" placeholder="Password">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="password_confirmation"
                                                id="password" type="password" placeholder="Confirm Password">
                                        </div>

                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                type="submit" name="submit"> {{ __('Register') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>

    <!-- Javascript -->
    <script src="/js/vendors/uikit.min.js"></script>
    <script src="/js/vendors/indonez.min.js"></script>
    <script src="/js/config-theme.js"></script>
</body>

</html>
