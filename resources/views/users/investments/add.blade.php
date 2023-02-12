@extends('layouts.user')
@section('title', 'Investments')
@section('content')
    <main class="main-content w-full pb-8 px-5">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl p-4">

            {{ $investment->investment_type_id == 1 ? 'Fixed' : ($investment->investment_type_id == 2 ? 'Flexible' : '') }}
            {{ $investment->name }}
            Investment
        </h2>
        <!--Send money wizard-->
        <div class="w-full pt-3">
            <div class="w-full pt-36">
                <div class="w-full max-w-6xl mx-auto px-4">
                    <div class="w-full grid md:grid-cols-12 gap-10">
                        <!--Stepper column-->
                        <div class="md:col-span-3 lg:col-span-3">
                            <!--Stepper-->
                        </div>

                        <!--Steps column-->
                        <div class="md:col-span-9 lg:col-span-8">
                            <!--Steps-->
                            <div class="relative max-w-md space-y-3">
                                <form class="w-full space-y-4" action="{{ route('investment.setAmount') }}" method="post">
                                    @csrf
                                    <div class="w-full" style="">
                                        <h2 class="font-heading text-2xl md:text-3xl text-muted-800 dark:text-white mb-10">
                                            Enter an amount to invest
                                        </h2>

                                        {{-- errors --}}
                                        @if ($errors->any())
                                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                                                role="alert">
                                                <strong class="font-bold">Whoops!</strong>
                                                <span class="block sm:inline">There were some problems with your
                                                    input.</span>
                                                <ul class="list-disc list-inside">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif


                                        <input type="hidden" name="investment_plan_id" value="{{ $investment->id }}">

                                        <div class="w-full max-w-md">
                                            <!--Amount input-->
                                            <div class="group relative">
                                                <input type="number" name="amount" id="amount"
                                                    class=" pl-12 bg-white  h-14 text-4xl leading-5 font-sans w-full text-muted-600 border-b-2 border-muted-300 focus:border-primary-500 placeholder:text-muted-300 dark:placeholder:text-muted-700 dark:bg-muted-900 dark:text-muted-200 dark:border-muted-800 dark:focus:border-primary-500 outline-none transition-all duration-300"
                                                    placeholder="0.00" required />
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
                                            <div class="relative w-full z-10 pt-10">
                                                <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                                                    Select an wallet
                                                </h4>

                                                <div class="relative group">
                                                    <select required name="wallet_id"
                                                        class="
                                                        appearance-none
                                                        px-6
                                                        py-2
                                                        pt-4
                                                        pb-4
                                                        text-sm
                                                        leading-5
                                                        font-sans
                                                        w-full
                                                        rounded
                                                        border border-muted-300
                                                        bg-white
                                                        text-muted-600
                                                        placeholder-gray-300
                                                        focus:border-muted-300 focus:shadow-lg
                                                        dark:placeholder-gray-600
                                                        dark:bg-muted-900
                                                        dark:text-muted-200
                                                        dark:border-muted-800
                                                        dark:focus:border-muted-800
                                                        tw-accessibility
                                                        transition-all
                                                        duration-300
                                                      "
                                                        required>
                                                        <option value="">Select wallet</option>
                                                        @forelse ($wallets as $item)
                                                            <!--Account-->
                                                            <option value="{{ $item->id }}" <button type="button"
                                                                class="w-full flex items-center gap-3 text-left py-2 px-4 rounded-xl hover:bg-muted-100 dark:hover:bg-muted-900 transition-colors duration-300">

                                                                <span class="block">
                                                                    <span
                                                                        class="block font-heading text-sm text-muted-800 dark:text-muted-200">
                                                                        {{ $item->walletType->name }}
                                                                    </span>
                                                                    <span
                                                                        class="block font-heading text-xs text-muted-500 dark:text-muted-400">
                                                                        ${{ $item->usd_balance }}
                                                                    </span>
                                                                </span>
                                                                </button>
                                                            </option>
                                                        @empty
                                                            <option>
                                                                <button type="button"
                                                                    class="w-full flex items-center gap-3 text-left py-2 px-4 rounded-xl hover:bg-muted-100 dark:hover:bg-muted-900 transition-colors duration-300">

                                                                    <span class="block">
                                                                        <span
                                                                            class="block font-heading text-sm text-muted-800 dark:text-muted-200">
                                                                            No wallet found
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                            </option>
                                                        @endforelse
                                                    </select>


                                                </div>
                                            </div>

                                            <!--Transfer account-->
                                            <div class="py-10">
                                                <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                                                    Invest in {{ $investment->name }}
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
                                                                    {{ $investment->name }}
                                                                </span>
                                                                <span
                                                                    class="block font-heading text-xs text-muted-500 dark:text-muted-400">
                                                                    {{ $investment->investment_type_id == 1 ? 'Fixed' : ($investment->investment_type_id == 2 ? 'Flexible' : 'Trial') }}
                                                                </span>
                                                            </div>
                                                            <div class="ml-auto pr-4">
                                                                <span
                                                                    class="block font-heading text-xs text-muted-800 dark:text-muted-200">
                                                                    Payment Method
                                                                </span>
                                                                <span
                                                                    class="block font-heading text-xs text-muted-500 dark:text-muted-400">
                                                                    {{ $investment->payment_method_id == 1 ? 'Bank Transfer' : 'Crypto' }}
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </button>

                                                </div>
                                            </div>

                                            <!--Buttons-->
                                            <div class="flex gap-4">
                                                <button type="submit"
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
