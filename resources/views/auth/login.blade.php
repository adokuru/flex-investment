<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://assets.cmcmarkets.com/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://assets.cmcmarkets.com/images/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://assets.cmcmarkets.com/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://assets.cmcmarkets.com/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://assets.cmcmarkets.com/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://assets.cmcmarkets.com/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://assets.cmcmarkets.com/images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://assets.cmcmarkets.com/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://assets.cmcmarkets.com/images/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="https://assets.cmcmarkets.com/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://assets.cmcmarkets.com/images/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="https://assets.cmcmarkets.com/images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://assets.cmcmarkets.com/images/favicon-16x16.png" sizes="16x16">
    <!--END-WIDGET-5B1FA573-1C84-442B-90AF-F49BAC152130-->
    <link rel="canonical" href="https://www.cmcmarkets.com/en/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@cmcmarkets">
    <meta name="twitter:description" content="Trade CFDs with CMC Markets, a leading global provider. Trade on up to 10,000 instruments, including forex, indices, commodities, shares and treasuries.">
    <meta name="twitter:site" content="@cmcmarkets">
    <meta name="twitter:title" content="Home">


    <title>Login - CFDs &amp; Forex | Online Trading| CMC Markets</title>
    <meta name="description" content="Trade CFDs with CMC Markets, a leading global provider. Trade on up to 10,000 instruments, including forex, indices, commodities, shares and treasuries.">
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

    {{-- <x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('images/login-office.jpeg') }}"
                 alt="Office"/>
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Login
                </h1>

                <x-auth-validation-errors :errors="$errors"/>

                <form method="POST" action="{{ route('login') }}">
                @csrf

                    <!-- Input[ype="email"] -->
                    <div class="mt-4">
                        <x-label :value="__('Email')"/>
                        <x-input type="email"
                                 id="email"
                                 name="email"
                                 value="{{ old('email') }}"
                                 class="block w-full"
                                 required
                                 autofocus/>
                    </div>

                    <!-- Input[ype="password"] -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')"/>
                        <x-input type="password"
                                 id="password"
                                 name="password"
                                 class="block w-full"/>
                    </div>

                    <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox"
                                   name="remember"
                                   class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-4">
                        <x-button class="block w-full">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>

                <hr class="my-8"/>

                @if (Route::has('password.request'))
                    <p class="mt-4">
                        <a class="text-sm font-medium text-primary-600 hover:underline"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout> --}}


    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url(img/in-signin-image.jpg);">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="index-2.html">
                                        <img class="uk-margin-small-right in-offset-top-10" src="https://platform.cmcmarkets.com/ui/images/cmc-logo-4c4d6fa47d8c70420987f4d1a20dbbd7.svg" data-src="https://platform.cmcmarkets.com/ui/images/cmc-logo-4c4d6fa47d8c70420987f4d1a20dbbd7.svg" alt="wave" width="134" height="23" data-uk-img>
                                    </a>
                                    <x-auth-validation-errors :errors="$errors" />

                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                                    <!-- login form begin -->
                                    <form method="POST" class="uk-grid uk-form" action="{{ route('login') }}">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="email" value="{{ old('email') }}" id="email" value="" type="text" placeholder="email">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="password" id="password" value="" type="password" placeholder="Password">
                                        </div>
                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                            <label><input class="uk-checkbox uk-border-rounded" name="remember" type="checkbox"> Remember me</label>
                                        </div>
                                        <div class="uk-margin-small uk-width-expand uk-text-small">
                                            <label class="uk-align-right"><a class="uk-link-reset" href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</a></label>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button>
                                        </div>
                                    </form>
                                    <!-- login form end -->

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
