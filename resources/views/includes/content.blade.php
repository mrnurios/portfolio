<main class='relative bg-neutral-900 w-full h-full flex flex-col text-white md:py-20 md:gap-y-10 overflow-clip'>
    <section {{-- x-data="{ scrollPosition: 0, midpoint: 0 }" x-init="midpoint = window.innerHeight / 2" x-on:scroll.window="scrollPosition = window.scrollY" --}} class='relative h-full w-full p-10 md:px-20 md:p-10'>
        <div class='max-w-7xl mx-auto flex flex-col md:flex-row h-full w-full gap-5 md:gap-10'>
            <div {{-- :style="{ transform: `translateX(${Math.min(scrollPosition * 0.7 - midpoint, 0)}px)` }" --}}
                class='border-8 border-neutral-800 bg-neutral-800 rounded-lg h-72 md:h-[500px] w-72 md:w-96 overflow-clip mx-auto drop-shadow-xl group'>
                <div class='size-full rounded-lg bg-center bg-cover bg-no-repeat overflow-clip'
                    style='background-image:url("{{ asset('img/8.jpg') }}")'>
                    <div class='relative rounded-lg size-full grid place-items-center'>
                        <div
                            class='absolute rounded-full bg-amber-400 transition-all ease-in-out duration-500 size-[700px] scale-0 group-hover:scale-100'>
                        </div>
                        <div class='absolute rounded-full bg-red-400 transition-all duration-500 delay-200 scale-50 md:scale-100
                                size-0 group-hover:size-[700px]
                                bg-no-repeat
                                bg-[length:500px_500px]
                                bg-center'
                            style='background-image:url("{{ asset('img/dp.jpg') }}")'>
                        </div>
                    </div>
                </div>
            </div>
            <div {{-- :style="{ transform: `translateX(${Math.max(-scrollPosition * 0.6 + midpoint, 0)}px)` }" --}}
                class='flex flex-col justify-center w-full md:w-3/5 self-stretch relative gap-y-7'>
                <div>
                    <h1 class='text-2xl font-bold'><span
                            class='decoration-amber-400 underline underline-offset-8'>Abo</span>ut Me
                    </h1>
                </div>
                <p class="font-thin text-justify leading-8">
                    My name is <span class='font-black'>Clyb Abraham Bongcayao</span>. I'm a Freelance TALL Stack
                    Developer based in Philippines. A graduate with a Bachelor of Science in Information Technology from
                    Mindanao State University - Iligan Institute of Technology. I specialize in hardware and software
                    troubleshooting and enjoy solving technical challenges. </p>
                <div
                    class='overflow-clip grid md:grid-flow-col md:grid-rows-2 md:grid-cols-2 items-center size-full h-fit gap-y-4 border-2 rounded border-amber-400 p-5 text-sm tracking-wide'>
                    <h1 data-aos-anchor-placement="bottom-bottom" data-aos="fade-right" data-aos-delay='100'
                        class=''><span class='font-semibold'>Name:
                        </span>Clyb Abraham
                        Bongcayao</h1>
                    <h1 data-aos-anchor-placement="bottom-bottom" data-aos="fade-right" data-aos-delay='0'
                        class=''><span class='font-semibold'>Phone:
                        </span>+639512577048
                    </h1>
                    <h1 data-aos-anchor-placement="bottom-bottom" data-aos="fade-right" data-aos-delay='300'
                        class=''><span class='font-semibold'>Email:
                        </span>cabongcayao@gmail.com
                    </h1>
                    {{-- <h1 class=''><span class='font-semibold'>Facebook: </span>Clyb Abraham Bongcayao</h1> --}}
                    <h1 data-aos-anchor-placement="bottom-bottom" data-aos="fade-right" data-aos-delay='100'
                        class=''><span class='font-semibold'>Address:
                        </span>Lugait, Misamis
                        Oriental</h1>
                </div>
                <a data-aos="fade-left" data-aos-anchor-placement="center-bottom" href='{{ asset('docs/resume.pdf') }}'
                    download="resume.pdf"
                    class='font-semibold bg-amber-400 px-4 py-3 rounded-lg w-fit text-sm transition-all duration-300 focus:scale-110 md:hover:scale-110'>
                    DOWNLOAD RESUME
                </a>
            </div>
        </div>

    </section>
    <section x-data="{ scrollPosition: 0, midpoint: 0 }" x-init="midpoint = window.innerHeight / 2" x-on:scroll.window="scrollPosition = window.scrollY"
        class='relative h-full w-full p-10 md:px-20 md:p-10 bg-neutral-800'>
        <div
            class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]">
        </div>
        <div class='max-w-7xl mx-auto flex flex-col h-full w-full gap-10'>
            <div class='mx-auto md:mx-0'>
                <h1 class='text-2xl font-bold'>
                    <span class='decoration-amber-400 underline underline-offset-8'>
                        My
                    </span>Skills
                </h1>
            </div>
            <div class='flex flex-col size-fit self-center gap-y-2 items-center'>
                <div class='grid grid-cols-4 gap-2 place-items-center'>
                    <a href="https://tailwindcss.com/"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" data-aos='fade-right' data-aos-duration='1000'
                        class='relative grid place-items-center size-full overflow-clip bg-neutral-900/40 rounded-lg glow p-5 md:p-10
                            before:hover:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-lg
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-28' src='{{ asset('svg/tailwind.svg') }}'>
                    </a>
                    <a href="https://jquery.com/"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" data-aos='fade-down-right'
                        class='relative grid place-items-center size-full overflow-clip bg-neutral-900/40 rounded-lg glow p-5 md:p-10
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-lg
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-28' src='{{ asset('svg/jquery.svg') }}'>
                    </a>
                    <a href="https://laravel.com/"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" data-aos='fade-down-left' data-aos-duration='1000'
                        class='relative grid place-items-center size-full overflow-clip bg-neutral-900/40 rounded-lg glow p-5 md:p-10
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-lg
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-28' src='{{ asset('svg/laravel.svg') }}'>
                    </a>
                    <a href="https://alpinejs.dev/"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" data-aos='fade-left'
                        class='relative grid place-items-center size-full overflow-clip bg-neutral-900/40 rounded-lg glow p-5 md:p-10
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-lg
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-28' src='{{ asset('svg/alpinejs.svg') }}'>
                    </a>
                </div>
                <div class='grid grid-cols-3 lg:grid-cols-3 gap-2 place-items-center'>
                    <a href="https://tailwindcss.com/"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" data-aos='fade-up-right' data-aos-duration='1000'
                        class='relative grid place-items-center size-full overflow-clip bg-neutral-900/40 rounded-lg glow p-7 md:p-10
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-lg
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-28' src='{{ asset('svg/html.svg') }}'>
                    </a>
                    <a href="#"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" data-aos='fade-up'
                        class='relative grid place-items-center size-full overflow-clip bg-neutral-900/40 rounded-lg glow p-7 md:p-10
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-lg
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-28' src='{{ asset('svg/css3.svg') }}'>
                    </a>
                    <a href="#"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" data-aos='fade-up-left' data-aos-duration='800'
                        data-aos-anchor-placement="center-bottom"
                        class='relative grid place-items-center size-full overflow-clip bg-neutral-900/40 rounded-lg glow p-7 md:p-10
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-lg
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-28' src='{{ asset('svg/javascript.svg') }}'>
                    </a>
                </div>
                <div :style="{ transform: `translateX(${Math.max(-scrollPosition * 0.6 + midpoint, 0)}px)` }"
                    class='grid grid-flow-col gap-2 place-items-center'>
                    <a href="https://www.python.org/"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" {{-- data-aos='fade-up-right' data-aos-duration='1000' --}}
                        class='relative flex place-items-center size-20 overflow-clip bg-neutral-900/40 rounded-full glow p-5
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-full
                            after:inset-[2px]
                        '>
                        <img class='relative z-10 w-fit' src='{{ asset('svg/python.svg') }}'>
                    </a>
                    <a href="https://www.python.org/"
                        x-data='{ size:100, x: 0, y: 0, width: $el.getBoundingClientRect().width, height: $el.getBoundingClientRect().height}'
                        @mousemove="
                            const rect = $el.getBoundingClientRect();
                            x = $event.clientX - rect.left;
                            y = $event.clientY - rect.top;
                            $el.style.setProperty('--x', `${x-(size/2)}px`); 
                            $el.style.setProperty('--y', `${y-(size/2)}px`);"
                        style="--size:100px;" {{-- data-aos='fade-up-right' data-aos-duration='1000' --}}
                        class='relative flex place-items-center size-20 overflow-clip bg-neutral-900/40 rounded-full glow p-5
                            hover:before:animate-pulse
                            before:absolute
                            before:bg-white
                            before:blur-2xl
                            before:rounded-full
                            before:transition-opacity
                            before:duration-1000
                            before:opacity-0
                            hover:before:opacity-100
                            after:absolute
                            after:bg-neutral-900/50
                            after:rounded-full
                            after:inset-[2px]
                        '>
                        <img class='relative w-fit z-10' src='{{ asset('svg/java.svg') }}'>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class='relative h-screen w-full p-10 md:px-20 md:p-10'>
        <div class='max-w-7xl mx-auto flex flex-col h-full w-full gap-10'>
            <div class='mx-auto md:mx-0'>
                <h1 class='text-2xl font-bold'>
                    <span class='decoration-amber-400 underline underline-offset-8'>
                        My
                    </span>Projects
                </h1>
            </div>
        </div>
    </section>
</main>
