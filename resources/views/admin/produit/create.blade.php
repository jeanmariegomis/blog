@extends('layouts.app')

@section('titre','Create')

@push('css')

@endpush

@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Produits</h2>
                </div>
                <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Basic Tables start -->
                <div class="row">
                    <div class="col-xs-12">
                        @include('layouts.partial.msg')
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajouter Produit</h4>
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
                                <div class="card-block card-dashboard">
                                    <div class="table-responsive">
                                        <form method="POST" action="{{ route('produit.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Nom Categorie</label>
                                                        <select class="form-control" name="categorie">
                                                @foreach($categories as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->nomC }}</option>
                                                @endforeach
                                            </select>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Nom</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="Nom" name="nomP">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Prix</label>
                                                        <input type="text" id="projectinput2" class="form-control" placeholder="Prix" name="prix">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput3">Quantite</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="Quantite" name="qte">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Image</label>
                                                            <input type="file"  name="imageP">
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>

                                            <a href="{{ route('produit.index') }}" class="btn btn-danger">Back</a>
                                            <button type="submit" class="btn btn-primary">Enregistrez</button>
                                        </form>
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


@endpush


