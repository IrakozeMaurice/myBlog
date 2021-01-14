<div class="col-lg-4">
    <ul class="list-group">
        <li class="list-group-item"><a href="/posts">Posts</a></li>
        @if (auth()->user()->is_admin == 1)
            <li class="list-group-item"><a href="/categories">Categories</a></li>
        @endif
        @if (auth()->user()->is_admin == 1)
            <li class="list-group-item"><a href="/users">Users</a></li>
        @endif
    </ul>
</div>
