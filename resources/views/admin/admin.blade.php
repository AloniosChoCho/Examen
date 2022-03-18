@extends('examen.layouts.app2')

@section('title')
  Examen de sheet
@endsection
@section('styles')
  <style>
    .column-option {
      min-inline-size: 100px;
    }
    .column-slider {
          inline-size: 200px;
          max-inline-size: 200px;
          text-overflow: ellipsis;
          overflow: hidden;
          white-space: nowrap;
        }
  </style>
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Examen</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Examen</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title card-title-with-button mb-4">
                                        <h5 class="text-primary">Estreno </b></h5>
                                        <a class="btn btn-primary" href="{{ route('admin.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
                                    </div>
                                    @if (session('updated'))
                                      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </symbol>
                                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </symbol>
                                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </symbol>
                                      </svg>
                                        <div class="alert alert-success d-flex align-items-center  alert-dismissible fade show" role="alert">
                                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                          <div>
                                            {{ session('updated') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        </div>
                                    @endif
                                    @if (!count($admin)){{-- contador de mi lista --}}
                                      <div class="col-12 text-center user-select-none">
                                        <img src="{{ asset('backend/images/lista-vacia.png') }}" height="90" alt="Lista vacía">
                                        <h6 class="text-primary font-weight-bold mt-2">No Tenemos Ninguna Serie :,(</h6>
                                      </div>
                                    @else
                                      <div class="table-responsive">
                                        <table class="table table-sm table-striped">
                                          <thead>
                                            <tr>
                                                <th  class="text-center column-option">Opciones</th>
                                                <th  class=" text-left">Ttulo</th>
                                                <th  class=" text-left">Descripcion</th>
                                                <th class="column-slider">Portada</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($admin as $admin)
                                              <tr>
                                                <td style="inline-size: 120px;" class="text-center">
                                                  <a href="{{route('admin.edit', ['admin' => $admin->id]) }}" class="btn btn-sm btn-primary" title="Editar">
                                                    <i class="far fa-edit"></i>
                                                  </a>

                                                  <a href="javascript:;"
                                                    onclick="document.getElementById('form-update-state{{$admin->id}}').submit()"
                                                    class="btn btn-sm btn-{{ $admin->is_active ? 'success' : 'danger'}}"
                                                    title="{{ $admin->is_active ? 'Desactivar' : 'Activar'}} ">
                                                    <i class="far fa-{{ $admin->is_active ? 'check' : 'times'}}-circle"></i>
                                                  </a>
                                                  <form id="form-update-state{{$admin->id}}" action="{{ route('admin.update-is-active', ['admin'=> $admin->id ]) }}" method="post" class="d-none">
                                                    @csrf
                                                    <input type="hidden" name="state" value="{{$admin->is_active}}">
                                                    <input type="hidden" name="idFaq" value="{{$admin->id}}">
                                                  </form>
                                                    <form action="{{ route('admin.destroy', ['admin' => $admin->id]) }}" method="POST" class="d-inline eliminar">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar">
                                                      <i class="far fa-trash-alt"></i>
                                                    </button>
                                                  </form>
                                                </td>
                                                <td> {{ $admin->title }} </td>
                                                <td> {{ $admin->descripcion }} </td>
                                               <td>
                                                  <img src="{{ asset('storage/admin/'.$admin->imagen) }}"
                                                  onclick="openModalImage('{{$admin->imagen}}')" style="block-size: 50px;border-radius: 10px;"
                                                  alt="Imagen de {{ $admin->imagen }}">
                                                </td>
                                              </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Full Tecnologia <span class="d-none d-sm-inline-block">
                    </div>

                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection

@section('scripts')

    <script>
      function closeModalImage() {
          $("#modal-image").modal('hide')
        }
        function openModalImage(nameImage) {
          $("#modal-image").modal('show')
          $imageFullSize.src = `${END_POINT}storage/admin/${nameImage}`
        }
    </script>

    <script>
      $('.eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: '¿Deseas eliminar este Slider?',
        text: "Una vez eliminado no se volvera a recuperar!",
        icon: 'warning',
        allowOutsideClick:false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar',
        backdrop: `
          rgba(#43484D)
          url("/public/backend/images/pikachu.gif")
          left top
          no-repeat
        `
      }).then((result) => {
        if (result.isConfirmed) {
          this.submit();
        }
      })
      });
    </script>
    @if (session('destroy') == 'Eliminado')
    <script>
      const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
                customClass: {
                    htmlContainer: 'swal2-popup2',
                },
                // background-color: #a5dc86,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('destroy') }}',
                text: "Su slider se elimino correctamente!",
            })
    </script>
    @endif
    @if (session('created'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
            customClass: {
                htmlContainer: 'swal2-popup2',
            },
            // background-color: #a5dc86,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: '{{ session('created') }}',
        })
    </script>
    @endif
@endsection
