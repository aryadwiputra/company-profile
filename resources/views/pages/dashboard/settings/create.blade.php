@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body flex flex-col p-6">
            <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Basic Inputs</div>
                </div>
            </header>
            <div class="card-text h-full space-y-4">
                <div class="input-area">
                    <label for="name" class="form-label">Project Name*</label>
                    <input id="name" type="text" class="form-control" placeholder="Project Name">
                </div>
                <div class="input-area">
                    <label for="readonly" class="form-label">Readonly Input</label>
                    <input id="readonly" type="text" class="form-control" placeholder="You can't change me.(Readonly)"
                        readonly="readonly">
                </div>
                <div class="input-area">
                    <label for="disable" class="form-label">Disabled</label>
                    <input id="disable" type="text" class="form-control" placeholder="Disabled" disabled="disabled">
                </div>
                <div class="input-area">
                    <label for="description" class="form-label">Project Description</label>
                    <textarea id="description" rows="5" class="form-control" placeholder="Type Here"></textarea>
                </div>
                <div class="input-area">
                    <label for="select" class="form-label">Select Option</label>
                    <select id="select" class="form-control">
                        <option value="option1" class="dark:bg-slate-700">Options 1</option>
                        <option value="option2" class="dark:bg-slate-700">Options 2</option>
                        <option value="option3" class="dark:bg-slate-700">Options 3</option>
                        <option value="option4" class="dark:bg-slate-700">Options 4</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection
