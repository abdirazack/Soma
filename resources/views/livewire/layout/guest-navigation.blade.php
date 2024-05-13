<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="max-w-4xl mx-auto sticky top-0 pt-12 hover:shadow-md">
    <div class="rounded-2xl bg-white/[3%] py-2 pl-2.5 pr-6 shadow-surface-glass backdrop-blur">
        <div class="flex items-center justify-between">
            <a title="Navigate home" class="rounded-full focus:outline-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-rose-500/70" href="/">
                <i class="text-stone-500/90 text-2xl fas fa-home"></i>
                <span class="text-2xl text-yellow-50">soma</span>
            </a>
            <div class="flex items-center space-x-3 text-base font-medium leading-none text-rose-100/90 lg:space-x-6">
                <a class="group focus:outline-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-rose-500/70" href="/videos">
                    <div class="sm:flex sm:items-center sm:space-x-2">
                        <div class="mb-1.5 flex justify-center sm:mb-0 sm:block">
                            <div class="rounded-lg bg-gradient-to-tl from-purple-500/80 to-rose-400/80 p-1 shadow-lg transition-all duration-300 ease-out group-hover:scale-[1.2] group-hover:rounded-[10px] group-hover:shadow-purple-500/40 group-active:translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-[16px] transform text-rose-100 transition delay-100 duration-500 ease-out group-hover:scale-110">
                                    <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="transition-colors group-hover:text-rose-50">Videos</div>
                    </div>
                </a>
                <a class="group focus:outline-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-rose-500/70" href="/blog">
                    <div class="sm:flex sm:items-center sm:space-x-2">
                        <div class="mb-1.5 flex justify-center sm:mb-0 sm:block">
                            <div class="rounded-lg bg-gradient-to-tl from-purple-500/80 to-rose-400/80 p-1 shadow-lg transition-all duration-300 ease-out group-hover:scale-[1.2] group-hover:rounded-[10px] group-hover:shadow-purple-500/40 group-active:translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-[16px] transform text-rose-100 transition delay-100 duration-500 ease-out group-hover:scale-110">
                                    <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="transition-colors group-hover:text-rose-50">Blog</div>
                    </div>
                </a>
                <a class="group focus:outline-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-rose-500/70" href="https://youtube.com/delba">
                    <div class="sm:flex sm:items-center sm:space-x-2">
                        <div class="mb-1.5 flex justify-center sm:mb-0 sm:block">
                            <div class="rounded-lg bg-gradient-to-tl from-purple-500/80 to-rose-400/80 p-1 shadow-lg transition-all duration-300 ease-out group-hover:scale-[1.2] group-hover:rounded-[10px] group-hover:shadow-purple-500/40 group-active:translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] transform text-rose-100 transition delay-100 duration-500 ease-out group-hover:scale-110" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="transition-colors group-hover:text-rose-50">Youtube</div>
                    </div>
                </a>
                <a class="group focus:outline-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-rose-500/70" href="https://twitter.com/delba_oliveira">
                    <div class="sm:flex sm:items-center sm:space-x-2">
                        <div class="mb-1.5 flex justify-center sm:mb-0 sm:block">
                            <div class="rounded-lg bg-gradient-to-tl from-purple-500/80 to-rose-400/80 p-1 shadow-lg transition-all duration-300 ease-out group-hover:scale-[1.2] group-hover:rounded-[10px] group-hover:shadow-purple-500/40 group-active:translate-y-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[16px] transform text-rose-100 transition delay-100 duration-500 ease-out group-hover:scale-110" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="transition-colors group-hover:text-rose-50">Twitter</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
