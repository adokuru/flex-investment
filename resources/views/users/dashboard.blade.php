@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 grid grid-cols-12 rounded-lg bg-gradient-to-r from-blue-500 to-indigo-600 py-5 sm:py-6">
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                    <div class="px-4 text-white sm:px-5">
                        <div class="-mt-1 flex items-center space-x-2">
                            <h2 class="text-base font-medium tracking-wide">Your Balance</h2>

                        </div>

                        <div class="mt-3">
                            <p class="text-2xl font-semibold">${{ number_format(auth()->user()->balance ?? 0, 2) }}</p>
                            {{-- <p class="text-xs">+ 3.5%</p> --}}
                        </div>

                        <div class="mt-4 flex space-x-7">
                            <div>
                                <p class="text-indigo-100">Income</p>
                                <div class="mt-1 flex items-center space-x-2">
                                    <div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                    </div>
                                    <p class="text-base font-medium">$0</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-indigo-100">Expense</p>
                                <div class="mt-1 flex items-center space-x-2">
                                    <div class="flex h-7 w-7 items-center justify-center rounded-full bg-black/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </div>
                                    <p class="text-base font-medium">$0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 mt-5 sm:col-span-6 sm:mt-0 lg:col-span-8">
                    <div class="swiper px-5 sm:pl-0" x-init="$nextTick(() => new Swiper($el, { slidesPerView: 'auto', spaceBetween: 16 }))">
                        <div class="swiper-wrapper">
                            <div
                                class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20]">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                    <div class="flex items-center justify-between">
                                        <img class="h-5" src="/UserDashboard/images/payments/bitcoin.png"
                                            alt="image" />
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z" />
                                        </svg>
                                    </div>
                                    <div class="text-white">
                                        <p class="text-lg font-semibold tracking-wide">
                                            ${{ number_format($bitconwallet != null ? $bitconwallet->usd_balance : '0.000000', 2) }}
                                        </p>
                                        <p class="mt-1 text-xs font-medium">
                                            {{ $bitconwallet != null ? $bitconwallet->amount : '0.000000' }} Bitcoin (BTC)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20]">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                    <div class="flex items-center justify-between">
                                        <img class="h-5" src="/UserDashboard/images/payments/eth.png" alt="image" />
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z" />
                                        </svg>
                                    </div>
                                    <div class="text-white">
                                        <p class="text-lg font-semibold tracking-wide">
                                            ${{ number_format($ethwallet != null ? $ethwallet->usd_balance : '0.000000', 2) }}
                                        </p>
                                        <p class="mt-1 text-xs font-medium">
                                            {{ $ethwallet != null ? $ethwallet->amount : '0.000000' }} Ethereum (ETH)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20]">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                    <div class="flex items-center justify-between">
                                        <img class="h-5" src="/UserDashboard/images/payments/solana.png"
                                            alt="image" />
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z" />
                                        </svg>
                                    </div>
                                    <div class="text-white">
                                        <p class="text-lg font-semibold tracking-wide">
                                            {{ number_format($solanaWallet != null ? $solanaWallet->usd_balance : '0.000000', 2) }}
                                        </p>
                                        <p class="mt-1 text-xs font-medium">
                                            {{ $solanaWallet != null ? $solanaWallet->amount : '0.000000' }} Solana (SOL)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20]">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                    <div class="flex items-center justify-between">
                                        <img class="h-5" src="/UserDashboard/images/payments/moreno.png"
                                            alt="image" />
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z" />
                                        </svg>
                                    </div>
                                    <div class="text-white">
                                        <p class="text-lg font-semibold tracking-wide">
                                            {{ number_format($morenolWallet != null ? $morenolWallet->usd_balance : '0.000000', 2) }}
                                        </p>
                                        <p class="mt-1 text-xs font-medium">
                                            {{ $morenolWallet != null ? $morenolWallet->amount : '0.000000' }} Moreno (XMR)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20]">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                    <div class="flex items-center justify-between">
                                        <img class="h-5" src="/UserDashboard/images/payments/tether.png"
                                            alt="image" />
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z" />
                                        </svg>
                                    </div>
                                    <div class="text-white">
                                        <p class="text-lg font-semibold tracking-wide">
                                            {{ number_format($usdtwallet != null ? $usdtwallet->usd_balance : '0.000000', 2) }}
                                        </p>
                                        <p class="mt-1 text-xs font-medium">
                                            {{ $usdtwallet != null ? $usdtwallet->amount : '0.000000' }} Tether (USDT)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="swiper-slide relative h-40 w-64 shrink-0 rounded-lg bg-gradient-to-br from-[#ffffff55] to-[#ffffff20]">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between rounded-lg border border-white/10 p-5">
                                    <div class="flex items-center justify-between">
                                        <img class="h-5" src="/UserDashboard/images/payments/usdc.png"
                                            alt="image" />
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-100"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M5.343 7.257a.5.5 0 01.354.147 6.5 6.5 0 010 9.192.64.64 0 00-.073.087 4.718 4.718 0 01-.56-.094 1.301 1.301 0 01-.109-.03.5.5 0 01.035-.67 5.5 5.5 0 000-7.778.5.5 0 01.353-.854zm-.422 9.288a.06.06 0 010 0zM15 1.6a.5.5 0 01.354.147 14.5 14.5 0 010 20.506.5.5 0 11-.708-.707 13.5 13.5 0 000-19.092A.5.5 0 0115 1.6zM10.172 4.43a.5.5 0 01.353.146 10.5 10.5 0 010 14.85.5.5 0 11-.707-.707 9.5 9.5 0 000-13.436.5.5 0 01.354-.853z" />
                                        </svg>
                                    </div>
                                    <div class="text-white">
                                        <p class="text-lg font-semibold tracking-wide">
                                            {{ number_format($btcashwallet != null ? $btcashwallet->usd_balance : '0.000000', 2) }}
                                        </p>
                                        <p class="mt-1 text-xs font-medium">
                                            {{ $btcashwallet != null ? $btcashwallet->amount : '0.000000' }} USD Coin
                                            (USDC)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card group col-span-12 pb-5 lg:col-span-12">
                <div class="col-span-2 px-4 pb-5 sm:px-5 lg:col-span-4">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Transactions
                        </h2>
                        <a href="/transactions"
                            class="border-b border-dotted border-current pb-0.5 text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
                            View All
                        </a>
                    </div>
                    <div class="space-y-4">
                        @forelse ($transactions as $item)
                            <div class="flex cursor-pointer items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p class="text-slate-700 dark:text-navy-100">
                                            {{ $item->transaction_reference }}
                                        </p>
                                        <p class="text-xs text-slate-400 line-clamp-1 dark:text-navy-200">
                                            {{ $item->created_at }}
                                        </p>
                                    </div>
                                </div>
                                <p
                                    class="font-medium {{ $item->transactions_type_id == 1 ? 'text-green-500' : 'text-red-500' }}">
                                    {{ $item->transactions_type_id == 1 ? '+' : '-' }} {{ $item->amount }}
                            </div>

                        @empty
                            No Transactions
                        @endforelse

                    </div>
                </div>
            </div>

            {{-- <div class="card col-span-12 px-4 pb-5 sm:px-5 lg:col-span-4">
                <div class="flex items-center justify-between py-3">
                    <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        Select a fixed plan to invest
                    </h2>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn -mr-1 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-2 flex items-center justify-between">
                    <a class="text-xs+">View All Plans</a>

                    <a href="/investments"
                        class="btn -mr-1 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
                <div class="mt-2 space-y-4">
                    <label class="block">
                        <span class="text-xs+">Select</span>
                        <select x-input-mask="{
                  creditCard: true
              }"
                            class="form-input mt-1.5 h-9 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="Select a fixed plan" type="text">
                            @foreach ($fixedInvestment as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </label>
                    <div>
                        <span class="text-xs+">Amount</span>

                        <div class="mt-1.5 flex h-9 -space-x-px">
                            <select
                                class="form-select rounded-l-lg border border-slate-300 bg-white px-3 py-2 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                <option>$</option>
                                <option>£</option>
                                <option>€</option>
                            </select>
                            <input
                                class="form-input w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Price" type="text" />
                        </div>
                    </div>
                </div>
                <div class="mt-5 flex justify-between text-slate-400 dark:text-navy-300">
                    <p class="text-xs+">Commission:</p>
                    <p>3$</p>
                </div>
                <div class="mt-2 flex justify-between">
                    <p>Total:</p>
                    <p class="font-medium text-slate-700 dark:text-navy-100">3$</p>
                </div>
                <button
                    class="btn mt-5 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Invest
                </button>
            </div> --}}

            <div class="card col-span-12 px-4 pb-5 sm:px-5 w-full">
                <div class="card">
                    <div class="card-header pb-0">
                        <h6>Market Data</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_e8053">
                                <div id="tradingview_20755-wrapper"
                                    style="position: relative;box-sizing: content-box;width: 100%;height: 550px;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;">
                                    <div style="width: 100%;height: 550px;background: transparent;padding: 0 !important;">
                                        <iframe id="tradingview_20755"
                                            src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_20755&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Light&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=allnzassets.org&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD"
                                            style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;"
                                            frameborder="0" allowtransparency="true" scrolling="no"
                                            allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                            <script src="https://s3.tradingview.com/tv.js"></script>
                            <script>
                                new TradingView.widget({
                                    "width": "100%",
                                    "height": 550,
                                    "symbol": "BITSTAMP:BTCUSD",
                                    "interval": "D",
                                    "timezone": "Etc/UTC",
                                    "theme": "Light",
                                    "style": "1",
                                    "locale": "en",
                                    "toolbar_bg": "#f1f3f6",
                                    "enable_publishing": false,
                                    "withdateranges": true,
                                    "hide_side_toolbar": false,
                                    "allow_symbol_change": true,
                                    "show_popup_button": true,
                                    "popup_width": "1000",
                                    "popup_height": "650",
                                    "container_id": "tradingview_e8053"
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
