<!DOCTYPE html>
<html lang="en">
  
  <head>
    @include('partials.dashboard-head')
  </head>

  <body>
    
    <script>
      @if(session()->has('success'))
        Swal.fire({title:'Berhasil', text:'{{session('success')}}', icon:'success'})
      @endif
      @if(session()->has('error'))
        Swal.fire({title:'Error!', text:'{{session('error')}}', icon:'error'})
      @endif
      @if(session()->has('info'))
        Swal.fire({title:'Info', text:'{{session('info')}}', icon:'info'})
      @endif
      @if($errors->any())
        Swal.fire({title:'Error!', html:'{!! implode('', $errors->all(':message<br>')) !!}', icon:'error'})
      @endif
    </script>

    @yield('content')
    
    @include('partials.dashboard-script')
  
  </body>

</html>
