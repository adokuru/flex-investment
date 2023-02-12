@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
    <main class="main-content w-full pb-8 px-5">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl p-4">
            Deposits
        </h2>
        <!--Send money wizard-->
        <div class="w-full pt-3">
            <div class="w-full pt-36">
                <div class="w-full max-w-6xl mx-auto px-4">
                    <div class="w-full grid md:grid-cols-12 gap-10">
                        <!--Stepper column-->
                        <div class="md:col-span-3 lg:col-span-4">
                            <!--Stepper-->
                            <div class="flex flex-col md:flex-row gap-4 xs:w-full xs:max-w-xs xs:mx-auto">
                                <div class="relative flex md:flex-col justify-center md:justify-between gap-7">
                                    <div class="h-4 leading-none" :class="currentStep === 0 ? '' : 'xs:hidden'">
                                        <span class="block font-heading text-xs text-muted-400 dark:text-muted-500"
                                            :class="currentStep === 0 ?
                                                'text-muted-800 dark:text-muted-100' :
                                                'text-muted-400 dark:text-muted-500'">
                                            Account
                                        </span>
                                    </div>
                                    <div class="h-4 leading-none xs:hidden" :class="currentStep === 4 ? '' : 'xs:hidden'">
                                        <span class="block font-heading text-xs text-muted-400 dark:text-muted-500"
                                            :class="currentStep === 4 ?
                                                'text-muted-800 dark:text-muted-100' :
                                                'text-muted-400 dark:text-muted-500'">
                                            Amount
                                        </span>
                                    </div>
                                    <div class="h-4 leading-none xs:hidden" :class="currentStep === 5 ? '' : 'xs:hidden'">
                                        <span
                                            class="block font-heading text-xs md:text-xl text-muted-800 dark:text-muted-100 "
                                            :class="currentStep === 5 ?
                                                'text-muted-800 dark:text-muted-100' :
                                                'text-muted-400 dark:text-muted-500'">
                                            Review
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Steps column-->
                        <div class="md:col-span-9 lg:col-span-8">
                            <!--Steps-->
                            <div class="relative max-w-md space-y-3">
                                <form class="w-full space-y-4" action="{{ route('deposit.setAmount') }}" method="post">
                                    @csrf
                                    <div class="w-full">
                                        <!--Review section-->
                                        <div>
                                            <div class="w-full max-w-md text-center py-6">
                                                <div class="text-primary-500 mx-auto w-14 h-14 mb-4">
                                                    <svg class="relative block w-14 h-14 rounded-full stroke-2 stroke-current animate-scale"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"
                                                        stroke-miterlimit="10">
                                                        <circle class="stroke-2 stroke-current animate-circle"
                                                            cx="26" cy="26" r="25" fill="none"
                                                            stroke-dasharray="166" stroke-dashoffset="166"
                                                            stroke-miterlimit="10"></circle>
                                                        <path class="animate-check stroke-2 stroke-current" fill="none"
                                                            d="M14.1 27.2l7.1 7.2 16.7-16.8" stroke-dasharray="48"
                                                            stroke-dashoffset="48"></path>
                                                    </svg>
                                                </div>
                                                <h2
                                                    class="font-heading font-bold text-2xl mb-2 text-muted-800 dark:text-white">
                                                    Payment request sent!
                                                </h2>
                                                <p class="font-sans text-muted-500 dark:text-muted-400 mb-5">
                                                    Amazing! You've properly filled in your payment request. We'll let
                                                    you know as soon as the funds are on their way.
                                                </p>
                                                <div class="flex justify-center">
                                                    <a href="/home.html"
                                                        class="h-10 w-48 inline-flex justify-center items-center gap-x-2 px-6 py-2 font-sans text-sm text-white bg-primary-500 rounded-full shadow-lg shadow-primary-500/20 hover:shadow-xl tw-accessibility transition-all duration-300"
                                                        @click.prevent="window.history.go(-1); return false;">
                                                        <span>Take me back</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
