<x-app-layout>
    <x-slot name="header">
        {{ __('Transactions') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Amount</th>
                            <th class="px-4 py-3">Currency</th>
                            <th class="px-4 py-3">Type</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach ($transactions as $transaction)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ $transaction->user->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $transaction->amount }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $transaction->wallet->walletType->symbol }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ ($transaction->status == 1 ? 'Success' : $transaction->status == 0) ? 'Pending' : 'Rejected' }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    @if ($transaction->status == 0)
                                        <a href="{{ route('users.edit', $transaction->id) }}"
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm hover:bg-green-200">Approve</a>
                                        <a href="{{ route('users.edit', $transaction->id) }}"
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm hover:bg-green-200">Reject</a>
                                    @else
                                        No Action Required
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div
                class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
