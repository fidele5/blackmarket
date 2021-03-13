                <div class="col-lg-4">
                    <aside class="user-info-wrapper">
                        <div class="user-cover" style="background-image: url({{ asset('img/account/user-cover-img.jpg') }});">
                            <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-medal"></i>290 points</div>
                        </div>
                        <div class="user-info">
                            <div class="user-avatar">
                                <input type="file" class="edit-avatar" name="avatar" target="{{ route('upload') }}" token="{{ csrf_token() }}"/>
                                <img src="{{ asset('img/account/'.Auth::user()->photo) }}" alt="User"></div>
                            <div class="user-data">
                                <h4>{{ Auth::user()->username }}</h4><span>inscrit le {{ Auth::user()->created_at }}</span>
                            </div>
                        </div>
                    </aside>
                    <nav class="list-group">
                        <a class="list-group-item account with-badge" href="{{ route('account', 'produits') }}"><i class="icon-bag"></i>Mes produits<span class="badge badge-primary badge-pill">{{ Helper::countProducts(Auth::user()->id) }}</span></a>
                        <a class="list-group-item account" href="{{ route('account', 'profile') }}"><i class="icon-head"></i>Mon compte</a>
                        <a class="list-group-item account" href="{{ route('account', 'adress') }}"><i class="icon-map"></i>Addresse</a>
                        <a class="list-group-item account with-badge" href="{{ route('account', 'sells') }}"><i class="icon-heart"></i>Ventes<span class="badge badge-primary badge-pill">{{ Helper::soldProducts(Auth::user()->id) }}</span></a>
                        <a class="list-group-item account" href="{{ route('account', 'add') }}"><i class="icon-plus"></i> Ajouter un article</a>
                    </nav>
                </div>