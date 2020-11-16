{{-- <div class="alert alert-danger">
    <strong>Whoops! Something went wrong!</strong>

    <br><br>

    <ul>
        <li>Error {{ count($errors) }}</li>

    </ul>
</div> --}}

@if ($errors->has($fieldName))
    <!-- Form Error List -->
    <div class="text-danger">
        @foreach ($errors->get($fieldName) as $error)
            <span>{{ $error }}</span>
        @endforeach
    </div>
@endif
