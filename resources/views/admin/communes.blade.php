@extends('layouts.app')
@section('content')
@include('admin.breadcumb')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Communes</h4>
                                <h6 class="card-subtitle"></h6>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right"
                                    data-toggle="modal" data-target="#add-contact">Ajouter la commune</button>
                                <!-- Add Contact Popup Model -->
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Nouvelle commune</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal form-material" id="form" action="{{ route('communes.store') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" name="nom" placeholder="Entrer le nom" required>
                                                            <small class="help-block"></small>
                                                        </div>
                                                        <div id="selection" class="col-md-12 m-b-20">
                                                            <select class="form-control fillable" id="select2-with-placeholder" name="villes_id" style="width: 100%; height:36px;">
                                                                @foreach ($villes as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                                @endforeach  
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-success waves-effect" type="submit">Enregistrer</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow"
                                        class="table table-bordered m-t-30 table-hover contact-list" data-paging="true"
                                        data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nom</th>
                                                <th>Etat</th>
                                                <th>Ville</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($communes))
                                                @foreach ($communes as $item)
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                             {{ $item->nom }}
                                                        </td>
                                                        <td class="state {{ ($item->etat)?'text-info':'text-warning' }}">{{ ($item->etat)?'actif':'inactif' }}</td>
                                                        <td class="selectable">
                                                             {{ $item->villes_id }}
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Button group">
                                                                <button lien="{{ route('communes.update', $item->id) }}" method="PATCH" token="{{ csrf_token() }}" class="btn btn-outline-info edit" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                </button>
                                                                <a class="btn btn-outline-danger delete" method="DELETE" token="{{ csrf_token() }}" href="{{ route('communes.destroy', $item->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>  
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->

@endsection