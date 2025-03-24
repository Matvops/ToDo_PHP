<x-layouts.main-layout>
    <x-slot:title>Home</x-slot>

    <x-slot:content>
        <main class="w-5/10 self-start mt-[8%]">
            <h1 class="text-white font-extrabold text-3xl text-center mb-[8rem]">Lista de tarefas - <span class="text-red-700 uppercase">semanal</span></h1>
            <section>
                @foreach($weeks as $week)
                    <x-tasks-peer-day :week="$week" :tasks="$tasks" />  
                @endforeach
            </section>
        </main>
    </x-slot>
</x-layouts.main-layout>