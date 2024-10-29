<section x-data="{
    x: 0,
    y: 0,
    elements: []
}" x-init="elements = [...$el.querySelectorAll('.parallax')]"
    @mousemove="
        x = $event.clientX - window.innerWidth / 2;
        y = $event.clientY - window.innerHeight / 2;
        
        elements.forEach((el, index) => {
            let speedx = el.dataset.speedx;
            let speedy = el.dataset.speedy;
            {{-- $el.style.backgroundPosition = \`\${x}% \${y}%\`; --}}
            el.style.transform = `translateX(calc(-50% + ${-x * speedx}px)) translateY(calc(-50% + ${-y * speedy}px))`;
        });
    "
    class="relative flex flex-col h-screen w-full overflow-hidden">

    <span data-speedx='0.07' data-speedy='0.07'
        class="duration-300 ease-[cubic-bezier(0.2,0.49,0.32,0.99)] top-[50%] left-[50%] parallax absolute bg-cover bg-fixed bg-center size-[110%] -translate-y-1/2 -translate-x-1/2"
        style='background-image: url("{{ asset('/img/7.2.png') }}")'>
    </span>

    <span data-speedx='0.04' data-speedy='0.04'
        class="duration-300 ease-[cubic-bezier(0.2,0.49,0.32,0.99)] top-[50%] left-[50%] parallax absolute bg-cover bg-fixed bg-center size-[110%] -translate-y-1/2 -translate-x-1/2
            after:size-full
            after:absolute
            after:bg-black/50"
        style='background-image: url("{{ asset('/img/7.1.png') }}")'>
    </span>
    <div class='mx-auto max-w-7xl px-10 md:px-20 h-full w-full flex flex-col justify-center text-white'>
        <div class='relative'>
            <div class='text-left grid gap-y-5 max-w-xl'>
                <h1 class='font-black text-7xl text-amber-400'>
                    Hi, I'm Clyb.
                </h1>
                <p class='text-lg' data-aos="fade-right" data-aos-duration="800" data-aos-delay='500'
                    data-aos-easing="ease-in-out">
                    I'm a web developer.
                </p>
                <div class='grid grid-cols-2 gap-x-5 text-center'>
                    <a href="#"
                        class='transition-all duration-500 hover:bg-amber-400 hover:text-white rounded-lg ring-1 ring-amber-400 text-amber-400 w-full px-5 py-2 ring-inset'>PROJECTS</a>
                    <a href="#"
                        class='transition-all duration-500 hover:bg-amber-400 hover:text-white rounded-lg ring-1 ring-amber-400 text-amber-400 w-full px-5 py-2 ring-inset'>CONTACT
                        ME</a>
                </div>
            </div>
        </div>
    </div>
    <div class='absolute bottom-0 h-20 w-full bg-gradient-to-t from-neutral-900 to-transparent'></div>
</section>
