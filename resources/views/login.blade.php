@extends('template.layout')
@section('konten')
    <div class="w-full h-screen bg-gray-100 flex justify-center items-center">
        <div class="login p-8 bg-white rounded-lg shadow-md">
            <h1 class="text-4xl font-bold text-center mb-4">login</h1>
            <form action="" class="flex flex-col gap-4">
                <label for="username" class="block text-xl font-medium text-gray-700">username</label>
                <input type="text" name="username" id="username"
                    class="block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
                <label for="password" class="block text-xl font-medium text-gray-700">password</label>
                <input type="password" name="password" id="password"
                    class="block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
                <div class="btn flex gap-2">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white font-bold p-2 rounded-md hover:bg-blue-700">login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
