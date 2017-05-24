@if (Session::has('success'))

  <div class="alert alert-success" role="alert">
    <strong>Success:</strong> {{ Sesssion::get('success') }}
  </div>
  //content

@endif
