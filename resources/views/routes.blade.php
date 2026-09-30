@extends('layouts.app')

@section('title', 'TrainLokal | Routes')

@section('content')
    <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">Routes</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900">Available destinations</h1>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl border border-slate-200 p-5">
                <p class="text-sm text-slate-500">Jakarta → Bandung</p>
                <p class="mt-3 text-2xl font-bold text-slate-900">1h 45m</p>
            </div>
            <div class="rounded-2xl border border-slate-200 p-5">
                <p class="text-sm text-slate-500">Surabaya → Yogyakarta</p>
                <p class="mt-3 text-2xl font-bold text-slate-900">4h 15m</p>
            </div>
            <div class="rounded-2xl border border-slate-200 p-5">
                <p class="text-sm text-slate-500">Semarang → Solo</p>
                <p class="mt-3 text-2xl font-bold text-slate-900">2h 10m</p>
            </div>
        </div>
    </div>
@endsection
