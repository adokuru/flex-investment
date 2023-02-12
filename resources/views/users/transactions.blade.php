@extends('layouts.user')
@section('title', 'Transactions')
@section('content')
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class=" col-span-12 lg:col-span-8">
                <h2
                    class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl p-4">
                    Latest Transactions
                </h2>
            </div>
            <div class="col-span-12 w-full">
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
                                            Transaction ID
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Transaction Type
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Transaction Status
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Total
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transactions as $item)
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
                                                        CML-TRANS-{{ $item->id }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                {{ $item->transaction_reference }}
                                            </td>
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                @if ($item->status == 1)
                                                    <div class="badge bg-success/10 text-success dark:bg-success/15">
                                                        Success
                                                    </div>
                                                @endif
                                                @if ($item->status == 0)
                                                    <div class="badge bg-warning/10 text-warning dark:bg-warning/15">
                                                        Pending
                                                    </div>
                                                @endif
                                                @if ($item->status == 2)
                                                    <div class="badge bg-danger/10 text-danger dark:bg-danger/15">
                                                        Failed
                                                    </div>
                                                @endif
                                            </td>


                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                <p class="text-sm+ font-medium text-slate-700 dark:text-navy-100">
                                                    {{ $item->currency }}
                                                    {{ number_format($item->amount, 2) }}
                                                </p>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <p class="text-sm+ font-medium text-slate-700 dark:text-navy-100">
                                                    No transactions found
                                                </p>
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <div class="space-y-4 px-4 py-4">
                            {{ $transactions->links() }}
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
