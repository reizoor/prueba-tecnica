

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="lg:container lg:mx-auto">
        <h2 class="text-blue-600 text-3xl text-center pb-5 mx-auto mt-10">Lista de tareas</h2>
        <div class="flex justify-center mb-5">
            <input class="block w-2/6 p-4  right-0 text-black-900 border border-black-300 rounded-lg bg-white-50 text-base focus:ring-blue-500 focus:border-blue-500 mb-2"type="text" name="task" id="taskDescription">
            <button type="button" class="text-white w-40 bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-lg  py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="postTask()">Agregar</button>
        </div>
        <div class="mx-10">
            @foreach ($tasks as $task)

            <div class="flex justify-center mb-2 ml-12">
                <input class="block w-3/6 p-4 mx-4 ml-10 right-0 text-black-900 border border-black-300 rounded-lg bg-white-50 text-base focus:ring-blue-500 focus:border-blue-500 mb-2"type="text" name="task" id="taskDescription{{$task->id}}" value="{{$task->description}}">
                
                {{-- <input class="flex-auto mx-10 mb-5 border-2 block w-3/6 p-4  right-0 text-black-900 border border-black-300 rounded-lg bg-white-50 text-base"type="text" name="task" id="taskDescription{{$task->id}}" onclick="updateTask({{$task->id}})"> --}}
                <button type="button" class="text-white h-16 bg-rose-600 hover:bg-rose-800 font-medium rounded-xl text-sm px-5 py-2.5 text-center inline-flex items-center me-2" onclick="deleteTask({{$task->id}})">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                      </svg>                  
                </button>
                <button type="button" class="text-white h-16 bg-blue-400 hover:bg-blue-500   font-medium rounded-xl text-sm px-5 py-2.5 text-center inline-flex items-center me-2 " onclick="updateTask({{$task->id}})">
                    <svg class="w-6 h-6 text-gray-800 dark:text-grey" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                      </svg>                                  
                </button>
                <button type="button" class="text-white h-16 bg-green-600 hover:bg-green-700  font-medium rounded-xl text-sm px-5 py-2.5 text-center inline-flex items-center me-2 " onclick="completeTask({{$task->id}},{{$task->is_complete}})">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                      </svg>                                                   
                </button>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
<script src="{{ asset('app/js/task.js') }}"></script>