<div class="col-lg-3">
    <ul class="list-group">
        <li class="list-group-item text-center"><a href="/posts"><strong>Posts</strong></a></li>
        @if (auth()->user()->is_admin == 1)
            <li class="list-group-item text-center"><a href="/categories"><strong>Categories</strong></a></li>
            <li class="list-group-item text-center"><a href="/users"><strong>Users</strong></a></li>
        @endif
    </ul>
</div>
