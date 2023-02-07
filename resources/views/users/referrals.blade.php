@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
    <main class="main-content w-full pb-8 px-5">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-xl p-4">
            Investments
        </h2>
        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
            <table class="is-hoverable w-full text-left">
                <thead>
                    <tr>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            #
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Name
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Job
                        </th>
                        <th
                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Favorite Color
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">1</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Cy Ganderton</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                            Quality Control Specialist
                        </td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Blue</td>
                    </tr>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">2</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Hart Hagerty</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                            Desktop Support Technician
                        </td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Purple</td>
                    </tr>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">3</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Brice Swyre</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Tax Accountant</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Red</td>
                    </tr>
                    <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">4</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Marjy Ferencz</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                            Office Assistant I
                        </td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">Crimson</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
