@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <header class=" card-header noborder">
            <h4 class="card-title">Advanced Table
            </h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="overflow-x-auto -mx-6 dashcode-data-table">
                <span class=" col-span-8  hidden"></span>
                <span class="  col-span-4 hidden"></span>
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                            id="data-table">
                            <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                    <th scope="col" class=" table-th ">
                                        Id
                                    </th>

                                    <th scope="col" class=" table-th ">
                                        Order
                                    </th>

                                    <th scope="col" class=" table-th ">
                                        Customer
                                    </th>

                                    <th scope="col" class=" table-th ">
                                        Date
                                    </th>

                                    <th scope="col" class=" table-th ">
                                        Quantity
                                    </th>

                                    <th scope="col" class=" table-th ">
                                        Amount
                                    </th>

                                    <th scope="col" class=" table-th ">
                                        Status
                                    </th>

                                    <th scope="col" class=" table-th ">
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                <tr>
                                    <td class="table-td">1</td>
                                    <td class="table-td ">#951</td>
                                    <td class="table-td">
                                        <span class="flex">
                                            <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                                                <img src="assets/images/all-img/customer_1.png" alt="1"
                                                    class="object-cover w-full h-full rounded-full">
                                            </span>
                                            <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny
                                                Wilson</span>
                                        </span>
                                    </td>
                                    <td class="table-td ">3/26/2022</td>
                                    <td class="table-td ">
                                        <div>
                                            13
                                        </div>
                                    </td>
                                    <td class="table-td ">
                                        <div>
                                            $1779.53
                                        </div>
                                    </td>
                                    <td class="table-td ">

                                        <div
                                            class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                                bg-success-500">
                                            paid
                                        </div>

                                    </td>
                                    <td class="table-td ">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <button class="action-btn" type="button">
                                                <iconify-icon icon="heroicons:eye"></iconify-icon>
                                            </button>
                                            <button class="action-btn" type="button">
                                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                            </button>
                                            <button class="action-btn" type="button">
                                                <iconify-icon icon="heroicons:trash"></iconify-icon>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

@push('js')
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();
        });
    </script>
@endpush
