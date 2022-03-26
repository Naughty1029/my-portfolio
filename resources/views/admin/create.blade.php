<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('新規作成') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form action="{{route("store")}}" method="post">
                    @csrf
                    <div class="mb-6">
                      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">タイトル</label>
                      <input type="text" name="title" id="title" value="{{old('title')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="タイトルを入力してください" required>
                      @error('title')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-6">
                        <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">コメント</label>
                        <textarea id="comment" name="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="コメントを入力してください" required>{{old('comment')}}</textarea>
                        @error('comment')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">URL</label>
                        <input type="url" id="url" name="url" value="{{old('url')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="URLを入力してください" required>
                        @error('url')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="github" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">GitHub</label>
                        <input type="text" id="github" name="github" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="GitHubのURLを入力してください">
                        @error('github')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <fieldset class="mb-6 flex flex-wrap">
                        <legend class="mb-2">カテゴリ</legend>
                        @foreach ($categories as $category)
                            <div class="flex items-center mb-4 mr-4">
                                <input id="{{$category->id}}" name="categories[]" type="checkbox" value="{{$category->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="{{$category->id}}" class="pl-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{$category->category}}</label>
                            </div>
                        @endforeach
                        @error('categories')
                            <p class="w-full mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror
                    </fieldset>
                    <button type="submit" class="focus:outline-none ml-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">登録</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
