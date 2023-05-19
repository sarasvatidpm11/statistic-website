<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-indigo-700 leading-tight">
            {{ __('Student Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">
                {{-- <a href="/create" class="btn btn-success mb-6">+ Add data</a> --}}
                <a href="/data" class="btn btn-success mb-6">+ Add data</a>
                <table class="table table-bordered min-w-full">
                    <thead class="bg-zinc-200 text-center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Email</th>
                            <th>Score</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <!-- <td>{{ $item->id }}</td> -->
                            <td>{{ $item->stu_id }}</td>
                            <td>{{ $item->stu_name }}</td>
                            <td>{{ $item->class }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->score }}</td>
                            <td class="d-flex justify-content-between">
                                <a href="/tables/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                                <form action="/removeData/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Remove" class="btn btn-danger bg-red-600">
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">No Record Found!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
