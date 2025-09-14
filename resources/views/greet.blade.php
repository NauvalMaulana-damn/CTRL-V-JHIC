<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greet.blade.php</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-950 text-slate-100 antialiased selection:bg-fuchsia-400/30">
    <!-- Ambient background -->
    <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div
            class="absolute -top-32 -right-24 h-72 w-72 rounded-full bg-gradient-to-tr from-fuchsia-500 to-cyan-400 opacity-25 blur-3xl">
        </div>
        <div
            class="absolute bottom-0 -left-20 h-96 w-96 rounded-full bg-gradient-to-tr from-indigo-500 to-fuchsia-500 opacity-20 blur-3xl">
        </div>
    </div>

    <!-- Navbar -->
    <header class="sticky top-0 z-40 backdrop-blur-md bg-slate-950/60 border-b border-white/10">
        <nav class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="flex items-center justify-between py-4">
                <a href="#" class="inline-flex items-center gap-2">
                    <span
                        class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-gradient-to-tr from-fuchsia-500 to-cyan-400 text-slate-900 font-black">🎆</span>
                    <span class="text-sm tracking-widest text-slate-300">SLEEK.io</span>
                </a>
                <div class="hidden md:flex items-center gap-6 text-sm">
                    <a href="#features" class="hover:text-white text-slate-300">Features</a>
                    <a href="#work" class="hover:text-white text-slate-300">Work</a>
                    <a href="#contact" class="hover:text-white text-slate-300">Contact</a>
                </div>
                <a href="#contact"
                    class="hidden sm:inline-flex rounded-md border border-white/10 bg-white/5 px-3 py-1.5 text-sm hover:bg-white/10 transition">
                    Get started
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="relative">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="grid gap-10 lg:grid-cols-2 items-center py-16 md:py-24">
                <div>
                    <h1 class="text-4xl md:text-6xl font-black leading-tight">
                        Build and Design responsive UI
                        <span
                            class="block bg-gradient-to-r from-fuchsia-400 via-cyan-300 to-emerald-300 bg-clip-text text-transparent">
                            faster with sleek.io
                        </span>
                    </h1>
                    <p class="mt-5 text-slate-300 max-w-xl">
                        A minimal, elegant starter layout with glass cards, soft glows, and buttery hover states.
                        Mobile-first and production-friendly.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#work"
                            class="rounded-md bg-gradient-to-r from-fuchsia-500 to-cyan-400 px-5 py-2.5 font-medium text-slate-900 shadow-sm hover:opacity-90 transition">
                            Explore components
                        </a>
                        <a href="#features"
                            class="rounded-md border border-white/10 bg-white/5 px-5 py-2.5 font-medium hover:bg-white/10 transition">
                            See features
                        </a>
                    </div>
                    <div class="mt-6 flex items-center gap-3 text-sm text-slate-400">
                        <span
                            class="inline-flex h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px] shadow-emerald-400/60"></span>
                        No build step required — CDN-ready
                    </div>
                </div>

                <!-- Hero showcase card -->
                <div class="relative">
                    <div
                        class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-4 md:p-6 shadow-2xl shadow-fuchsia-500/10">
                        <div
                            class="aspect-[16/10] rounded-xl bg-gradient-to-br from-slate-800 to-slate-900 p-4 md:p-6 relative overflow-hidden">
                            <div class="absolute inset-0">
                                <div class="absolute -top-8 -left-8 h-28 w-28 rounded-xl bg-fuchsia-500/20 blur-xl">
                                </div>
                                <div
                                    class="absolute -bottom-10 -right-10 h-40 w-40 rounded-full bg-cyan-400/20 blur-xl">
                                </div>
                            </div>
                            <div class="relative grid gap-3">
                                <div class="h-8 w-40 rounded-md bg-white/10"></div>
                                <div class="flex gap-3">
                                    <div class="h-6 w-24 rounded-md bg-white/10"></div>
                                    <div class="h-6 w-16 rounded-md bg-white/10"></div>
                                    <div class="h-6 w-20 rounded-md bg-white/10"></div>
                                </div>
                                <div class="mt-2 grid grid-cols-3 gap-3">
                                    <div class="h-28 rounded-lg bg-white/10 hover:bg-white/15 transition"></div>
                                    <div class="h-28 rounded-lg bg-white/10 hover:bg-white/15 transition"></div>
                                    <div class="h-28 rounded-lg bg-white/10 hover:bg-white/15 transition"></div>
                                </div>
                                <div class="mt-3 h-10 w-32 rounded-md bg-gradient-to-r from-fuchsia-500 to-cyan-400">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 hidden md:block">
                        <div
                            class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-300 shadow-lg backdrop-blur">
                            Crafted with care — smooth on mobile
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-14 md:py-20">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="mb-10">
                <h2 class="text-2xl md:text-3xl font-bold">Why this layout works</h2>
                <p class="mt-2 text-slate-300">Balanced density, clear hierarchy, and delightful motion—without
                    JavaScript.</p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <article
                    class="group rounded-xl border border-white/10 bg-white/5 p-6 backdrop-blur hover:bg-white/10 transition">
                    <div
                        class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-fuchsia-500/20 text-fuchsia-300">
                        ⚡</div>
                    <h3 class="font-semibold">Lightning-fast</h3>
                    <p class="mt-2 text-sm text-slate-300">CDN drop-in, zero build step, instant iteration.</p>
                    <div
                        class="mt-4 h-1 w-0 group-hover:w-16 bg-gradient-to-r from-fuchsia-500 to-cyan-400 transition-all">
                    </div>
                </article>

                <article
                    class="group rounded-xl border border-white/10 bg-white/5 p-6 backdrop-blur hover:bg-white/10 transition">
                    <div
                        class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-cyan-400/20 text-cyan-200">
                        📱</div>
                    <h3 class="font-semibold">Mobile-first</h3>
                    <p class="mt-2 text-sm text-slate-300">Thoughtful spacing, tap targets, and readable type.</p>
                    <div
                        class="mt-4 h-1 w-0 group-hover:w-16 bg-gradient-to-r from-fuchsia-500 to-cyan-400 transition-all">
                    </div>
                </article>

                <article
                    class="group rounded-xl border border-white/10 bg-white/5 p-6 backdrop-blur hover:bg-white/10 transition">
                    <div
                        class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-400/20 text-emerald-200">
                        🎨</div>
                    <h3 class="font-semibold">Tasteful visuals</h3>
                    <p class="mt-2 text-sm text-slate-300">Glassmorphism, soft glows, and gradients that pop.</p>
                    <div
                        class="mt-4 h-1 w-0 group-hover:w-16 bg-gradient-to-r from-fuchsia-500 to-cyan-400 transition-all">
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Work / Gallery -->
    <section id="work" class="py-14 md:py-20">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="mb-8 flex items-end justify-between">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold">Recent work</h2>
                    <p class="mt-2 text-slate-300">Responsive cards with smooth hover and focus states.</p>
                </div>
                <a href="#contact" class="hidden sm:inline-flex text-sm text-slate-300 hover:text-white">Contact</a>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card -->
                <a href="#"
                    class="group relative rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur hover:bg-white/10 transition focus:outline-none focus:ring-2 focus:ring-fuchsia-500/40">
                    <div class="aspect-[16/10] rounded-lg bg-slate-800"></div>
                    <div class="mt-4 flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">Attendance Dashboard</h3>
                            <p class="text-sm text-slate-400">Analytics & verification</p>
                        </div>
                        <span
                            class="text-xs rounded-md bg-gradient-to-r from-fuchsia-500 to-cyan-400 px-2 py-1 text-slate-900 font-semibold">Live</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur hover:bg-white/10 transition focus:outline-none focus:ring-2 focus:ring-fuchsia-500/40">
                    <div class="aspect-[16/10] rounded-lg bg-slate-800"></div>
                    <div class="mt-4 flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">Face Verify Flow</h3>
                            <p class="text-sm text-slate-400">OpenCV + API integration</p>
                        </div>
                        <span class="text-xs rounded-md bg-white/10 px-2 py-1 text-slate-300">Prototype</span>
                    </div>
                </a>

                <a href="#"
                    class="group relative rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur hover:bg-white/10 transition focus:outline-none focus:ring-2 focus:ring-fuchsia-500/40">
                    <div class="aspect-[16/10] rounded-lg bg-slate-800"></div>
                    <div class="mt-4 flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">WSL Toolkit</h3>
                            <p class="text-sm text-slate-400">Automation & shortcuts</p>
                        </div>
                        <span class="text-xs rounded-md bg-white/10 px-2 py-1 text-slate-300">Docs</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-14 md:py-20">
        <div class="mx-auto max-w-3xl px-4 md:px-8">
            <div class="rounded-2xl border border-white/10 bg-white/5 p-8 md:p-10 backdrop-blur">
                <blockquote class="text-lg leading-relaxed text-slate-200">
                    “This layout nails the essentials: fast to iterate, easy to extend, and gorgeous out of the box.”
                </blockquote>
                <div class="mt-5 flex items-center gap-3">
                    <div class="h-9 w-9 rounded-full bg-gradient-to-tr from-fuchsia-500 to-cyan-400"></div>
                    <div>
                        <div class="text-sm font-semibold">A happy developer</div>
                        <div class="text-xs text-slate-400">Built in one evening</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Contact -->
    <section id="contact" class="py-14 md:py-20">
        <div class="mx-auto max-w-5xl px-4 md:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <div
                    class="rounded-2xl border border-white/10 bg-gradient-to-br from-slate-900 to-slate-800 p-8 md:p-10">
                    <h3 class="text-2xl font-bold">Ready to ship something beautiful?</h3>
                    <p class="mt-3 text-slate-300">Drop a line and let’s turn ideas into polished, performant
                        interfaces.</p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="mailto:hello@example.com"
                            class="rounded-md bg-gradient-to-r from-fuchsia-500 to-cyan-400 px-5 py-2.5 font-medium text-slate-900 shadow-sm hover:opacity-90 transition">Email
                            me</a>
                        <a href="#work"
                            class="rounded-md border border-white/10 bg-white/5 px-5 py-2.5 font-medium hover:bg-white/10 transition">See
                            more work</a>
                    </div>
                </div>

                <form class="rounded-2xl border border-white/10 bg-white/5 p-6 md:p-8 backdrop-blur space-y-4">
                    <div>
                        <label for="name" class="text-sm text-slate-300">Name</label>
                        <input id="name" type="text" placeholder="Your name"
                            class="mt-1 w-full rounded-md border border-white/10 bg-slate-900/70 px-3 py-2 text-sm placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-fuchsia-500/40" />
                    </div>
                    <div>
                        <label for="email" class="text-sm text-slate-300">Email</label>
                        <input id="email" type="email" placeholder="you@example.com"
                            class="mt-1 w-full rounded-md border border-white/10 bg-slate-900/70 px-3 py-2 text-sm placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-fuchsia-500/40" />
                    </div>
                    <div>
                        <label for="msg" class="text-sm text-slate-300">Message</label>
                        <textarea id="msg" rows="4" placeholder="Tell me about your project..."
                            class="mt-1 w-full rounded-md border border-white/10 bg-slate-900/70 px-3 py-2 text-sm placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-fuchsia-500/40"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full rounded-md bg-gradient-to-r from-fuchsia-500 to-cyan-400 px-4 py-2.5 font-semibold text-slate-900 hover:opacity-90 transition">Send</button>
                    <p class="text-xs text-slate-400">By sending, you agree to be contacted about your inquiry.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/10 py-8">
        <div class="mx-auto max-w-7xl px-4 md:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-slate-400">© <span id="year"></span> Marvello. Crafted in East Java.</p>
            <div class="flex items-center gap-4 text-sm">
                <a href="#" class="text-slate-400 hover:text-white">Privacy</a>
                <span class="text-slate-600">•</span>
                <a href="#" class="text-slate-400 hover:text-white">Terms</a>
                <span class="text-slate-600">•</span>
                <a href="#contact" class="text-slate-400 hover:text-white">Contact</a>
            </div>
        </div>
        <script>
            document.getElementById('year').textContent = new Date().getFullYear();
        </script>
    </footer>
</body>

</html>
