@extends('layouts.app')

@section('titre','Categorie')

@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

@endpush

@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Listes des Clients</h2>
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
                                <a href="{{ route('client.create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-log-in">Ajouter</i></a>
                                @include('layouts.partial.msg')
                                <div class="card-block card-dashboard">
                                    <div class="table-responsive">
                                        <table id="table" class="table"  cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom Client</th>
                                                <th>Email Client</th>
                                                <th>Téléphone Client</th>
                                                <th>Adresse Client</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($clients as $key=>$client)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $client->nomC }}</td>
                                                    <td>{{ $client->emailC }}</td>
                                                    <td>{{ $client->telC }}</td>
                                                    <td>{{ $client->adresseC }}</td>


                                                    <td>
                                                        <a href="{{ route('client.edit',$client->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                        <form id="delete-form-{{ $client->id }}" action="{{ route('client.destroy',$client->id) }}" style="display: none;" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Vous êtes sûr de vouloir la supprimée?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $client->id }}').submit();
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


