@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-secondary" role="alert">
        {{ session()->get('error') }}
    </div>
@endif
