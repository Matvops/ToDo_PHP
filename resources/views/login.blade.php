<x-layouts.main-layout>
    <x-slot:title>Login</x-slot:title>

    <x-slot:content>

        <div class="w-3/10 bg-zinc-600 tracking-wide rounded-sm max-h-[50vh] h-[500px] min-h[400px] shadow-xl">
            <form action="{{ route('auth') }}" method="post" class="w-9/10 h-full mx-auto flex flex-col justify-between">
                @csrf

                <legend class="text-white text-4xl italic font-normal pt-[2rem]">Login</legend>

                <div class="flex flex-col justify-center gap-10 w-8/10">

                    <div>
                        <div class="flex flex-col gap-2 flex-1 mt-auto">
                            <label for="username" class="text-2xl italic text-white font-light">Usuário</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-zinc-800 border rounded-e-0 border-zinc-900/80 border-e-0 rounded-s-md dark:bg-zinc-800 dark:text-gray-400 dark:border-zinc-900/80">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                    </svg>
                                </span>
                                <input type="text" id="username" name="username" class="rounded-none rounded-e-lg outline-none border text-gray-900 focus:border-zinc-300 block flex-1 min-w-0 w-full text-sm border-zinc-900/80 p-2.5 bg-zinc-800 dark:border-zinc-900/80 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-400 dark:focus:border-zinc-400 transition-colors transition-50 transition-150" placeholder="Digite seu usuário" autocomplete="off" value="{{ old('username') }}">
                            </div>
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
                            <input type="password" id="password" name="password" class="rounded-none rounded-e-lg outline-none border text-gray-900 focus:border-zinc-300 block flex-1 min-w-0 w-full text-sm border-zinc-900/80 p-2.5 bg-zinc-800 dark:border-zinc-900/80 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-400 dark:focus:border-zinc-400 transition-colors transition-50 transition-150" placeholder="Digite sua senha" autocomplete="off">
                        </div>

                        @error('username')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('password')
                        <div class="text-red-600 ">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                </div>

                <button type="submit" class="mb-[2rem] mr-auto bg-green-500 text-white text-xl py-2 px-[1rem] rounded-sm font-bold cursor-pointer hover:bg-green-600 hover:px-[1.1rem] hover:tracking-wide transition-all transition-200 transition-ease ">Entrar</button>
            </form>
        </div>

        @if (session('authFailed'))
            <div id="toast-danger" class="animacao-temporaria fixed flex items-center top-5 right-5 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session('authFailed') }}</div>
            </div>
        @endif
    </x-slot:content>
</x-layouts.main-layout>