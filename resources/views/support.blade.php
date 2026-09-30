@extends('layouts.app')

@section('title', 'TrainLokal | Support')

@section('content')
    <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">Support</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900">Need help?</h1>

        <div class="mt-8 grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 p-5">
                <p class="text-sm text-slate-500">Phone</p>
                <p class="mt-2 text-xl font-bold text-slate-900">+62 21 555 2026</p>
            </div>
            <div class="rounded-2xl border border-slate-200 p-5">
                <p class="text-sm text-slate-500">Email</p>
                <p class="mt-2 text-xl font-bold text-slate-900">help@trainlokal.com</p>
            </div>
        </div>
    </div>
@endsection
