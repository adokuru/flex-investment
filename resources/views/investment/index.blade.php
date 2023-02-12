<x-app-layout>
    <x-slot name="header">
        {{ __('User Investment') }}
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
                            <th class="px-4 py-3">Status</th>
                            {{-- <th class="px-4 py-3">Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach ($investments as $investment)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ $investment->user->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $investment->amount }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $investment->wallet->walletType->symbol }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ ($investment->status == 1 ? 'Success' : $investment->status == 0) ? 'Pending' : 'Rejected' }}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div
                class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $investments->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
