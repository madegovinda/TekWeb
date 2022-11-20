<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Math') }}
        </h2>
    </x-slot>
<div class="antialiased bg-gradient-to-r from-blue-500 to-green-500 text-gray-900 font-sans">
    <div class="flex items-center justify-center h-screen w-screen">
        <div class="w-full bg-white rounded shadow-lg p-8 mx-96">
            <form class="form" method="POST" action="/aritmatika">
                @csrf
                <span class="block w-full text-2xl uppercase font-bold mb-10 text-center">ARITMATIKA</span>
                <div class="mb-4 md:w-full">
                    <label for="sequence1" class="block text-ss mb-1 md:w-full">Input Number 1</label>
                    <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        name="bil1" />
                    <small class="text-red-600" id="err_seq1"></small>
                </div>
                <div class="mb-4 md:w-full">
                    <label for="sequence2" class="block text-s mb-1 md:w-full">Input Number 2</label>
                    <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        name="bil2" />
                    <small class="text-red-600" id="err_seq2"></small>
                </div>
                <!-- <div class="mb-4 md:w-full">
                    <label for="number" class="block text-s mb-1 md:w-full">Input Limit Number</label>
                    <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        id="limit" />
                    <small class="text-red-600" id="err_limit"></small>
                </div>
                <div class="mb-4 md:w-full">
                    <div class="block text-s mb-1 md:w-full">Result</div>
                    <div class="w-full border rounded p-5">
                        <p class="break-normal text-justify -m-3" id="result"></p>
                    </div>
                </div> -->
                <div class="flex md:w-full justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold my-5 mx-2 px-4 py-2 rounded"
                        id="submit">
                        Submit
                    </button>
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white uppercase text-sm font-semibold my-5 mx-5 px-4 py-2 rounded"
                        id="reset">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>