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
                                        <span
                                            class="block font-heading text-xs md:text-xl text-muted-800 dark:text-muted-100"
                                            :class="currentStep === 4 ?
                                                'text-muted-800 dark:text-muted-100' :
                                                'text-muted-400 dark:text-muted-500'">
                                            Amount
                                        </span>
                                    </div>
                                    <div class="h-4 leading-none xs:hidden" :class="currentStep === 5 ? '' : 'xs:hidden'">
                                        <span class="block font-heading text-xs text-muted-400 dark:text-muted-500"
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
                                    <div class="w-full" style="">
                                        <h2 class="font-heading text-2xl md:text-3xl text-muted-800 dark:text-white mb-10">
                                            Set an amount to deposit
                                        </h2>

                                        <input type="hidden" name="wallet_type" id="wallet_type"
                                            value="{{ $wallet->id }}" />

                                        <div class="w-full max-w-md">
                                            <!--Amount input-->
                                            <div class="group relative">
                                                <input type="number" name="amount" id="amount"
                                                    class=" pl-12 bg-white  h-14 text-4xl leading-5 font-sans w-full text-muted-600 border-b-2 border-muted-300 focus:border-primary-500 placeholder:text-muted-300 dark:placeholder:text-muted-700 dark:bg-muted-900 dark:text-muted-200 dark:border-muted-800 dark:focus:border-primary-500 outline-none transition-all duration-300"
                                                    placeholder="0.00" />
                                                <div
                                                    class="absolute top-0 left-0 h-14 w-14 flex justify-center items-center text-muted-400 dark:text-muted-600 group-focus-within:text-primary-500 transition-colors duration-300 cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                        role="img" width="1em" height="1em" viewBox="0 0 24 24"
                                                        data-icon="lucide:dollar-sign"
                                                        class="iconify w-8 h-8 iconify--lucide">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 2v20m5-17H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>

                                            <!--Transfer account-->
                                            <div class="py-10">
                                                <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                                                    Current Crypto Rate
                                                </h4>
                                                <!--Dropdown-->
                                                <div class="relative w-full" @click.away="close()">
                                                    <button type="button"
                                                        class="w-full p-4 click-blur bg-white dark:bg-muted-1000 rounded-xl border border-muted-200 dark:border-muted-800">
                                                        <span class="w-full flex items-center gap-3 text-left">
                                                            {{-- <img src="/img/logo/logo-square-outline.svg"
                                                                class="w-8 h-8 dark:invert" alt="App logo" width="48"
                                                                height="48" /> --}}
                                                            <div>
                                                                <span
                                                                    class="block font-heading text-sm text-muted-800 dark:text-muted-200">
                                                                    {{ $wallet->walletType->name }}
                                                                </span>
                                                                <span
                                                                    class="block font-heading text-xs text-muted-500 dark:text-muted-400">
                                                                    ${{ $wallet->walletType->value }} / 1
                                                                    {{ $wallet->walletType->symbol }}
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </button>

                                                </div>
                                            </div>

                                            <!--Buttons-->
                                            <div class="flex gap-4">
                                                <button
                                                    class="w-full btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                    Next
                                                </button>
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
