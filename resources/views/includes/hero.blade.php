<section 
    class="-z-20 relative flex flex-col h-screen w-full bg-fixed bg-center bg-cover" 
    style="background-image: url('{{ asset('img/hero.jpg') }}');">
    <div class='h-full flex flex-col items-center justify-center text-white'>
        <div class='bg-center bg-cover relative rounded-full size-52 bg-slate-900
                before:absolute
                before:size-52
                before:bg-slate-900
                before:rounded-full
                before:-inset-5
                before:-z-10
                after:absolute 
                after:size-52
                after:bg-slate-900
                after:rounded-full
                after:inset-5
                after:-z-10
                '
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
    <div class='absolute bottom-0 h-40 w-full bg-gradient-to-t from-slate-800 to-transparent'></div>
</section>