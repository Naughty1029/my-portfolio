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
                <form action="{{route("category.store")}}" method="post">
                    @csrf
                    <div class="mb-6">
                      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">カテゴリ</label>
                      <input type="text" name="category" id="category" value="{{old('category')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="カテゴリを入力してください" required>
                      @error('category')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                      @enderror
                    </div>
                    <button type="submit" class="focus:outline-none ml-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">登録</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
