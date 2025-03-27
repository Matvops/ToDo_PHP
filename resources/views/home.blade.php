<x-layouts.main-layout>
    <x-slot:title>Home</x-slot>

    <x-slot:content>
        <x-logout-button />
       
        <main class="w-5/10 self-start mt-[8%]">
            <h1 class="text-white font-extrabold text-3xl text-center mb-[8rem]">Lista de tarefas - <span class="text-red-700 uppercase">semanal</span></h1>
            <section>
                @foreach($weeks as $week)
                    <x-tasks-peer-day :week="$week" :tasks="$tasks" />  
                @endforeach
            </section>
        </main>

        @if(session('updateTaskFailed'))
            <div id="toast-danger" class="animacao-temporaria fixed flex items-center top-5 right-5 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session('updateTaskFailed') }}</div>
            </div>
        @endif
    </x-slot>
</x-layouts.main-layout>