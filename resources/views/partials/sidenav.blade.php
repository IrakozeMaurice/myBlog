<div class="col-lg-4">
    <ul class="list-group">
        <li class="list-group-item"><a href="">Posts</a></li>
        <li class="list-group-item"><a href="">Categories</a></li>
        @if (auth()->user()->is_admin == 1)
            <li class="list-group-item"><a href="">Users</a></li>
        @endif
    </ul>
</div>
