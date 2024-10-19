<section 
    class="relative flex flex-col h-screen w-full bg-fixed bg-center bg-cover" 
    style="background-image: url('{{ asset('img/hero.jpg') }}');">
    <div class='h-full flex flex-col justify-center text-white'>
        <div class='relative mx-auto group'>
            <div class='transition-all inset-0 opacity-0 absolute group-hover:opacity-100 size-52 group-hover:-inset-5 rounded-full bg-slate-900'>

            </div>
            <div class='transition-all inset-0 opacity-0 absolute group-hover:opacity-100 size-52 group-hover:inset-5 rounded-full bg-slate-900'>

            </div>
            <div class='bg-center bg-cover relative rounded-full size-52 bg-slate-900'
                style="background-image: url('{{ asset('img/dp.jpg') }}');">
            </div>
            <div class='text-center grid gap-y-5'>
                <h1 class='font-black text-8xl'>
                    Clyb
                </h1>
                <p class='text-lg'>
                    A Fullstack Developer
                </p>
            </div>
        </div>
    </div>
    <div class='absolute bottom-0 h-40 w-full bg-gradient-to-t from-slate-800 to-transparent'></div>
</section>