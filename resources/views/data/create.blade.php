<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <x-success class="mb-4" :status="session('message')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">
                <form action="/tables" method="POST">
                    @csrf
                    <div>
                        <!-- <input type="text" name="id"> -->
                        <x-input-label for="id" :value="__('Student ID')" />
                        <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id')" required autofocus />
                    </div>
                    <div>
                    <!-- <input type="text" name="name"> -->
                        <x-input-label for="name" :value="__('Student Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <div>
                    <!-- <input type="text" name="class"> -->
                        <x-input-label for="class" :value="__('Class')" />
                        <x-text-input id="class" class="block mt-1 w-full" type="text" name="class" :value="old('class')" required autofocus />
                    </div>
                    <div>
                    <!-- <input type="text" name="email"> -->
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div> 
                    <!-- <input type="number" name="score"> -->
                        <x-input-label for="score" :value="__('Score')" />
                        <x-text-input id="score" class="block mt-1 w-full" type="number" name="score" :value="old('score')" required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="mt-3" type="submit">
                            {{ __('Add') }}
                        </x-primary-button>
                        <!-- <button type="submit">Add</button>  -->
                    </div> 
                </form>
            </div>
        </div>
    </div>
</x-app-layout>