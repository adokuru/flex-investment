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
                                <form class="w-full space-y-4" action="{{ route('deposit.makePayment') }}" method="post">
                                    @csrf
                                    <div class="w-full">

                                        <input type="hidden" name="amount" id="amount" value="{{ $amount }}" />


                                        <input type="hidden" name="crypto_amount" id="crypto_amount"
                                            value="{{ $amount / $wallet->walletType->value }}" />


                                        <input type="hidden" name="wallet_type" id="wallet_type"
                                            value="{{ $wallet->id }}" />

                                        <!--Review section-->
                                        <div>
                                            <h2
                                                class="font-heading text-2xl md:text-3xl text-muted-800 dark:text-white mb-10">
                                                Review and send the {{ $wallet->walletType->name }} deposit
                                            </h2>

                                            <div class="w-full max-w-md space-y-6">
                                                <!--Numbers-->
                                                <div class="flex items-end justify-between pb-4">
                                                    <!--Amount-->
                                                    <div class="flex-1">
                                                        <p class="font-heading text-xs text-muted-400 mb-1">
                                                            Transfer amount
                                                        </p>
                                                        <h3
                                                            class="font-heading font-medium text-3xl text-muted-800 dark:text-muted-100 w-f">

                                                            <span>
                                                                {{ number_format($amount / $wallet->walletType->value, 2) }}
                                                                {{ $wallet->walletType->symbol }}
                                                            </span>
                                                        </h3>
                                                    </div>
                                                    <!--Amount-->
                                                    <div class="flex-1 text-right">
                                                        <h3
                                                            class="font-heading font-medium text-sm text-muted-800 dark:text-muted-100">
                                                            <span> ${{ number_format($amount, 2) }}</span>
                                                        </h3>
                                                    </div>
                                                </div>

                                                <!--Recipient-->
                                                <div>
                                                    <p class="font-heading text-xs text-muted-400 mb-1">
                                                        {{ $wallet->walletType->name }} payment address
                                                    </p>

                                                    <div class="w-full flex gap-6 py-4">
                                                        <div
                                                            class="w-12 h-12 flex items-center justify-center rounded-full bg-muted-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img" width="1em" height="1em"
                                                                viewBox="0 0 256 256" data-icon="ph:user-duotone"
                                                                class="iconify w-7 h-7 text-muted-400 iconify--ph">
                                                                <circle cx="128" cy="96" r="64"
                                                                    fill="currentColor" opacity=".2"></circle>
                                                                <path fill="currentColor"
                                                                    d="M231.9 212a120.7 120.7 0 0 0-67.1-54.2a72 72 0 1 0-73.6 0A120.7 120.7 0 0 0 24.1 212a8 8 0 1 0 13.8 8a104.1 104.1 0 0 1 180.2 0a8 8 0 1 0 13.8-8ZM72 96a56 56 0 1 1 56 56a56 56 0 0 1-56-56Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4
                                                                class="font-heading text-muted-700 dark:text-muted-100 mb-1">
                                                                {{ $wallet->walletType->address }}
                                                            </h4>
                                                            <p
                                                                class="font-heading text-xs text-muted-500 dark:text-muted-400">
                                                                <span>
                                                                    Send {{ $wallet->walletType->name }} to this address
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Amount-->
                                                <div>
                                                    <p class="font-heading text-xs text-muted-400 mb-1">
                                                        Transfer from
                                                    </p>
                                                    <div
                                                        class="w-full p-4 bg-white dark:bg-muted-1000 rounded-xl border border-muted-200 dark:border-muted-800">
                                                        <div class="w-full flex items-center gap-3 text-left">
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
                                                            <div class="ml-auto pr-4">
                                                                <span
                                                                    class="block font-heading text-xs text-muted-800 dark:text-muted-200">
                                                                    Payment Method
                                                                </span>
                                                                <span
                                                                    class="block font-heading text-xs text-muted-500 dark:text-muted-400"
                                                                    x-text="paymentMethod">ACH</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Buttons-->
                                                <div class="flex flex-col gap-4">
                                                    <p class="font-heading text-xs text-muted-500 dark:text-muted-400">
                                                        <span>
                                                            click on the button below after you have sent the payment
                                                        </span>
                                                    </p>
                                                    <button type="submit"
                                                        class="w-full h-10 p-4 btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                        Send Payment
                                                    </button>
                                                </div>
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
