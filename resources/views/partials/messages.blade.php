@if (session('message') == 'created')
    <div class="alert alert-primary">
        {{ session('message') }}
    </div>
@endif
@if (session('message') == 'updated')
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if (session('message') == 'deleted')
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif
