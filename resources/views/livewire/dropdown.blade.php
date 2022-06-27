<div>
    <div class="form-group row">
        <label for="state" class="col-md-4 col-form-label text-md-right">Post</label>

        <div class="col-md-6">
            <select wire:model="selectedPost" wire:click="updateSelected($event.target.value)" class="form-control">
                <option value="" selected>Choose state</option>
                @foreach($posts as $post)
                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <p wire:model="selectedPost">{{ $selectedPost }}</p>
    </div>

    @if (!is_null($selectedPost))
        <div class="form-group row">
            <label for="comment" class="col-md-4 col-form-label text-md-right">Comment</label>
            
            <div class="col-md-6">
                <select class="form-control" name="comment_id">
                    <option value="" selected>Choose Comments</option>
                    @foreach($comments as $comment)
                        <option value="{{ $comment->id }}">{{ $comment->comment }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>