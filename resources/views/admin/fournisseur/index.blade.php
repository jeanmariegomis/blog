@extends('layouts.app')

@section('titre','Fournisseur')

@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

@endpush

@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Liste des Fournisseurs</h2>
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">

                </div>
            </div>
            <div class="content-body"><!-- Basic Tables start -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <a href="{{ route('fournisseur.create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-log-in">Ajouter</i></a>
                                @include('layouts.partial.msg')
                                <div class="card-block card-dashboard">
                                    <div class="table-responsive">
                                        <table id="table" class="table"  cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom </th>
                                                <th>Email </th>
                                                <th>Telephone </th>
                                                <th>Adresse </th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($fournisseurs as $key=>$fournisseur)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $fournisseur->nomF }}</td>
                                                    <td>{{ $fournisseur->emailF }}</td>
                                                    <td>{{ $fournisseur->telF }}</td>
                                                    <td>{{ $fournisseur->adresseF }}</td>

                                                    <td>
                                                        <a href="{{ route('fournisseur.edit',$fournisseur->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                        <form id="delete-form-{{ $fournisseur->id }}" action="{{ route('fournisseur.destroy',$fournisseur->id) }}" style="display: none;" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Vous êtes sûr de vouloir la supprimée?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $fournisseur->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">delete</i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>

@endpush


