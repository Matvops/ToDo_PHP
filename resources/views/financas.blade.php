<x-layouts.main_layout>
    <x-slot:title>Finanças</x-slot:title>

    <x-slot:content>
        <div class="min-h-screen w-full">
            <h1 class="text-white text-4xl font-bold mt-[5%] text-center">Organizador financeiro</h1>

            <section class="mr-auto w-fit-content mt-[5%] px-8">

                <div class="mb-4 flex justify-between min-w-[300px] max-w-[24rem] items-center">
                    <h2 class="uppercase text-white text-3xl font-bold">Salário</h2>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24" stroke-width="2" stroke="rgb(45, 45, 45)" class="size-8 hover:fill-white transition-colors duration-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"/>
                        </svg>
                    </a>

                </div>

                <div class="flex flex-col gap-5">
                    <div class="bg-zinc-600 min-w-[300px] max-w-[24rem] rounded-sm shadow-xl px-4 py-4 flex justify-between">
                        <h3 class="uppercase text-white text-2xl font-bold flex-1">Anual</h3>
                        <h3 class="uppercase text-white text-2xl font-bold">{{$salary * 12}}.00</h3>
                    </div>

                    <div class="bg-zinc-600 min-w-[300px] max-w-[24rem] rounded-sm shadow-xl px-4 py-4 flex justify-between">
                        <h3 class="uppercase text-white text-2xl font-bold flex-1">Mensal</h3>
                        <h3 class="uppercase text-white text-2xl font-bold">{{ $salary }}</h3>
                    </div>

                    <div class="bg-zinc-600 min-w-[300px] max-w-[24rem] rounded-sm shadow-xl px-4 py-4 flex justify-between">
                        <h3 class="uppercase text-white text-2xl font-bold flex-1">Gasto total</h3>
                        <h3 class="uppercase text-white text-2xl font-bold">2.500</h3>
                    </div>
                </div>
            </section>
        </div>
    </x-slot:content>
</x-layouts.main_layout>