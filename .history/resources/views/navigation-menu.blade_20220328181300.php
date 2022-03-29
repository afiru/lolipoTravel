<div class="pc_only pcheader bg-white">
    <div class="max-w-screen-2xl px-1 md:px-1 mx-auto">
        <header class="flex justify-between items-center py-2 md:py-2">
            <a lass="inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5" aria-label="logo" href="{{ route('dashboard') }}">
                <img class="w-5/5" loading="lazy" src="/img/logo.svg" alt="行き先決定アプリ【どこいこ】" width="120" height="22" />
            </a>
            <nav class="lg:flex gap-12">
                <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">Top</a>
                <a href="#" class="inline-flex items-center text-indigo-500 text-lg font-semibold gap-1">AddPlace</a>
                <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">AddPlace</a>
            </nav>
            <div class="lg:flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-2.5 -ml-8">
                <a href="#" class="inline-block focus-visible:ring ring-indigo-300 text-gray-500 hover:text-indigo-500 active:text-indigo-600 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-2 py-2">About</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 ml-3 px-2 py-2">LogOut</button>
                </form>
              </div>
        </header>
    </div>
</div>
