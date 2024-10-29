<header
    x-bind:style="{
        backgroundColor: scrollY > (window.innerHeight - (window.innerHeight / 4)) ? 'rgba(251, 191, 36, 0.8)' :
            'rgba(251, 191, 36, 0)'
    }"
    class="transition-all duration-500 z-10 mx-auto top-0 fixed w-full px-20 h-14 flex items-center gap-2 py-5 text-white bg-amber-400/0">
    <div class="flex justify-start w-40">
        Logo
    </div>
    <nav class="flex flex-1 justify-end items-center">
        <a href="#" class="rounded-md px-3 transition text-brand">
            About
        </a>
        <a href="#" class="bg-neutral-900 rounded-md px-3 py-1 transition text-brand text-center">
            Contact Me
        </a>
    </nav>
</header>
