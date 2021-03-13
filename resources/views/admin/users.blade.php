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
                    <!-- Column -->
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-4">
                                    <h4 class="card-title">Utilisateurs</h4>
                                    <div class="ml-auto">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark" data-toggle="modal"
                                                data-target="#createmodel">
                                                Ajouter Utilisateur
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-bordered nowrap display">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Telephone</th>
                                                <th>Telephone</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                 <tr>
                                                    <td>
                                                        <a href="{{ route('users.show', $user->id) }}"><img
                                                                src="/adminn/assets/images/users/1.jpg" alt="user"
                                                                class="rounded-circle" width="30" /> {{ $user->username }} </a>
                                                    </td>
                                                    <td><a href="mailto:{{ $user->email }}" class="__cf_email__" data-cfemail="7116141f141d181031161c10181d5f121e1c">{{ $user->email }}</a></td>
                                                    <td>{{ $user->telephone1 }}</td>
                                                    <td>{{ $user->telephone1 }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>
                                                        <button type="button" token="{{ csrf_token() }}" method="DELETE" href="{{ route('users.destroy', $user->id) }}"
                                                            class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn delete"
                                                            data-toggle="tooltip" data-original-title="Delete"><i
                                                                class="ti-close" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
@endsection