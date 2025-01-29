<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>

<div class="bg-white">
    <div class="relative">
        <div class="mx-auto max-w-7xl">
            <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                     viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="0,0 90,0 50,100 0,100"/>
                </svg>

                <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                        {{--                        <div class="hidden sm:mb-10 sm:flex">--}}
                        {{--                            <div--}}
                        {{--                                class="relative rounded-full px-3 py-1 text-sm/6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">--}}
                        {{--                                Flutter wind plugin is ready to go! <a href="#"--}}
                        {{--                                                                       class="whitespace-nowrap font-semibold text-sky-600"><span--}}
                        {{--                                        class="absolute inset-0" aria-hidden="true"></span>Read more <span--}}
                        {{--                                        aria-hidden="true">&rarr;</span></a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <h1 class="text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                            Anılcan Çakır
                        </h1>
                        <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">I’m a software
                            developer with 10+ years of experience in building scalable and innovative solutions across
                            web and mobile platforms. With a strong background in software architecture and development,
                            I’ve worked on diverse projects, from SaaS to real-time communication systems. I also
                            explore AI technologies and contribute to open-source.</p>
                        <div class="mt-10 flex items-center gap-x-4">
                            <a href="mailto:anilcan.cakir@gmail.com"
                               class="rounded-md bg-sky-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
                                Let's Connect
                            </a>

                            <div class="flex justify-center items-center gap-4">
                                <a href="https://www.linkedin.com/in/anilcancakir/"
                                   class="text-gray-600 hover:text-gray-800">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="size-6" fill="currentColor" aria-hidden="true"
                                         viewBox="0 0 50 50">
                                        <path
                                            d="M41 4H9C6.24 4 4 6.24 4 9v32c0 2.76 2.24 5 5 5h32c2.76 0 5-2.24 5-5V9c0-2.76-2.24-5-5-5zM17 20v19h-6V20h6zm-6-5.53c0-1.4 1.2-2.47 3-2.47s2.93 1.07 3 2.47c0 1.4-1.12 2.53-3 2.53-1.8 0-3-1.13-3-2.53zM39 39h-6V29c0-2-1-4-3.5-4.04h-.08C27 24.96 26 27.02 26 29v10h-6V20h6v2.56S27.93 20 31.81 20c3.97 0 7.19 2.73 7.19 8.26V39z"/>
                                    </svg>
                                </a>
                                <a href="https://github.com/anilcancakir" class="text-gray-600 hover:text-gray-800">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </a>
                                <a href="https://medium.com/@anilcan" class="text-gray-600 hover:text-gray-800">
                                    <span class="sr-only">Medium</span>
                                    <svg class="size-6" fill="currentColor" aria-hidden="true"
                                         viewBox="0 0 50 50">
                                        <path
                                            d="M45 4H5a1 1 0 0 0-1 1v40a1 1 0 0 0 1 1h40a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-5 9.5-1.821 2.197a.603.603 0 0 0-.179.428V32.75c0 .16.064.314.179.428L40 35.546V36H30v-.454l2.821-2.368A.603.603 0 0 0 33 32.75V17.879L24.848 36H23.304L15 18.375v13.108c0 .22.076.433.215.605L18 35.546V36h-8v-.454l2.783-3.438A.964.964 0 0 0 13 31.5V16.388a.6.6 0 0 0-.142-.388L11 13.5V13h7.097l7.624 16.183L33.002 13H40v.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="aspect-[3/2] object-cover lg:aspect-auto lg:size-full"
                 src="{{ asset('images/personal_bg.jpg') }}"
                 alt="">
        </div>
    </div>
</div>

@vite('resources/js/app.js')
</body>
</html>
