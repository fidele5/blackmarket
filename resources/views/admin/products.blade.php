@extends('layouts.app')
@section("content")
@include('admin.breadcumb')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table product-overview" id="zero_config">
                                        <thead>
                                            <tr>
                                                <th>Designation</th>
                                                <th>Photo</th>
                                                <th>Prix</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr>
                                                    <td><a href="{{ route('detailProduit', $item->id) }}"> {{ $item->nom }} </a></td>
                                                    <td>
                                                         <img src="{{ asset('img/shop/products/'.$item->photo ) }}" alt="{{ $item->photo }}"
                                                            width="80"> 
                                                    </td>
                                                    <td>{{ $item->prix }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td> <span class="label label-success font-weight-100">{{ $item->etat }}</span></td>
                                                    <td><a href="{{ route('editProduit', $item->id) }}" class="text-inverse pr-2"
                                                            data-toggle="tooltip" title="Edit"><i
                                                                class="ti-marker-alt"></i></a> <a href=""
                                                            class="text-inverse delete" lien="{{ route('deleteProduit') }}" val="{{ $item->id }}" title="Delete" data-toggle="tooltip"><i
                                                                class="ti-trash"></i></a></td>
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
               
            </div>
@endsection