@extends('layouts.app')

@section('content')
    <section class="py-14 md:py-20">
        <div class="space-y-8 max-w-3xl">
            <p class="text-xs uppercase tracking-[0.32em] text-gray-500">Stories platform</p>
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 leading-tight">
                Interaktive fortællinger om cybersikkerhed
            </h1>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                Stories er en intern platform, som jeg som Compliance Manager kan bruge til at skabe interaktive
                fortællinger om cybersikkerhed. Her kan man bygge scenarier som phishing, ransomware og DDoS helt
                fra den dårlige aktørs perspektiv—fra deres computer og frem gennem angrebskæden—til situationen
                rammer medarbejderens pc.
            </p>
            <div class="h-px w-20 bg-gray-200"></div>
            <p class="text-lg text-gray-700 leading-relaxed">
                Platformen gør det muligt at vise, hvad der sker undervejs: hvilke teknikker angriberen bruger, hvilke
                tegn medarbejderen kan opdage, og hvad vi som organisation gør for at forebygge, opdage og reagere.
                Indholdet præsenteres som slides, og kan forgrenes med “branching trees”, så historien ændrer sig
                afhængigt af de valg, brugeren tager undervejs. Alt indhold bygges fra bunden i en editor, så
                historierne kan skræddersys til vores miljø, processer og risikobillede.
            </p>
        </div>
    </section>

    <section class="py-12 md:py-16 border-t border-gray-100 bg-gray-50/60">
        <div class="space-y-6">
            <div class="flex items-center gap-3">
                <span class="h-2 w-2 rounded-full bg-gray-900"></span>
                <h2 class="text-xl font-serif font-semibold text-gray-900">Struktur i fortællingen</h2>
            </div>
            <div class="grid gap-6 md:grid-cols-3">
                <div class="p-6 border border-gray-200 rounded-2xl bg-white shadow-[0_12px_30px_-22px_rgba(0,0,0,0.25)]">
                    <h3 class="text-lg font-semibold text-gray-900">Scenario-bygger</h3>
                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        Opbyg angreb fra start til slut med tydelige trin og kontekst.
                    </p>
                </div>
                <div class="p-6 border border-gray-200 rounded-2xl bg-white shadow-[0_12px_30px_-22px_rgba(0,0,0,0.25)]">
                    <h3 class="text-lg font-semibold text-gray-900">Branching trees</h3>
                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        Gør forløbet interaktivt med valg, der ændrer historien.
                    </p>
                </div>
                <div class="p-6 border border-gray-200 rounded-2xl bg-white shadow-[0_12px_30px_-22px_rgba(0,0,0,0.25)]">
                    <h3 class="text-lg font-semibold text-gray-900">Tilpasset jeres miljø</h3>
                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        Byg indhold fra bunden, så det matcher processer og risikobillede.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 border-t border-gray-100">
        <div class="p-8 md:p-10 bg-white border border-gray-200 rounded-3xl shadow-[0_18px_40px_-28px_rgba(0,0,0,0.25)]">
            <div class="flex flex-col gap-6 md:flex-row md:items-start md:justify-between">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-3 text-sm text-gray-500">
                        <span class="h-1 w-10 bg-gray-900"></span>
                        Overblik og signaler
                    </div>
                    <h2 class="text-2xl font-serif font-semibold text-gray-900">Se angrebet indefra</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Visualisér, hvad der sker undervejs i angrebskæden, hvilke signaler medarbejderen kan spotte,
                        og hvordan organisationen reagerer i hvert trin.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                    <div class="rounded-2xl border border-gray-200 p-4 bg-gray-50/60">
                        <p class="text-xs uppercase tracking-[0.22em] text-gray-400">Trin</p>
                        <p class="mt-2 text-2xl font-semibold text-gray-900">12+</p>
                        <p class="mt-1">Angrebssekvenser</p>
                    </div>
                    <div class="rounded-2xl border border-gray-200 p-4 bg-gray-50/60">
                        <p class="text-xs uppercase tracking-[0.22em] text-gray-400">Signal</p>
                        <p class="mt-2 text-2xl font-semibold text-gray-900">8</p>
                        <p class="mt-1">Typiske indikatorer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
