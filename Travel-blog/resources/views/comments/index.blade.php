<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Comments') }}
        </h2>
    </x-slot>

    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($comments->isEmpty())
                <div class="alert alert-info" role="alert">
                    No comments found.
                </div>
                @else
                @foreach($comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">

                        <h5 class="card-title h5">{{ $comment->name }}</h5>
                        <p class="card-text">{{ $comment->blog }}  -- {{ $comment->comment }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <small class="text-muted">Created: {{ $comment->created_at }}</small>
                        <div class="btn-group" role="group">
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="container border-bottom pb-2">
            <div class="d-flex flex-column justify-content-center align-items-left" style="width: 80vw;">
                <h1 class="h1">Create Comment</h1>
                <form action="{{ route('comments.store') }}" method="post" class="w-100">
                    @csrf <!-- Add CSRF protection -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" readonly value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="blog">Blog:</label>
                        <select class="form-control" id="blog" name="blog" required>
                            <option value="busan">Busan</option>
                            <option value="Dadohaehaesang">Dadohaehaesang</option>
                            <option value="Gyeongju">Gyeongju</option>
                            <option value="Seoul">Seoul</option>
                            <option value="Pyeongchang">Pyeongchang</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit Comment</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>