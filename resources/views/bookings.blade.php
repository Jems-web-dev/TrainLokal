@extends('layouts.app')

@section('title', 'TrainLokal | Bookings')

@section('content')
    <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">Bookings</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900">Your upcoming trips</h1>

        <div class="mt-8 space-y-4">
            <div class="rounded-2xl border border-slate-200 p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500">Trip</p>
                        <p class="text-xl font-bold text-slate-900">Jakarta → Bandung</p>
                    </div>
                    <span class="rounded-full bg-emerald-100 px-3 py-1 text-sm font-medium text-emerald-700">Confirmed</span>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-200 p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-slate-500">Trip</p>
                        <p class="text-xl font-bold text-slate-900">Surabaya → Jakarta</p>
                    </div>
                    <span class="rounded-full bg-amber-100 px-3 py-1 text-sm font-medium text-amber-700">Pending</span>
                </div>
            </div>
        </div>
    </div>
@endsection
