<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-indigo-700 leading-tight">
            {{ __('Student Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-success class="mb-4" :status="session('message')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">
                <form action="/tables/{{$data->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div>
                        <!-- <input type="text" name="id"> -->
                        <x-input-label for="id" :value="__('Student ID')" />
                        <x-text-input id="id" class="block mt-1 w-full" type="text" name="stu_id" value="{{$data->stu_id}}"
                            required autofocus />
                    </div>
                    <div>
                        <!-- <input type="text" name="name"> -->
                        <x-input-label for="name" :value="__('Student Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="stu_name"
                            value="{{$data->stu_name}}" required autofocus />
                    </div>
                    <div>
                        <!-- <input type="text" name="class"> -->
                        <x-input-label for="class" :value="__('Class')" />
                        <x-text-input id="class" class="block mt-1 w-full" type="text" name="class"
                            value="{{$data->class}}" required autofocus />
                    </div>
                    <div>
                        <!-- <input type="text" name="email"> -->
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            value="{{$data->email}}" required autofocus />
                    </div>
                    <div>
                        <!-- <input type="number" name="score"> -->
                        <x-input-label for="score" :value="__('Score')" />
                        <x-text-input id="score" class="block mt-1 w-full" type="number" name="score"
                            value="{{$data->score}}" required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="mt-3" type="submit">
                            {{ __('Update') }}
                        </x-primary-button>
                        <!-- <button type="submit">Add</button>  -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
