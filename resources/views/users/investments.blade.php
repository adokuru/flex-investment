@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
    <main class="main-content w-full pb-8">



        <div class="mt-4 grid grid-cols-12 gap-4 bg-slate-150 py-5 dark:bg-navy-800 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex flex-col px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-3 lg:pr-0">
                <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl">
                    Fixed Plans
                </h2>

                <p class="mt-3 grow">
                    The top sellers is calculated based on the sales of a product and
                    undergoes hourly updations.
                </p>

                <div class="mt-4">
                    <p>Interest Growth</p>
                    <div class="mt-1.5 flex items-center space-x-2">
                        <div class="flex h-7 w-7 items-center justify-center rounded-full bg-success/15 text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                            up to 10%
                        </p>
                    </div>
                </div>
            </div>
            <div class="is-scrollbar-hidden col-span-12 flex space-x-4 overflow-x-auto px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-9 lg:pl-0">
                @foreach ($investments as $item)
                    <div class="card w-72 shrink-0 space-y-9 rounded-xl p-4 sm:px-5">
                        <div class="flex items-center justify-between space-x-2">
                            <div class="flex items-center space-x-3">
                                <div class="avatar">
                                    <img class="mask is-squircle" src="https://assets.cmcmarkets.com/images/apple-touch-icon-180x180.png" alt="image" />
                                </div>
                                <div>
                                    <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        Bronze Plan
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="flex justify-between space-x-2">
                            <div>
                                <p class="text-xs+">Sells</p>
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    2 348
                                </p>
                            </div>
                            <div>
                                <p class="text-xs+">Clients</p>
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    78
                                </p>
                            </div>
                        </div>
                        <div class="grow">
                            <div class="flex w-full space-x-1">
                                <div x-tooltip="'Phone Calls'" class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                                <div x-tooltip="'Emails'" class="h-2 w-full rounded-full bg-info"></div>
                            </div>
                            <div class="mt-2 flex flex-wrap">
                                <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                    <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                                    <div class="flex space-x-1 text-xs leading-6">
                                        <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                                        <span>33%</span>
                                    </div>
                                </div>
                                <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                    <div class="h-2 w-2 rounded-full bg-success"></div>
                                    <div class="flex space-x-1 text-xs">
                                        <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                                        <span>17%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-4 grid grid-cols-12 gap-4 bg-slate-150 py-5 dark:bg-navy-800 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex flex-col px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-3 lg:pr-0">
                <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl">
                    Flexible plans
                </h2>

                <p class="mt-3 grow">
                    The top sellers is calculated based on the sales of a product and
                    undergoes hourly updations.
                </p>

                <div class="mt-4">
                    <p>Sales Growth</p>
                    <div class="mt-1.5 flex items-center space-x-2">
                        <div class="flex h-7 w-7 items-center justify-center rounded-full bg-success/15 text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                            $2,225.22
                        </p>
                    </div>
                </div>
            </div>
            <div class="is-scrollbar-hidden col-span-12 flex space-x-4 overflow-x-auto px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-9 lg:pl-0">
                <div class="card w-72 shrink-0 space-y-9 rounded-xl p-4 sm:px-5">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="https://assets.cmcmarkets.com/images/apple-touch-icon-180x180.png" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Bronze Plan
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Sells</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                2 348
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Clients</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                78
                            </p>
                        </div>
                    </div>
                    <div class="grow">
                        <div class="flex w-full space-x-1">
                            <div x-tooltip="'Phone Calls'" class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                            <div x-tooltip="'Emails'" class="h-2 w-full rounded-full bg-info"></div>
                        </div>
                        <div class="mt-2 flex flex-wrap">
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                                <div class="flex space-x-1 text-xs leading-6">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                                    <span>33%</span>
                                </div>
                            </div>
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-success"></div>
                                <div class="flex space-x-1 text-xs">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                                    <span>17%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card w-72 shrink-0 space-y-9 rounded-xl p-4 sm:px-5">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="https://assets.cmcmarkets.com/images/apple-touch-icon-180x180.png" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Bronze Plan
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Sells</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                2 348
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Clients</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                78
                            </p>
                        </div>
                    </div>
                    <div class="grow">
                        <div class="flex w-full space-x-1">
                            <div x-tooltip="'Phone Calls'" class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                            <div x-tooltip="'Emails'" class="h-2 w-full rounded-full bg-info"></div>
                        </div>
                        <div class="mt-2 flex flex-wrap">
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                                <div class="flex space-x-1 text-xs leading-6">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                                    <span>33%</span>
                                </div>
                            </div>
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-success"></div>
                                <div class="flex space-x-1 text-xs">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                                    <span>17%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card w-72 shrink-0 space-y-9 rounded-xl p-4 sm:px-5">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="https://assets.cmcmarkets.com/images/apple-touch-icon-180x180.png" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Bronze Plan
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Sells</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                2 348
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Clients</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                78
                            </p>
                        </div>
                    </div>
                    <div class="grow">
                        <div class="flex w-full space-x-1">
                            <div x-tooltip="'Phone Calls'" class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                            <div x-tooltip="'Emails'" class="h-2 w-full rounded-full bg-info"></div>
                        </div>
                        <div class="mt-2 flex flex-wrap">
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                                <div class="flex space-x-1 text-xs leading-6">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                                    <span>33%</span>
                                </div>
                            </div>
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-success"></div>
                                <div class="flex space-x-1 text-xs">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                                    <span>17%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card w-72 shrink-0 space-y-9 rounded-xl p-4 sm:px-5">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="https://assets.cmcmarkets.com/images/apple-touch-icon-180x180.png" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Bronze Plan
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Sells</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                2 348
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Clients</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                78
                            </p>
                        </div>
                    </div>
                    <div class="grow">
                        <div class="flex w-full space-x-1">
                            <div x-tooltip="'Phone Calls'" class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                            <div x-tooltip="'Emails'" class="h-2 w-full rounded-full bg-info"></div>
                        </div>
                        <div class="mt-2 flex flex-wrap">
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                                <div class="flex space-x-1 text-xs leading-6">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                                    <span>33%</span>
                                </div>
                            </div>
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-success"></div>
                                <div class="flex space-x-1 text-xs">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                                    <span>17%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-4 grid grid-cols-12 gap-4 bg-slate-150 py-5 dark:bg-navy-800 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 flex flex-col px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-3 lg:pr-0">
                <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl">
                    Trial Plan (30 Days)
                </h2>

                <p class="mt-3 grow">
                    The top sellers is calculated based on the sales of a product and
                    undergoes hourly updations.
                </p>

                <div class="mt-4">
                    <p>Sales Growth</p>
                    <div class="mt-1.5 flex items-center space-x-2">
                        <div class="flex h-7 w-7 items-center justify-center rounded-full bg-success/15 text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                            $2,225.22
                        </p>
                    </div>
                </div>
            </div>
            <div class="is-scrollbar-hidden col-span-12 flex space-x-4 overflow-x-auto px-[var(--margin-x)] transition-all duration-[.25s] lg:col-span-9 lg:pl-0">
                <div class="card w-72 shrink-0 space-y-9 rounded-xl p-4 sm:px-5">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="https://assets.cmcmarkets.com/images/apple-touch-icon-180x180.png" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    Bronze Plan
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Sells</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                2 348
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Clients</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                78
                            </p>
                        </div>
                    </div>
                    <div class="grow">
                        <div class="flex w-full space-x-1">
                            <div x-tooltip="'Phone Calls'" class="h-2 w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                            <div x-tooltip="'Emails'" class="h-2 w-full rounded-full bg-info"></div>
                        </div>
                        <div class="mt-2 flex flex-wrap">
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-primary dark:bg-accent"></div>
                                <div class="flex space-x-1 text-xs leading-6">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Calls</span>
                                    <span>33%</span>
                                </div>
                            </div>
                            <div class="mr-4 mb-1 inline-flex items-center space-x-2 font-inter">
                                <div class="h-2 w-2 rounded-full bg-success"></div>
                                <div class="flex space-x-1 text-xs">
                                    <span class="font-medium text-slate-700 dark:text-navy-100">Chat Messages</span>
                                    <span>17%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
