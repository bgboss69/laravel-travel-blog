<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Comment') }}
        </h2>
    </x-slot>

    <div class="container py-6">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Comment</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $comment->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="blog" class="form-label">Blog</label>
                                <select id="blog" class="form-select @error('blog') is-invalid @enderror" name="blog" required>
                                    <option value="busan" {{ $comment->blog == 'busan' ? 'selected' : '' }}>Busan</option>
                                    <option value="Dadohaehaesang" {{ $comment->blog == 'Dadohaehaesang' ? 'selected' : '' }}>Dadohaehaesang</option>
                                    <option value="Gyeongju" {{ $comment->blog == 'Gyeongju' ? 'selected' : '' }}>Gyeongju</option>
                                    <option value="Seoul" {{ $comment->blog == 'Seoul' ? 'selected' : '' }}>Seoul</option>
                                    <option value="Pyeongchang" {{ $comment->blog == 'Pyeongchang' ? 'selected' : '' }}>Pyeongchang</option>
                                </select>
                                @error('blog')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" required>{{ $comment->comment }}</textarea>
                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
