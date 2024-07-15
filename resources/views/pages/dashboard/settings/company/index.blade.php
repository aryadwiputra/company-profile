@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body flex flex-col p-6">
            <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Company Setting</div>
                </div>
            </header>
            <form action="{{ route('settings.company.update') }}" method="post" enctype="multipart/form-data"
                id="company-settings-form">
                @method('PUT')
                @csrf
                <div class="card-text h-full space-y-4">
                    <div class="input-area">
                        <label for="name" class="form-label">Logo</label>
                        <div class="filegroup">
                            <label>
                                <input type="file" class="w-full hidden" name="logo">
                                <span class="w-full h-[40px] file-control flex items-center custom-class">
                                    <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                        <span class="text-slate-400">Choose a file or drop it here...</span>
                                    </span>
                                    <span
                                        class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                </span>
                            </label>
                        </div>
                        <x-dashboard.error name="logo" />
                    </div>
                    <div class="input-area">
                        <label for="company_name" class="form-label">Name</label>
                        <input id="company_name" name="company_name" type="text" class="form-control"
                            placeholder="Company name" value="{{ $company_name ?? '' }}">
                        <x-dashboard.error name="company_name" />
                    </div>
                    <div class="input-area">
                        <label for="company_email" class="form-label">Email</label>
                        <input id="company_email" name="company_email" type="text" class="form-control"
                            placeholder="Company email" value="{{ $company_email ?? '' }}">
                        <x-dashboard.error name="company_email" />
                    </div>
                    <div class="input-area">
                        <label for="company_phone" class="form-label">Phone</label>
                        <input id="company_phone" name="company_phone" type="text" class="form-control"
                            placeholder="Company phone" value="{{ $company_phone ?? '' }}">
                        <x-dashboard.error name="company_phone" />
                    </div>
                    <div class="input-area">
                        <label for="company_address" class="form-label">Address</label>
                        <textarea id="company_address" name="company_address" rows="5" class="form-control" placeholder="Company address">{{ $company_address ?? '' }}</textarea>
                        <x-dashboard.error name="company_address" />
                    </div>
                    <div class="mt-6 space-x-3 text-right">
                        <button class="btn btn-dark next-button" type="submit" id="btn-save">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#company-settings-form').on('submit', function() {
                // Disable the submit button to prevent repeated clicks
                $('#btn-save').prop('disabled', true);
                $('#btn-save').text('Saving...');
            });
        });
    </script>
@endpush
