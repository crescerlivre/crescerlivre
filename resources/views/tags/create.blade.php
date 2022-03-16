
@extends('layouts.app-master')

@section('content')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    @include('layouts.partials.navbar')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Tags de marcação</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('tags.index') }}">Tags</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Criar tag</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">

            <div class="card row pb-3">

                <div class="mt-2">
                    @include('layouts.partials.messages')
                </div>

                <form method="POST" action="{{ route('tags.store') }}">
                    @csrf
                    <div class="mb-3 col-sm-6">
                        <label for="name" class="form-label">Nome</label>
                        <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Nome" required>
                    </div>

                    <div class="mb-3 col-sm-6">
                        <label for="name" class="form-label">Descrição</label>
                        <input value="{{ old('description') }}" type="text" class="form-control" name="description" placeholder="Descrição" required>
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Cor (hexadecial #fff)</label>
                        <input value="{{ old('color') }}" type="text" class="form-control" name="color" placeholder="Cor">
                    </div>

                    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>

            </div>
        </div>

    </div>

    @include('layouts.partials.footer')

</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        $("#phone").mask('00000000000');

        $('[name="all_permission"]').on('click', function() {

            if ($(this).is(':checked')) {
                $.each($('.permission'), function() {
                    $(this).prop('checked', true);
                });
            } else {
                $.each($('.permission'), function() {
                    $(this).prop('checked', false);
                });
            }

        });
    });
</script>
@endsection
