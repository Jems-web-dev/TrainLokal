@extends('layouts.app')

@section('title', 'TrainLokal | Offers')

@section('content')
    <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">Offers</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900">Special deals for your next trip</h1>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="rounded-2xl bg-indigo-50 p-5">
                <p class="text-sm text-indigo-700">Weekend getaway</p>
                <p class="mt-2 text-2xl font-bold text-slate-900">20% OFF</p>
            </div>
            <div class="rounded-2xl bg-emerald-50 p-5">
                <p class="text-sm text-emerald-700">Group booking</p>
                <p class="mt-2 text-2xl font-bold text-slate-900">Save more</p>
            </div>
            <div class="rounded-2xl bg-amber-50 p-5">
                <p class="text-sm text-amber-700">Early bird</p>
                <p class="mt-2 text-2xl font-bold text-slate-900">15% OFF</p>
            </div>
        </div>
    </div>
@endsection
