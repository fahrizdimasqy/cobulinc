<div class="form-group">
    <h3 for="">Tambahkan Komentar?</h3>
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <div class="input-group flex-nowrap">
            <textarea id="komen" type="text" class="form-control" placeholder="Tambahkan Komentar" aria-label="Tambahkan Komentar" aria-describedby="addon-wrapping" name="comment" cols="20" rows="5"></textarea>
            <div class="input-group-prepend"><button class="btn btn-primary"><i class="fas fa-comment"></i></button></div>
        </div>
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        @method('POST')
    </form>
    <label for="" class="float-right">Anda berkomentar sebagai <strong>{{ Auth::user()->name }}</strong></label>
</div>
<br>
<ul class="list-group mt-5">
    @foreach ($post->comments as $key => $comment)
    <li class="list-group-item">
        <div class="media">
            <img src="https:/picsum.photos/50" alt="avatar" class="img-fluid rounded-circle mr-3">
            <div class="media-body">
                <h5 class="my-0">{{ $comment->user->name }}</h5>
                <small class="d-block mb-2">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</small>
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
    </li>
    @endforeach
</ul>