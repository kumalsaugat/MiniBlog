<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session()->has('status'))
                <div class="mb-4  bg-gray-500 text-black text-sm py-2 px-4">
                    {{ session('status') }}
                </div>
                @endif


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- This is the example of table --}}

                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auro sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-800">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">
                                                        Title
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">
                                                        Body
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($posts as $post)


                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{$post->user->name}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{$post->title}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{$post->body}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <a href="{{url('/post/edit',$post->id) }}" class="bg-blue-500 hover:big-blue-400 focus:shadow-outline
                                                        focus:outline-none text-black text-m py-1 px-2 rounded ml-5">Edit</a>

                                                        <a href="{{url('/post/delete',$post->id) }}" class="bg-red-500 hover:big-red-400 focus:shadow-outline
                                                        focus:outline-none text-black text-m py-1 px-2 rounded ml-5">Delete</a>

                                                    </td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>





                    {{-- End example table --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
