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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="/adminn/assets/images/users/5.jpg" class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2">{{ $user->username }}</h4>
                                    <h6 class="card-subtitle">{{ $user->nom." ".$user->prenom }}</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">{{ Helper::countProducts($user->id) }}</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">{{ Helper::soldProducts($user->id) }}</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c2aaa3acaca3a5adb4a7b082a5afa3abaeeca1adaf">{{ $user->email }}</a></h6> 
                                <small class="text-muted pt-4 db">Telephone</small>
                                <h6>{{ $user->telephone1 }}</h6> 
                                <small class="text-muted pt-4 db">Telephone </small>
                                <h6>{{ $user->telephone2}}</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link <?= (isset($errors))?'':'active'?>" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Produits</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Ventes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= (isset($errors))?'active':''?>" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                                </li>
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
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
                                                            <td>{{ $item->article }}</td>
                                                            <td>
                                                                <img src="{{ asset('img/shop/products/'.$item->photo ) }}" alt="{{ $item->photo }}"
                                                                    width="50"> 
                                                            </td>
                                                            <td>{{ $item->prix }}</td>
                                                            <td>{{ $item->creation }}</td>
                                                            <td> <span class="label label-success font-weight-100">{{ $item->status }}</span></td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-2"
                                                                    data-toggle="tooltip" title="Edit"><i
                                                                        class="ti-marker-alt"></i></a> <a href="javascript:void(0)"
                                                                    class="text-inverse" title="Delete" data-toggle="tooltip"><i
                                                                        class="ti-trash"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
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
                                                    @foreach ($sells as $item)
                                                        <tr>
                                                            <td>{{ $item->nom }}</td>
                                                            <td>
                                                                <img src="/adminn/assets/images/gallery/chair.jpg" alt="{{ $item->photo }}"
                                                                    width="80"> 
                                                            </td>
                                                            <td>{{ $item->prix }}</td>
                                                            <td>{{ $item->created_at }}</td>
                                                            <td> <span class="label label-success font-weight-100">{{ $item->status }}</span></td>
                                                            <td><a href="javascript:void(0)" class="text-inverse pr-2"
                                                                    data-toggle="tooltip" title="Edit"><i
                                                                        class="ti-marker-alt"></i></a> <a href="javascript:void(0)"
                                                                    class="text-inverse" title="Delete" data-toggle="tooltip"><i
                                                                        class="ti-trash"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" action="{{ route('editUser') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Nom</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="nom" placeholder="Johnathan Doe" class="form-control form-control-line @error('nom') is-invalid @enderror" value="{{ $user->nom }}">
                                                            @error('nom')
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('nom') }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Prenom</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="prenom" placeholder="Johnathan Doe" class="form-control form-control-line @error('prenom') is-invalid @enderror" value="{{ $user->prenom }}">
                                                            @error('prenom')
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('prenom') }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Username</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="username" placeholder="Johnathan Doe" class="form-control form-control-line @error('username') is-invalid @enderror" value="{{ $user->username }}">
                                                    @error('username')
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('username') }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" placeholder="johnathan@admin.com" class="form-control form-control-line @error('email') is-invalid @enderror" value="{{ $user->email }}" id="example-email">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('email') }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="password" class="form-control form-control-line @error('password') is-invalid @enderror">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('password') }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="password_confirmation" class="form-control form-control-line @error('password') is-invalid @enderror">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('password') }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Telephone 1</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="telephone1" placeholder="Johnathan Doe" class="form-control form-control-line @error('telephone1') is-invalid @enderror" value="{{ $user->telephone1 }}">
                                                            @error('telephone1')
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('telephone1') }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Telephone 2</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name="telephone2" placeholder="Johnathan Doe" class="form-control form-control-line @error('telephone2') is-invalid @enderror" value="{{ $user->telephone2 }}">
                                                            @error('telephone2')
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('telephone2') }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection