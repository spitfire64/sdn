<!DOCTYPE html>
<html lang="sv" class="scroll-smooth">
    <head>
        @include('partials.head', ['title' => 'Solid Digital Nordic AB'])
    </head>
    <body class="min-h-screen bg-stone-100 text-stone-800 antialiased dark:bg-stone-950 dark:text-stone-100">
        <flux:header container class="fixed inset-x-0 top-0 z-50 !h-14 !bg-sky-950/80 !border-transparent backdrop-blur-md dark:!bg-stone-950/80">
            <flux:brand
                :href="route('home')"
                logo="/images/sdn_96_dpi.png"
                alt="Solid Digital Nordic AB"
            />

            <flux:navbar class="-mb-px max-lg:hidden">
                <flux:navbar.item href="#tjanster" class="!text-sky-100 hover:!text-white">Tjänster</flux:navbar.item>
                <flux:navbar.item href="#arbetssatt" class="!text-sky-100 hover:!text-white">Arbetssätt</flux:navbar.item>
                <flux:navbar.item href="#referenser" class="!text-sky-100 hover:!text-white">Referenser</flux:navbar.item>
                <flux:navbar.item href="#kontakt" class="!text-sky-100 hover:!text-white">Kontakt</flux:navbar.item>
            </flux:navbar>

            <flux:spacer />

            <flux:navbar class="items-center gap-2">
                <flux:dropdown x-data align="end">
                    <flux:button
                        variant="subtle"
                        square
                        class="!bg-white/10 !text-white hover:!bg-white/20"
                        aria-label="Välj ljust eller mörkt läge"
                    >
                        <flux:icon.sun x-show="$flux.appearance === 'light'" variant="mini" />
                        <flux:icon.moon x-show="$flux.appearance === 'dark'" variant="mini" />
                        <flux:icon.moon x-show="$flux.appearance === 'system' && $flux.dark" variant="mini" />
                        <flux:icon.sun x-show="$flux.appearance === 'system' && ! $flux.dark" variant="mini" />
                    </flux:button>

                    <flux:menu>
                        <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Ljust</flux:menu.item>
                        <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Mörkt</flux:menu.item>
                        <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">System</flux:menu.item>
                    </flux:menu>
                </flux:dropdown>

                <flux:dropdown class="lg:hidden">
                    <flux:button variant="subtle" square class="!bg-white/10 !text-white hover:!bg-white/20" aria-label="Meny">
                        <flux:icon.bars-2 variant="mini" />
                    </flux:button>

                    <flux:menu>
                        <flux:menu.item href="#tjanster">Tjänster</flux:menu.item>
                        <flux:menu.item href="#arbetssatt">Arbetssätt</flux:menu.item>
                        <flux:menu.item href="#referenser">Referenser</flux:menu.item>
                        <flux:menu.item href="#kontakt">Kontakt</flux:menu.item>
                        <flux:menu.separator />
                        @auth
                            <flux:menu.item :href="route('dashboard')" icon="home">Dashboard</flux:menu.item>
                        @else
                            <flux:menu.item :href="route('login')" icon="arrow-right-end-on-rectangle">Logga in</flux:menu.item>
                        @endauth
                    </flux:menu>
                </flux:dropdown>

                @auth
                    <flux:button :href="route('dashboard')" variant="primary" class="max-lg:hidden !bg-sky-700 hover:!bg-sky-600">
                        Dashboard
                    </flux:button>
                @else
                    <flux:button :href="route('login')" variant="ghost" class="max-lg:hidden !text-white hover:!bg-white/10">
                        Logga in
                    </flux:button>
                @endauth
            </flux:navbar>
        </flux:header>

        <main>
            <section class="relative flex min-h-dvh items-end overflow-hidden bg-sky-950 text-white sm:items-center">
                <div class="absolute inset-0 bg-linear-to-br from-sky-950 via-sky-900 to-sky-800"></div>
                <div class="landing-grid landing-fade absolute inset-0 opacity-70"></div>
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(56,189,248,0.18),transparent_55%)]"></div>
                <div class="absolute inset-x-0 bottom-0 h-40 bg-linear-to-t from-stone-100 to-transparent dark:from-stone-950"></div>

                <div class="relative z-10 mx-auto flex w-full max-w-6xl flex-col gap-10 px-6 pb-24 pt-28 sm:gap-12 sm:pb-28 sm:pt-24 lg:px-8">
                    <div class="max-w-3xl">
                        <img
                            src="/images/logo600.png"
                            alt="<<solid-digital.se>>"
                            class="landing-rise h-14 w-auto sm:h-20 lg:h-24"
                        >

                        <flux:heading
                            size="2xl"
                            level="1"
                            class="landing-rise landing-rise-delay-1 mt-8 !font-display !text-4xl !font-semibold !tracking-tight !text-white sm:!text-5xl lg:!text-6xl"
                        >
                            Snabbt och kostnadseffektivt.
                        </flux:heading>

                        <flux:text class="landing-rise landing-rise-delay-2 mt-5 max-w-xl !text-lg !text-sky-100/90 sm:!text-xl">
                            Vi hjälper företag och organisationer att skapa, hosta och vidareutveckla sin digitala närvaro — på svensk server.
                        </flux:text>

                        <div class="landing-rise landing-rise-delay-3 mt-8 flex flex-wrap items-center gap-3">
                            <flux:button href="mailto:hej@solid-digital.se" variant="primary" icon="envelope" class="!bg-white !text-sky-900 hover:!bg-sky-50">
                                Hör av er
                            </flux:button>
                            <flux:button href="#referenser" variant="ghost" icon:trailing="arrow-down" class="!text-white hover:!bg-white/10">
                                Se referenser
                            </flux:button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tjanster" class="mx-auto max-w-6xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="max-w-2xl">
                    <flux:badge color="sky" size="sm" class="mb-4">Vad vi gör</flux:badge>

                    <flux:heading size="xl" level="2" class="!font-display !text-3xl !tracking-tight text-stone-900 sm:!text-4xl dark:text-stone-50">
                        Från första skiss till långsiktig förvaltning
                    </flux:heading>

                    <flux:text class="mt-4 !text-lg text-stone-600 dark:text-stone-300">
                        Vi bygger hemsidor, hostar dem i Sverige och finns kvar när ni vill förändra, växa eller tänka om.
                    </flux:text>
                </div>

                <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <flux:card class="!bg-white/80 !border-stone-200 dark:!bg-stone-900/60 dark:!border-stone-800">
                        <flux:icon.sparkles class="size-6 text-sky-800 dark:text-sky-400" />
                        <flux:heading size="lg" class="mt-4 !font-display !text-sky-800 dark:!text-sky-400">Skapa</flux:heading>
                        <flux:text class="mt-3">
                            Allt från enkla hemsidor till komplexa, databasdrivna och flerspråkiga företagslösningar.
                        </flux:text>
                    </flux:card>

                    <flux:card class="!bg-white/80 !border-stone-200 dark:!bg-stone-900/60 dark:!border-stone-800">
                        <flux:icon.server-stack class="size-6 text-sky-800 dark:text-sky-400" />
                        <flux:heading size="lg" class="mt-4 !font-display !text-sky-800 dark:!text-sky-400">Hosta</flux:heading>
                        <flux:text class="mt-3">
                            Drift på svensk server — stabilt, nära er verksamhet och med tydligt ansvar.
                        </flux:text>
                    </flux:card>

                    <flux:card class="!bg-white/80 !border-stone-200 dark:!bg-stone-900/60 dark:!border-stone-800 sm:col-span-2 lg:col-span-1">
                        <flux:icon.arrow-path class="size-6 text-sky-800 dark:text-sky-400" />
                        <flux:heading size="lg" class="mt-4 !font-display !text-sky-800 dark:!text-sky-400">Utveckla vidare</flux:heading>
                        <flux:text class="mt-3">
                            Vi hjälper till med framtida ändringar så att sidan fortsätter spegla hur ni arbetar.
                        </flux:text>
                    </flux:card>
                </div>
            </section>

            <section id="arbetssatt" class="border-y border-stone-200/80 bg-white/70 dark:border-stone-800 dark:bg-stone-900/40">
                <div class="mx-auto grid max-w-6xl gap-12 px-6 py-20 lg:grid-cols-2 lg:items-start lg:gap-20 lg:px-8 lg:py-28">
                    <div>
                        <flux:badge color="sky" size="sm" class="mb-4">Så arbetar vi</flux:badge>

                        <flux:heading size="xl" level="2" class="!font-display !text-3xl !tracking-tight text-stone-900 sm:!text-4xl dark:text-stone-50">
                            Bollplank med erfarenhet — och verktyg ni själva äger
                        </flux:heading>

                        <flux:callout color="sky" icon="light-bulb" class="mt-8">
                            <flux:callout.heading>Ni styr innehållet</flux:callout.heading>
                            <flux:callout.text>
                                Logga in själva och lägg till innehåll när ni vill. Vi bygger strukturen — ni äger budskapet.
                            </flux:callout.text>
                        </flux:callout>
                    </div>

                    <flux:timeline>
                        <flux:timeline.item>
                            <flux:timeline.indicator color="sky">
                                <flux:icon.chat-bubble-left-right variant="micro" />
                            </flux:timeline.indicator>
                            <flux:timeline.content>
                                <flux:heading size="lg" class="!font-display">Bollplank</flux:heading>
                                <flux:text class="mt-2">
                                    Lång erfarenhet av att utveckla företag — vi hjälper er tänka igenom idé, struktur och teknik.
                                </flux:text>
                            </flux:timeline.content>
                        </flux:timeline.item>

                        <flux:timeline.item>
                            <flux:timeline.indicator color="sky">
                                <flux:icon.code-bracket variant="micro" />
                            </flux:timeline.indicator>
                            <flux:timeline.content>
                                <flux:heading size="lg" class="!font-display">Återanvänd kod</flux:heading>
                                <flux:text class="mt-2">
                                    Vi återanvänder beprövad kod och använder AI för att effektivisera arbetet maximalt.
                                </flux:text>
                            </flux:timeline.content>
                        </flux:timeline.item>

                        <flux:timeline.item>
                            <flux:timeline.indicator color="sky">
                                <flux:icon.globe-alt variant="micro" />
                            </flux:timeline.indicator>
                            <flux:timeline.content>
                                <flux:heading size="lg" class="!font-display">Enkelt till komplext</flux:heading>
                                <flux:text class="mt-2">
                                    Från enkla hemsidor till databasdrivna, flerspråkiga företagslösningar.
                                </flux:text>
                            </flux:timeline.content>
                        </flux:timeline.item>
                    </flux:timeline>
                </div>
            </section>

            <section id="referenser" class="mx-auto max-w-6xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="max-w-2xl">
                    <flux:badge color="sky" size="sm" class="mb-4">Referenser</flux:badge>

                    <flux:heading size="xl" level="2" class="!font-display !text-3xl !tracking-tight text-stone-900 sm:!text-4xl dark:text-stone-50">
                        Ett urval av det vi byggt
                    </flux:heading>
                </div>

                <div class="mt-12 grid gap-4 sm:grid-cols-2">
                    @foreach ([
                        [
                            'label' => 'createfood.online',
                            'url' => 'https://createfood.online/welcome/lang/swedish',
                            'image' => 'createfood.png',
                            'description' => 'Program för livsmedelsindustrin. Innehåller flera ovärderliga moduler',
                        ],
                        [
                            'label' => 'mylostitem.com',
                            'url' => 'https://mylostitem.com/sv',
                            'image' => 'mylostitem.png',
                            'description' => 'Program som ger användarnas nycklar en digital väg hem',
                        ],
                        [
                            'label' => 'struktus.se',
                            'url' => 'https://struktus.se/language/sv',
                            'image' => 'struktus-sv.png',
                            'description' => 'Program som hjälper företag bli effektivare i vardagen',
                        ],
                        [
                            'label' => 'odinlist.com',
                            'url' => 'https://odinlist.com/sv',
                            'image' => 'odinlist-sv.png',
                            'description' => 'Program som låter familjer dela på listor: Inköp, Anteckningar, Att-göra',
                        ],
                    ] as $reference)
                        <a href="{{ $reference['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $reference['label'] }}" class="group">
                            <flux:card size="sm" class="h-full overflow-hidden !p-0 !bg-white/80 !border-stone-200 transition hover:!border-sky-300 dark:!bg-stone-900/60 dark:!border-stone-800 dark:hover:!border-sky-700">
                                <div class="aspect-video overflow-hidden bg-stone-200 dark:bg-stone-800">
                                    <img
                                        src="/images/references/{{ $reference['image'] }}"
                                        alt="Skärmbild av {{ $reference['label'] }}"
                                        class="size-full object-cover object-top transition duration-500 group-hover:scale-[1.03]"
                                        loading="lazy"
                                    >
                                </div>
                                <div class="p-4">
                                    <flux:heading class="flex items-center gap-2 !font-display !text-xl">
                                        {{ $reference['label'] }}
                                        <flux:icon name="arrow-up-right" class="ms-auto shrink-0 text-stone-400 transition group-hover:text-sky-800 dark:group-hover:text-sky-400" variant="micro" />
                                    </flux:heading>
                                    <flux:text class="mt-1" variant="subtle">{{ $reference['description'] }}</flux:text>
                                </div>
                            </flux:card>
                        </a>
                    @endforeach
                </div>
            </section>

            <section id="kontakt" class="bg-sky-800 text-white">
                <div class="mx-auto flex max-w-6xl flex-col gap-8 px-6 py-20 sm:flex-row sm:items-end sm:justify-between lg:px-8 lg:py-24">
                    <div class="max-w-2xl">
                        <flux:heading size="xl" level="2" class="!font-display !text-3xl !tracking-tight !text-white sm:!text-4xl">
                            Hör av er med era idéer
                        </flux:heading>
                        <flux:text class="mt-4 !text-lg !text-sky-100">
                            Berätta vad ni vill bygga — vi tar det vidare tillsammans.
                        </flux:text>
                    </div>

                    <flux:button
                        href="mailto:hej@solid-digital.se"
                        variant="primary"
                        icon="envelope"
                        class="!bg-white !text-sky-900 hover:!bg-sky-50"
                    >
                        hej@solid-digital.se
                    </flux:button>
                </div>
            </section>
        </main>

        <footer class="border-t border-stone-200 bg-stone-100 dark:border-stone-800 dark:bg-stone-950">
            <div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 py-8 sm:flex-row sm:items-center sm:justify-between lg:px-8">
                <flux:text variant="subtle" class="!text-sm">
                    &copy; {{ date('Y') }} Solid Digital Nordic AB
                </flux:text>
                <flux:link href="https://solid-digital.se" class="!text-sm !text-sky-800 dark:!text-sky-400">
                    solid-digital.se
                </flux:link>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
