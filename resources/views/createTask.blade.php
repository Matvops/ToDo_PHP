<x-layouts.main-layout>

    <x-slot:title>Create Task</x-slot:title>

    <x-slot:content>
        <x-logout-button />    

        <div class="min-w-[400px] w-3/10 bg-zinc-600 tracking-wide rounded-sm max-h-[50vh] h-[500px] min-h-[400px] shadow-xl">
            <form action="{{ route('add.task.submit') }}" method="post" class="w-9/10 h-full mx-auto flex flex-col justify-between gap-8">
                @csrf
                <input type="hidden" name="week_id" value="{{ $week_id }}">

                <div class="flex flex-col gap-4 pt-[4rem]">
                    <label for="title" class="text-2xl text-white font-bold">TAREFA</label>
                    <input type="text" id="title" name="title" class="rounded-none rounded-e-lg outline-none border text-gray-900 focus:border-zinc-300 block min-w-0 w-full text-sm border-zinc-900/80 p-2.5 bg-zinc-800 dark:border-zinc-900/80 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-400 dark:focus:border-zinc-400 transition-colors transition-50 transition-150" placeholder="Digite o título" autocomplete="off" value="{{ old('title') }}">
                </div>

                <div class="min-w-0 w-full bg-zinc-800 flex flex-col flex-1 px-4 justify-center gap-4 rounded-sm">
                    <label for="priorityLow" class="font-bold text-xl text-green-400">
                        <input type="radio" id="priorityLow" name="priority" value="3"> BAIXA
                    </label>

                    <label for="priorityMid" class="font-bold text-xl text-yellow-600">
                        <input type="radio" id="priorityMid" name="priority" value="2"> MÉDIA
                    </label>

                    <label for="priorityHigh" class="font-bold text-xl text-red-400">
                        <input type="radio" id="priorityHigh" name="priority" value="1"> ALTA
                    </label>
                </div>

                <div class="flex">
                    <div class="w-3/10">
                        <button type="submit" class="mb-[2rem] bg-green-500 text-white text-xl py-2 px-[1rem] rounded-sm font-bold cursor-pointer hover:bg-green-600 hover:px-[1.1rem] hover:tracking-wide transition-all transition-200 transition-ease uppercase">Confirmar</button>
                    </div>
                    <a class="inline-block ml-auto" href="{{ route('home') }}">
                        <button type="button" class="mb-[2rem] mr-auto bg-red-500 text-white text-xl py-2 px-[1rem] rounded-sm font-bold cursor-pointer hover:bg-red-600 hover:px-[1.1rem] hover:tracking-wide transition-all transition-200 transition-ease uppercase">Cancelar</button>
                    </a>
                </div>
            </form>


        </div>

        @error('title')
            <div id="toast-danger" class="animacao-temporaria fixed flex items-center top-5 right-5 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ $message }}</div>
            </div>
        @enderror

        @error('priority')
            <div id="toast-danger" class="animacao-temporaria fixed flex items-center top-25 right-5 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ $message }}</div>
            </div>
        @enderror

        @if(session('createTaskFailed'))
            <div id="toast-danger" class="animacao-temporaria fixed flex items-center top-25 right-5 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session('createTaskFailed') }}</div>
            </div>
        @endif
    </x-slot:content>

</x-layouts.main-layout>