@extends('examen.layouts.app2')

@section('title')
Series
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Series</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrar</a></li>
                                    <li class="breadcrumb-item active">Series</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                  <div class="card-title card-title-with-button mb-4">
                                    <h5 class="text-primary">Editar Serie</h5>
                                  </div>
                                  @if($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                      <ul class="mb-0">
                                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                                      </ul>
                                    </div>
                                  @endif
                                  <form action="{{ route('admin.update', ['admin' => $admin->id]) }}" enctype="multipart/form-data" class="row" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group mb-3">
                                      <label for="" class="mb-0">Titulo Series</label>
                                      <input type="text" name="title" id="title" class="form-control" value="{{$admin->title}}" >
                                    </div>
                                    <div class="form-group mb-3">
                                      <label for="" class="mb-0">Descripción Series</label>
                                      <textarea class="form-control textarea" name="descripcion" id="descripcion" row="3">{{$admin->descripcion}}</textarea>
                                    </div>
                                    <label class="mb-0" for="">Portada</label><label class="mb-0" for="">Portada<small
                                        class="size-sugerence text-muted"><span class="text-danger"> (Tamaño recomendado 150 x 85)</span></label>
                                        </small><b></label>
                                    <div class="form-group mb-3">
                                      <img src="{{ asset('storage/admin/'.$admin->imagen) }}"
                                                  onclick="openModalImage('{{$admin->imagen}}')" style="block-size: 150px;border-radius: 10px;"
                                                  alt="Imagen de {{ $admin->imagen }}">
                                    </div>

                                    <div class="col-sm-12 mt-3">
                                      <a href="{{ route('admin.index') }}" class="btn btn-sm btn-danger">Cancelar</a>
                                      <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                    </div>
                                  </form>
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
                        </script>  © Full Tecnologia <span class="d-none d-sm-inline-block">
                    </div>

                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
