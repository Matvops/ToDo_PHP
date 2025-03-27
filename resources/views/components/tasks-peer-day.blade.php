<div class="my-[10%] shadow-2xl">
    <div class="flex justify-between bg-zinc-600 py-4 px-4 rounded-sm mb-2">
        <h2 class="font-bold text-2xl text-white">{{ $week['name'] }}</h2>
        <a href="{{route('add.task', 
            [
                'week_id' => Crypt::encrypt($week['id'])
            ]
        )}}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8 hover:fill-white transition-colors duration-150">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>

    <div class="bg-zinc-900 py-6 ">
        <div class="w-9/10 mx-auto flex flex-col gap-4">
            @foreach ($tasks as $task)

                @if ($task['week_id'] == $week['id'])

                    @switch($task['priority'])
                    @case(1)
                        <div class="bg-red-400 p-4 text-white font-bold text-2xl rounded-sm hover:bg-red-900 transition-colors duration-200 flex items-center justify-between">
                        @break
                    @case(2)
                        <div class="bg-yellow-600 p-4 text-white font-bold text-2xl rounded-sm hover:bg-yellow-800 transition-colors duration-200 flex items-center justify-between">
                        @break
                    @case(3)
                        <div class="bg-green-400 p-4 text-white font-bold text-2xl rounded-sm hover:bg-green-800 transition-colors duration-200 flex items-center justify-between">
                        @break
                    @endswitch
                    
                        {{$task['title']}}
                        <div class="flex gap-2">
                            <a href="{{route('update.task',
                                [
                                    'task_id' => Crypt::encrypt($task['id'])
                                ]
                            )}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                            </a>
                            <a href="{{route('delete.task',
                                [
                                    'task_id' => Crypt::encrypt($task['id'])
                                ]
                            )}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>

                    </div>

                @endif
            @endforeach
        </div>
    </div>
</div>