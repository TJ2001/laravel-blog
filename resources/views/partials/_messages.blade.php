@if (Session::has('success'))

  <div class="alert alert-success" role="alert">
    <strong>Success:</strong>
    {{-- {{ \Illuminate\Support\Facades\Session::get('success') }} --}}
    {{ Session::get('success') }}
  </div>
  {{-- content --}}

@endif

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Errors:</strong>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
