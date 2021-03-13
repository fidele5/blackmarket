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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('updateProduit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h5 class="card-title">About Product</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Product Name</label>
                                                    <input type="text" name="nom" id="firstName" class="form-control @error('nom') is-invalid @enderror" value="{{ $article->nom }}"> 
                                                    @error('nom')
                                                        <div class="invalid-feedback">{{ $errors->first('nom') }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                        </div>
                                                        <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" placeholder="price" aria-label="price" aria-describedby="basic-addon1" value="{{ $article->prix }}">
                                                        @error('prix')
                                                            <div class="invalid-feedback">{{ $errors->first('prix') }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select class="form-control @error('type_id') id-invalid @enderror" name="type_id" data-placeholder="Choose a Category" tabindex="1">
                                                        @foreach (Helper::getCategories() as $type)
                                                            <option value="{{ $type->id }}">{{ $type->libelle }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('type_id')
                                                        <div class="invalid-feedback">{{ $errors->first('type_id') }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <br/>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1" value="disponnible" name="etat" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Disponnible</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline2" value="vendu" name="etat" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Vendu</label>
                                                    </div>
                                                    @error('etat')
                                                        <div class="invalid-feedback">{{ $errors->first('etat') }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Commune</label>
                                                    <select class="form-control @error('commune_id') is-invalid @enderror" name="commune_id" data-placeholder="Choose a Category" tabindex="1">
                                                        @foreach ($communes as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('commune_id')
                                                        <div class="invalid-feedback">{{ $errors->first('commune_id') }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="desc">Text</label>
                                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="desc" rows="4">{{ $article->description }}</textarea>
                                                    @error('description')
                                                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="id" value="{{ $article->id }}">
                                        <input type="hidden" name="user_id" value="{{ $article->user_id }}">
                                       
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5 class="card-title mt-3">Upload Image</h5>
                                                <div class="btn btn-info waves-effect waves-light"><span>Upload Anonther Image</span>
                                                    <input type="file" name="photo" class="upload"> 
                                                </div>
                                                @error('photo')
                                                    <div class="invalid-feedback">{{ $errors->first('photo') }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions mt-5">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-dark">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
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
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
@endsection