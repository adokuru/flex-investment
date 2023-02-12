@extends('layouts.user')
@section('title', 'Referrals')
@section('content')
    <main class="main-content w-full pb-8 px-5">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl p-4">
            Referrals
        </h2>

        <div class="col-span-12 w-full">
            <div
                class="alert flex items-center justify-between rounded-lg bg-primary px-4 py-3 text-white dark:bg-accent sm:px-5">
                <p id="clipboardContent1">{{ Auth::user()->referral_link }}</p>
                <button class="btn h-6 shrink-0 rounded bg-white/20 px-2 text-xs text-white active:bg-white/25"
                    onclick="copyToClipboard('#clipboardContent1')">
                    Copy
                </button>
            </div>

            <h2
                class="mt-8 text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl p-4">
                Latest Referrals
            </h2>
            <div class="flex items-center justify-between w-full">
                <div class="card mt-3 w-full">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table class="is-hoverable w-full text-left">
                            <thead>
                                <tr>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Date
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Name
                                    </th>
                                    <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        Email
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($referrals as $item)
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium">
                                                {{ $item->created_at->format('d M, Y') }}
                                            </p>
                                            <p class="mt-0.5 text-xs">
                                                {{ $item->created_at->format('h:i A') }}
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <span class="font-medium text-slate-700 dark:text-navy-100">
                                                    {{ $item->name }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <span class="font-medium text-slate-700 dark:text-navy-100">
                                                    {{ $item->email }}
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <p class="text-sm+ font-medium text-slate-700 dark:text-navy-100">
                                                No Referrals found
                                            </p>
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="space-y-4 px-4 py-4">
                        {{ $referrals->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </main>
    <script>
        function copyToClipboard(element) {
            // copy to clipboard with vanilla javascript
            var copyText = document.querySelector(element);
            var textArea = document.createElement("textarea");
            textArea.value = copyText.textContent;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("Copy");
            textArea.remove();
            // show alert
            alert('Copied to clipboard')
        }
    </script>
@endsection
