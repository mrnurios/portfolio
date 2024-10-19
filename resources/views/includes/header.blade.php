<header class="z-10 mx-auto top-0 fixed w-full bg-gray-900/80 px-20 h-20 flex items-center gap-2 py-5 text-white">
    <div class="flex justify-start w-40">
        Logo
    </div>
    <nav class="-mx-3 flex flex-1 justify-end">
        <a href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 transition text-brand"
        >
            About
        </a>
        <a href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 transition text-brand"
        >
            Blog
        </a>
        <a href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 transition text-brand"
        >
            Contact
        </a>
    </nav>
    <a href="{{ url('/dashboard') }}"
        class="ring-2 ring-pink-500 ring-inset rounded-md px-3 py-2 transition text-brand w-fit"
    >
        Contact Me
    </a>
</header>