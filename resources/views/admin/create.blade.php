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
                <form>
                    <div class="mb-6">
                      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">タイトル</label>
                      <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="タイトルを入力してください" required>
                    </div>
                    <div class="mb-6">
                        <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">コメント</label>
                        <textarea id="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="コメントを入力してください"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">URL</label>
                        <input type="url" id="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="URLを入力してください" required>
                    </div>
                    <div class="mb-6">
                        <label for="github" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">GitHub</label>
                        <input type="url" id="github" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="GitHubのURLを入力してください" required>
                    </div>
                    <fieldset class="mb-6 flex">
                        <legend class="mb-2">Checkbox variants</legend>
                        <div class="flex items-center mb-4 mr-4">
                            <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                            <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
                        </div>

                        <div class="flex items-center mb-4 mr-4">
                            <input id="checkbox-2" aria-describedby="checkbox-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-2" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">I want to get promotional offers</label>
                        </div>

                        <div class="flex items-center mb-4 mr-4">
                            <input id="checkbox-3" aria-describedby="checkbox-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-3" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">I am 18 years or older</label>
                        </div>
                    </fieldset>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">登録</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
