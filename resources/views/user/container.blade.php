@switch($option)
    @case("produits")
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <h4>Mes produits</h4>
            <div class="table-responsive">
            <table class="table table-hover margin-bottom-none">
                <thead>
                    <tr>
                        <th>Designation</th>
                        <th>Date ajout</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Auth::user()->articles as $data)
                        <tr>
                            <td><a class="text-medium navi-link" href="{{ route('articles.show', $data->id) }}">{{ $data->nom }}</a></td>
                            <td>{{ $data->created_at }}</td>
                            <td><span class="{{ ($data->etat == "disponible")?'text-info':'text-succes' }}">{{ $data->etat }}</span></td>
                            <td><span class="text-medium">${{ $data->prix }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div class="text-right"><a class="btn btn-link-primary margin-bottom-none" href="#"><i class="icon-download"></i>&nbsp;Order Details</a></div>
        @break
    @case("add")
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <h4>Ajouter un article</h4>
            <form class="row" action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="article-fn">Designation</label>
                        <input class="form-control champ" name="nom" type="text" placeholder="nom de l'article" id="article-fn" value="{{ old('nom') }}" >
                        
                        <div class="invalid-feedback">
                            
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="article-p">prix</label>
                        <input class="form-control champ" name="prix" type="number" placeholder="prix de l'article" id="article-p" value="{{ old('prix') }}" >
                       
                        <div class="invalid-feedback">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="custom-file mt-4">
                            <input class="custom-file-input champ" type="file" name="photo" id="file-input">
                            <label class="custom-file-label champ" for="file-input">Choisir la photo</label>
                            <div class="invalid-feedback">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="article-loc">Commune</label>
                        <select class="form-control champ" name="commune_id" id="article-loc">
                            <option disabled>Votre commune</option>
                            @foreach ($communes as $commune)
                                 <option value="{{ $commune->id }}">{{ $commune->nom }}</option>
                            @endforeach
                        </select>
                        
                        <div class="invalid-feedback">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="article-tyoe">Categorie</label>
                        <select class="form-control champ" name="type_id" id="article-type">
                            <option disabled>Categorie</option>
                            @foreach (Helper::getCategories() as $type)
                                 <option value="{{ $type->id }}">{{ $type->libelle }}</option>
                            @endforeach
                        </select>
                       
                        <div class="invalid-feedback">
                            
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="article-desc">Description</label>
                        <textarea class="form-control champ" name="description" id="article-desc" rows="3" placeholder="Tapez ici votre description...!" >{{ old('description')}}</textarea>
                        
                        <div class="invalid-feedback">
                            
                        </div>
                    
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                            <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                        </div>
                        <button class="btn btn-primary margin-right-none" type="submit" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Enregistrer</button>
                    </div>
                </div>
            </form>   
        @break

    @case("profile")
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <h4>Mon profil</h4>
            <form class="row" method="POST" action="{{ route('users.update', Auth::user()->id) }}">
                @method("PATCH")
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Nom</label>
                        <input class="form-control champ" name="nom" type="text" id="account-fn" value="{{ Auth::user()->nom }}" required>
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Prenom</label>
                        <input class="form-control champ" name="prenom" type="text" id="account-ln" value="{{ Auth::user()->prenom }}" required>
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-us">Username</label>
                        <input class="form-control champ" name="username" type="text" id="account-us" value="{{ Auth::user()->username }}" >
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">E-mail Address</label>
                        <input class="form-control champ" type="email" id="account-email" value="{{ Auth::user()->email }}" disabled>
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Phone Number</label>
                        <input class="form-control champ" name="telephone1" type="tel" id="account-phone" value="{{ Auth::user()->telephone1 }}" required>
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone2">Phone Number</label>
                        <input class="form-control champ" name="telephone2" type="tel" id="account-phone2" value="{{ Auth::user()->telephone2 }}">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">New Password</label>
                        <input class="form-control champ" type="password" name="password" id="account-pass">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Confirm Password</label>
                        <input class="form-control champ" type="password" name="password_confirmation" id="account-confirm-pass">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                            <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                        </div>
                        <button class="btn btn-primary margin-right-none" type="submit" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                    </div>
                </div>
            </form>              
        @break

    @case("adress")
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <h4>Mon adresse</h4>
        <hr class="padding-bottom-1x">
        <form class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-company">Company</label>
                    <input class="form-control" type="text" id="account-company" value="Bets Company Ltd.">
                </div>
              </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-country">Country</label>
                    <select class="form-control" id="account-country">
                        <option>Choose country</option>
                        <option>Australia</option>
                        <option>Canada</option>
                        <option>France</option>
                        <option>Germany</option>
                        <option>Switzerland</option>
                        <option selected>United States</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-city">City</label>
                    <select class="form-control" id="account-city">
                        <option>Choose city</option>
                        <option>Amsterdam</option>
                        <option>Berlin</option>
                        <option>Geneve</option>
                        <option selected>New York</option>
                        <option>Paris</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-zip">ZIP Code</label>
                    <input class="form-control" type="text" id="account-zip" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-address1">Address 1</label>
                    <input class="form-control" type="text" id="account-address1" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-address2">Address 2</label>
                    <input class="form-control" type="text" id="account-address2">
                </div>
            </div>
            <div class="col-12 padding-top-1x">
                <h4>Shipping Address</h4>
                <hr class="padding-bottom-1x">
                <div class="custom-control custom-checkbox d-block">
                    <input class="custom-control-input" type="checkbox" id="same_address" checked>
                    <label class="custom-control-label" for="same_address">Same as Contact Address</label>
                </div>
                <hr class="margin-top-1x margin-bottom-1x">
                <div class="text-right">
                    <button class="btn btn-primary margin-bottom-none" type="button" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your address updated successfuly.">Update Address</button>
                </div>
            </div>
        </form>
        @break
    
    @case('sells')
        <div class="padding-top-2x mt-2 hidden-lg-up"></div>
        <!-- Wishlist Table-->
        <h4>Mes ventes</h4>
        <div class="table-responsive wishlist-table margin-bottom-none">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#">Clear Wishlist</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Auth::user()->articles as $item)
                    <tr>
                        <td>
                            <div class="product-item"><a class="product-thumb" href="{{ route('articles.show', $item->id) }}"><img src="{{ asset('img/shop/cart/01.jpg') }}" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="{{ route('articles.show', $item->id) }}">{{ $item->nom }}</a></h4>
                                    <div class="text-lg text-medium text-muted">${{ $item->nom }}</div>
                                    <div>Availability:
                                        <div class="d-inline {{ ($item->is_active)?'text-success':'text-warning' }}">{{ ($item->is_active)?'En Stock':'vendu' }}</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center"><a class="remove-from-cart" href='#' data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="inform_me" checked>
                <label class="custom-control-label" for="inform_me">Inform me when item from my wishlist is available</label>
        </div>
        @break
    @default
        
@endswitch
<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('/adminn/assets/ajax/submit.form.js') }}"></script>
