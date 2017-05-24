@if (Session::has('success'))

  <div class="alert alert-success" role="alert">
    <strong>Success:</strong>
    {{-- {{ \Illuminate\Support\Facades\Session::get('success') }} --}}
    {{ Session::get('success') }}
  </div>
  {{-- content --}}

@endif
