@if($errors->any())
    <div class="alert alert-danger mt-4">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
