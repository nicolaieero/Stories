<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Stories') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .gradient-bg {
                background: radial-gradient(1200px 600px at 10% -10%, rgba(14, 165, 233, 0.2), transparent 60%),
                    radial-gradient(900px 500px at 90% 0%, rgba(249, 115, 22, 0.18), transparent 55%),
                    linear-gradient(180deg, #f8fafc 0%, #ffffff 45%, #ffffff 100%);
            }
            .glass {
                background: rgba(255, 255, 255, 0.7);
                backdrop-filter: blur(12px);
            }
            .shadow-soft {
                box-shadow: 0 20px 50px -30px rgba(15, 23, 42, 0.35);
            }
            .shadow-card {
                box-shadow: 0 18px 40px -28px rgba(15, 23, 42, 0.25);
            }
            .mockup-screen {
                background: linear-gradient(160deg, #0f172a 0%, #111827 100%);
            }
            .node {
                background: #ffffff;
                border: 1px solid rgba(15, 23, 42, 0.08);
                box-shadow: 0 10px 30px -24px rgba(15, 23, 42, 0.35);
            }
        </style>
    </head>
    <body class="bg-white text-slate-900 antialiased">
        <div class="gradient-bg min-h-screen">
            <nav class="sticky top-0 z-40 border-b border-slate-200 bg-white/80 backdrop-blur">
                <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-4 md:px-6 lg:px-8">
                    <div class="flex items-center gap-3">
                        <div class="h-9 w-9 rounded-xl bg-slate-900 text-white flex items-center justify-center text-sm font-semibold">
                            S
                        </div>
                        <span class="text-sm uppercase tracking-[0.32em] text-slate-500">Stories</span>
                    </div>
                    <div class="hidden md:flex items-center gap-6 text-sm text-slate-600">
                        <span>Platform</span>
                        <span>Scenarier</span>
                        <span>Sikkerhed</span>
                        <span>Demo</span>
                    </div>
                    <div class="text-sm font-semibold text-slate-900">Book demo</div>
                </div>
            </nav>

            <header class="mx-auto w-full max-w-6xl px-4 pb-16 pt-14 md:px-6 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                    <div class="space-y-7">
                        <div class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.28em] text-slate-500 shadow-card">
                            Branching stories for cyber awareness
                        </div>
                        <h1 class="text-4xl font-semibold leading-tight text-slate-900 md:text-5xl">
                            Byg phishing-, ransomware- og DDoS-forløb som levende historier.
                        </h1>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            Stories giver Compliance Managers et visuelt værktøj til at skabe interaktive fortællinger,
                            hvor man følger den dårlige aktør gennem angrebskæden og lærer medarbejderen at spotte signaler.
                        </p>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-slate-600">
                            <div class="flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span> Live preview af scenarier
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-amber-500"></span> Branching trees med valg
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-sky-500"></span> Indsigter til træning
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft">
                        <div class="mockup-screen rounded-2xl p-6 text-slate-200 shadow-card">
                            <div class="flex items-center justify-between text-xs text-slate-400">
                                <span>Scenario builder</span>
                                <span>v1.2</span>
                            </div>
                            <div class="mt-6 space-y-4">
                                <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Phishing entry</p>
                                    <p class="mt-2 text-lg font-semibold text-white">Spearphish → Credential capture</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 text-xs text-slate-300">
                                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                                        <p>Signal</p>
                                        <p class="mt-2 text-white">Domæne-lookalike</p>
                                    </div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                                        <p>Response</p>
                                        <p class="mt-2 text-white">Sandbox + MFA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-3">
                            <span class="h-10 w-10 rounded-full bg-slate-900 text-white flex items-center justify-center text-xs font-semibold">UI</span>
                            <div>
                                <p class="text-sm font-semibold text-slate-900">Produkt mockup</p>
                                <p class="text-xs text-slate-500">Bygget af komponenter, ingen billeder.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="mx-auto w-full max-w-6xl px-4 pb-14 md:px-6 lg:px-8">
                <div class="grid gap-6 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-8 w-8 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center">01</span>
                            85% bedre forståelse
                        </div>
                        <p class="mt-3 text-sm text-slate-600">
                            Medarbejdere ser angrebet fra angriberens perspektiv.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-8 w-8 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center">02</span>
                            3x hurtigere læring
                        </div>
                        <p class="mt-3 text-sm text-slate-600">
                            Branching stories fastholder fokus og træner valg.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-8 w-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center">03</span>
                            Risiko i kontekst
                        </div>
                        <p class="mt-3 text-sm text-slate-600">
                            Indhold skræddersys til jeres processer og miljø.
                        </p>
                    </div>
                </div>
            </section>

            <section class="mx-auto w-full max-w-6xl px-4 pb-16 md:px-6 lg:px-8">
                <div class="flex items-center gap-3">
                    <span class="h-2 w-2 rounded-full bg-slate-900"></span>
                    <h2 class="text-xl font-semibold text-slate-900">Feature grid</h2>
                </div>
                <div class="mt-6 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-9 w-9 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center">⚡</span>
                            Phishing flows
                        </div>
                        <p class="mt-3 text-sm text-slate-600">Opbyg valgpunkter og signaler i realtid.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-9 w-9 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center">🧭</span>
                            Angrebskæde
                        </div>
                        <p class="mt-3 text-sm text-slate-600">Visualisér teknik, tilgang og mitigering.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-9 w-9 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center">🔒</span>
                            Ransomware scenes
                        </div>
                        <p class="mt-3 text-sm text-slate-600">Følg kryptering, lateral movement og recovery.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-9 w-9 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center">🧩</span>
                            Branching trees
                        </div>
                        <p class="mt-3 text-sm text-slate-600">Historier ændrer sig baseret på beslutninger.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-9 w-9 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center">📊</span>
                            Effektmåling
                        </div>
                        <p class="mt-3 text-sm text-slate-600">Se hvilke valg der giver størst læring.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                            <span class="h-9 w-9 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center">🛰️</span>
                            DDoS fortællinger
                        </div>
                        <p class="mt-3 text-sm text-slate-600">Forklar volumetriske og app-layer angreb.</p>
                    </div>
                </div>
            </section>

            <section class="mx-auto w-full max-w-6xl px-4 pb-16 md:px-6 lg:px-8">
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft md:p-10">
                    <div class="flex items-center gap-3 text-sm font-semibold text-slate-900">
                        <span class="h-8 w-8 rounded-full bg-slate-900 text-white flex items-center justify-center">?</span>
                        How it works
                    </div>
                    <div class="mt-6 grid gap-6 md:grid-cols-3">
                        <div class="space-y-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Step 1</p>
                            <h3 class="text-lg font-semibold text-slate-900">Byg scenariet</h3>
                            <p class="text-sm text-slate-600">Definér aktør, mål, vektor og signaler.</p>
                        </div>
                        <div class="space-y-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Step 2</p>
                            <h3 class="text-lg font-semibold text-slate-900">Design branches</h3>
                            <p class="text-sm text-slate-600">Skab valg og konsekvenser i flowet.</p>
                        </div>
                        <div class="space-y-3">
                            <p class="text-xs uppercase tracking-[0.25em] text-slate-400">Step 3</p>
                            <h3 class="text-lg font-semibold text-slate-900">Del & mål</h3>
                            <p class="text-sm text-slate-600">Publicér historien og mål læring.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mx-auto w-full max-w-6xl px-4 pb-16 md:px-6 lg:px-8">
                <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                    <div class="space-y-4">
                        <h2 class="text-2xl font-semibold text-slate-900">Demo-preview: Branching node-graph</h2>
                        <p class="text-slate-600 leading-relaxed">
                            Byg story‑flows som et grafisk netværk, hvor hvert node repræsenterer handlinger,
                            signaler og response‑trin.
                        </p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft">
                        <div class="relative h-72 rounded-2xl bg-slate-50 p-6">
                            <div class="node absolute left-6 top-6 rounded-xl px-4 py-3 text-xs text-slate-700">Initial phish</div>
                            <div class="node absolute right-8 top-8 rounded-xl px-4 py-3 text-xs text-slate-700">Link clicked</div>
                            <div class="node absolute left-10 bottom-10 rounded-xl px-4 py-3 text-xs text-slate-700">Reported</div>
                            <div class="node absolute right-16 bottom-12 rounded-xl px-4 py-3 text-xs text-slate-700">Payload</div>
                            <div class="absolute left-16 top-16 h-16 w-px bg-slate-300"></div>
                            <div class="absolute right-20 top-16 h-16 w-px bg-slate-300"></div>
                            <div class="absolute left-16 bottom-24 h-px w-36 bg-slate-300"></div>
                            <div class="absolute right-24 bottom-24 h-px w-28 bg-slate-300"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mx-auto w-full max-w-6xl px-4 pb-16 md:px-6 lg:px-8">
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft md:p-10">
                    <p class="text-sm uppercase tracking-[0.25em] text-slate-400">Testimonial</p>
                    <blockquote class="mt-4 text-xl text-slate-900 leading-relaxed">
                        “Stories gør det muligt at forklare komplekse angreb uden at miste medarbejderen. Det føles som
                        en interaktiv fortælling, ikke som en traditionel træning.”
                    </blockquote>
                    <div class="mt-6 flex items-center gap-3 text-sm text-slate-600">
                        <div class="h-10 w-10 rounded-full bg-slate-900 text-white flex items-center justify-center">CM</div>
                        <div>
                            <p class="font-semibold text-slate-900">Compliance Manager</p>
                            <p>Nordic Finance Group</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mx-auto w-full max-w-6xl px-4 pb-20 md:px-6 lg:px-8">
                <div class="flex items-center gap-3">
                    <span class="h-2 w-2 rounded-full bg-slate-900"></span>
                    <h2 class="text-xl font-semibold text-slate-900">FAQ</h2>
                </div>
                <div class="mt-6 space-y-4" id="faq">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <button class="flex w-full items-center justify-between text-left text-sm font-semibold text-slate-900" data-faq>
                            Hvordan adskiller Stories sig fra klassisk træning?
                            <span class="text-slate-400">+</span>
                        </button>
                        <p class="mt-3 hidden text-sm text-slate-600">
                            I stedet for statiske slides får du branching stories, hvor medarbejdere trænes i valg og konsekvens.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <button class="flex w-full items-center justify-between text-left text-sm font-semibold text-slate-900" data-faq>
                            Kan vi bygge egne DDoS- og ransomware-scenarier?
                            <span class="text-slate-400">+</span>
                        </button>
                        <p class="mt-3 hidden text-sm text-slate-600">
                            Ja. Editorens blokke kan skræddersys til jeres miljø, teknikker og risikobillede.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-card">
                        <button class="flex w-full items-center justify-between text-left text-sm font-semibold text-slate-900" data-faq>
                            Hvordan måler vi effekten af historierne?
                            <span class="text-slate-400">+</span>
                        </button>
                        <p class="mt-3 hidden text-sm text-slate-600">
                            Stories giver indsigter i valg, responstid og hvilke signaler der overses.
                        </p>
                    </div>
                </div>
            </section>

            <footer class="border-t border-slate-200 bg-white">
                <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-4 py-10 text-sm text-slate-500 md:px-6 lg:px-8">
                    <div class="flex items-center gap-3">
                        <div class="h-8 w-8 rounded-lg bg-slate-900 text-white flex items-center justify-center text-xs font-semibold">S</div>
                        Stories Platform
                    </div>
                    <div class="flex items-center gap-6">
                        <span>Privacy</span>
                        <span>Kontakt</span>
                        <span>Dokumentation</span>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            document.querySelectorAll('[data-faq]').forEach((button) => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('span');
                    const isOpen = !content.classList.contains('hidden');
                    document.querySelectorAll('#faq p').forEach((item) => item.classList.add('hidden'));
                    document.querySelectorAll('#faq [data-faq] span').forEach((item) => (item.textContent = '+'));
                    if (!isOpen) {
                        content.classList.remove('hidden');
                        icon.textContent = '–';
                    }
                });
            });
        </script>
    </body>
</html>
