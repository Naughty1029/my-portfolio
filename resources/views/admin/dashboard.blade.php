<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="{{route("category.dashboard")}}">カテゴリ管理</a>
                </button>
                <button type="button" class="focus:outline-none ml-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <a href="{{route("create")}}">新規作成</a>
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    タイトル
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    URL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edit
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($works as $work)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$work->title}}
                                    </th>
                                    <td class="px-6 py-4">
                                        <a href="{{$work->url}}" target="_blank" rel="noopener noreferrer">
                                            {{$work->url}}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{route('edit', ['id' => $work->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">編集する</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{route('destroy', ['id' => $work->id])}}" method='post' id="delete_{{$work->id}}">
                                            @csrf
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-id="{{$work->id}}" onClick="delete_alert(this); return false">削除する</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function delete_alert(e){
            if(!window.confirm('本当に削除しますか？')){
                return false;
            }
            document.getElementById(`delete_${e.dataset.id}`).submit();
        };
    </script>
</x-app-layout>
