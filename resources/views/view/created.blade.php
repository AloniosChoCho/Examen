
@extends('examen.layouts.app2')

@section('title')
  Crear Serie
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Serie</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Full tecnologia</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">viewistrar</a></li>
                                    <li class="breadcrumb-item active">Serie</li>
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
                                    <h5 class="text-primary">Nueva Serie</h5>
                                  </div>
                                  @if($errors->any())
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
                                      <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert"  >
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                        <div>
                                          {!! implode('', $errors->all('<li>:message</li>')) !!}
                                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                      </div>
                                    @endif
                                  <form action="{{ route('view.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                      <label for="" class="mb-0">Titulo Serie</label>
                                      <input type="text" name="title" id="tilte" class="form-control" value="{{ old('title')}}" >
                                    </div>
                                    <div class="form-group mb-3">
                                      <label for="" class="mb-0">Descripción Serie</label>
                                      <textarea class="form-control textarea" name="descripcion" id="descripcion" row="3">{{old('descripcion')}}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                      <label class="mb-0" for="">Portada<small
                                        class="size-sugerence text-muted"><span class="text-danger"> (Tamaño recomendado 150 x 85)</span></label>
                                        </small><b></label>
                                      <input type="file" accept="image/*" class="form-control" name="imagen" id="imagen">
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                      <a href="{{ route('view.index') }}" class="btn btn-sm btn-danger">
                                        Cancelar
                                      </a>
                                      <button type="submit" class="btn btn-sm btn-primary">
                                        Registrar
                                      </button>
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
