<x-layouts.main-layout>
    <x-slot:title>Login</x-slot:title>

    <x-slot:content>

        <div class="w-3/10 bg-zinc-600 tracking-wide rounded-sm max-h-[50vh] h-[500px] shadow-xl">
            <form action="{{ route('auth') }}" method="post" class="w-9/10 h-full mx-auto flex flex-col justify-between">
                @csrf

                <legend class="text-white text-4xl italic font-normal pt-[2rem]">Login</legend>

                <div class="flex flex-col justify-center gap-10 w-8/10">
                    <div class="flex flex-col gap-2">
                        <label for="username" class="text-2xl italic text-white font-light">Usuário</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-zinc-800 border rounded-e-0 border-zinc-900/80 border-e-0 rounded-s-md dark:bg-zinc-800 dark:text-gray-400 dark:border-zinc-900/80">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                </svg>
                            </span>
                            <input type="text" id="username" name="username" class="rounded-none outline-none rounded-e-lg border text-gray-900 focus:border-zinc-300 block flex-1 min-w-0 w-full text-sm border-zinc-900/80 p-2.5 bg-zinc-800 dark:border-zinc-900/80 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-400 dark:focus:border-zinc-400 transition-colors transition-50 transition-150" placeholder="Digite seu usuário" autocomplete="off">
                        </div>
                    </div>


                    <div class="flex flex-col gap-2">
                        <label for="password" class="text-2xl italic text-white font-light">Senha</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-zinc-800 border rounded-e-0 border-zinc-900/80 border-e-0 rounded-s-md dark:bg-zinc-800 dark:text-gray-400 dark:border-zinc-900/80">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 w-4 h-4 text-gray-500 dark:text-gray-400">
                                    <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 0 0-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 0 0-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 0 0 .75-.75v-1.5h1.5A.75.75 0 0 0 9 19.5V18h1.5a.75.75 0 0 0 .53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1 0 15.75 1.5Zm0 3a.75.75 0 0 0 0 1.5A2.25 2.25 0 0 1 18 8.25a.75.75 0 0 0 1.5 0 3.75 3.75 0 0 0-3.75-3.75Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input type="password" id="password" name="password" class="rounded-none rounded-e-lg outline-none border text-gray-900  focus:border-zinc-300 block flex-1 min-w-0 w-full text-sm border-zinc-900/80 p-2.5 bg-zinc-800 dark:border-zinc-900/80 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-400 dark:focus:border-zinc-400 transition-colors transition-50 transition-150" placeholder="Digite sua senha" autocomplete="off">
                        </div>
                    </div>

                </div>

                <button type="submit" class="mb-[2rem] mr-auto bg-green-500 text-white text-xl py-2 px-[1rem] rounded-sm font-bold cursor-pointer hover:bg-green-600 hover:px-[1.1rem] hover:tracking-wide transition-all transition-200 transition-ease ">Entrar</button>
            </form>
        </div>

    </x-slot:content>
</x-layouts.main-layout>