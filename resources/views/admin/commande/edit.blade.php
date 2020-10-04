@extends('layouts.app')

@section('titre','Create')

@push('css')

@endpush

@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Modifier Commande</h2>
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
                                        <form method="POST" action="{{ route('commande.update',$commande->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Nom Produit</label>
                                                        <select class="form-control" name="produit">
                                                            @foreach($produits  as $produit)
                                                            <option {{ $produit->id == $commande->produit->id ? 'selected' : '' }} value="{{ $produit->id }}">{{ $produit->nomP }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Nom Client</label>
                                                        <select class="form-control" name="client">
                                                            @foreach($clients  as $client)
                                                            <option {{ $client->id == $commande->client->id ? 'selected' : '' }} value="{{ $client->id }}">{{ $client->nomC }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Prix Commande</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="Prix Commande" name="prixCo">
                                                    </div>
                                                </div>
                                                </div> 
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Quantité Commande</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="Quantite Commande" name="qteCo">
                                                    </div>
                                                </div>
                                                </div> 
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Date</label>
                                                        <input type="date" id="projectinput1" class="form-control" placeholder="Date" name="date">
                                                    </div>
                                                </div>
                                                </div>                                        
                                            <a href="{{ route('commande.index') }}" class="btn btn-danger">Retour</a>
                                            <button type="submit" class="btn btn-primary">Modifier</button>
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


