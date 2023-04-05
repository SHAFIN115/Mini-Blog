@extends('layouts.app')
@include('sweetalert::alert')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>










<!-- Primary Navigation Menu -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                
                

                <!-- Navigation Links -->
                <div class="btn btn-secondary btn-lg">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-lg font-medium text-dark hover:text-gray-900" style="font-family: Arial, sans-serif;">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>



                <div class="btn btn-success btn-lg">
                    <x-nav-link :href="route('post_create')" :active="request()->routeIs('post_create')" class="text-lg font-medium text-dark hover:text-gray-900" style="font-family: Arial, sans-serif;">
                        {{ __('Post') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                
            </div>















<div class="py-12">
    @if (session()->has('status'))
                <div class="alert alert-success my-3" role="alert">
                    {{ session('status') }}
                </div>
    @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>USER ID</th>
            <th>TITLE</th>
            <th>BODY</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $p)
        <tr>
            <td>{{ $p->user->name }}</td>
            <td>{{ $p->id }}</td>
            <td>{{ $p->user_id }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->body }}</td>
            <td>
                <a href="{{ route('post_edit', $p->id) }}" class="btn btn-primary">EDIT</a>
            </td>
            <td>
            <form action="{{ route('post_destroy', $p->id) }}" method="GET" id="delete-form">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation()">DELETE</button>
</form>

<script>
function showDeleteConfirmation() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // If user clicks "Yes" button, submit the form
            document.getElementById('delete-form').submit();
        } else {
            // If user clicks "Cancel" button, display an error message
            Swal.fire({
                title: 'Post not deleted',
                text: 'The post was not deleted.',
                icon: 'error'
            });
        }
    });
}
</script>










            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
@endsection
