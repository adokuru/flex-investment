@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
    <main class="main-content w-full pb-8 px-5">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl p-4">
            Deposits
        </h2>
        <!--Send money wizard-->
        <div class="w-full pt-36">
            <div class="w-full pt-36">
                <div class="w-full max-w-6xl mx-auto px-4">
                    <div class="w-full grid md:grid-cols-12 gap-10">
                        <!--Stepper column-->
                        <div class="md:col-span-3 lg:col-span-4">
                            <!--Stepper-->
                            <div class="flex flex-col md:flex-row gap-4 xs:w-full xs:max-w-xs xs:mx-auto">
                                <div class="relative flex md:flex-col justify-center md:justify-between gap-7">
                                    <div class="h-4 leading-none" :class="currentStep === 0 ? '' : 'xs:hidden'">
                                        <span
                                            class="block font-heading text-xs md:text-xl text-muted-800 dark:text-muted-100"
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
                                <form class="w-full space-y-4" action="{{ route('deposit.selectWalletType') }}"
                                    method="post">
                                    @csrf
                                    <form class="w-full space-y-4" action="">
                                        <!--Radio group-->
                                        @forelse ($wallets as $item)
                                            <div class="group relative">
                                                <input
                                                    class="peer absolute top-0 left-0 w-full h-full opacity-0 z-20 cursor-pointer"
                                                    type="radio" name="wallet_type" value="{{ $item->id }}"
                                                    id="payment_method_{{ $item->id }}"
                                                    checked="{{ $loop->first ? 'checked' : '' }}">
                                                <!--Indicator-->
                                                <div
                                                    class="absolute top-1/2 -translate-y-1/2 left-6 w-6 h-6 rounded-full flex items-center justify-center peer-checked:child:scale-1 peer-not-checked:child:scale-0 bg-muted-100 text-muted-100 dark:bg-muted-800 dark:text-muted-800 peer-checked:text-primary-500">
                                                    <div
                                                        class="w-3 h-3 rounded-full bg-current transition-colors duration-300">
                                                    </div>
                                                </div>
                                                <div
                                                    class="group flex items-center py-4 px-6 bg-white dark:bg-muted-1000 border border-muted-200 dark:border-muted-800 rounded-lg cursor-pointer peer-checked:shadow-xl peer-checked:shadow-muted-400/10 dark:peer-checked:shadow-muted-800/10 group-focus-visible:tw-accessibility-static transition-shadow duration-300">
                                                    <div
                                                        class="flex items-center justify-center w-5 h-5 border border-muted-200 rounded-full">
                                                    </div>
                                                    <div class="flex flex-col ml-6">
                                                        <span
                                                            class="font-heading text-base font-medium text-muted-800 dark:text-muted-100">
                                                            {{ $item->walletType->name }}
                                                        </span>
                                                    </div>
                                                    <div class="flex flex-col w-32 ml-auto">
                                                        <span
                                                            class="font-heading text-base font-medium text-muted-800 dark:text-muted-100">
                                                            {{ $item->amount }}
                                                        </span>
                                                        <span class="font-heading text-xs text-muted-600">
                                                            ${{ $item->usd_balance }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            No Wallets Found
                                        @endforelse
                                        <button
                                            class="w-full btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            Next
                                        </button>
                                    </form>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
