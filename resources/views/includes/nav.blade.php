    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">Shop Categories</h3>
      </div>
      <nav class="offcanvas-menu">
        <?php
          $categories = Helper::getCategories();
        ?>
        <ul class="menu">
          @foreach ($categories as $item)
              <li class="has-children"><span><a href="{{ route('types.show', strtolower($item->id)) }}">{{ $item->libelle }}</a></span></li>
          @endforeach
        </ul>
      </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu">
      @if (Auth::check())
        <a class="account-link" href="{{ route('users.show', Auth::user()->id) }}">
          <div class="user-ava">
            <img src="{{ asset('img/account/'.Auth::user()->photo) }}" alt="{{ Auth::user()->username }}">
          </div>
          <div class="user-info">
            <h6 class="user-name">{{ Auth::user()->username }}</h6>
          </div>
        </a>
      @endif
        
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><a href="{{ route('home') }}"><span>Home</span></a></li>
          <li><a href="{{ route('articles.index') }}"><span>Articles</span></a></li>
          <li><a href="{{ route('types.index') }}"><span>Categories</span></a></li>
        </ul>
      </nav>
    </div>
    <!-- Topbar-->
    <div class="topbar">
      <div class="topbar-column">
        <a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@unishop.com</a>
        <a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a>
        <a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a>
        <a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a>
        <a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a>
      </div>
      <div class="topbar-column">
        <a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
      <!-- Search-->
      <form class="site-search" action="/search" method="post" role="search">
        <input type="text" name="site_search" placeholder="Type to search...">
        @csrf
        <div class="search-tools">
          <span class="clear-search">Clear</span>
          <span class="close-search"><i class="icon-cross"></i></span>
        </div>
      </form>
      <div class="site-branding">
        <div class="inner">
          <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
          <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          <!-- Site Logo--><a class="site-logo" href="/"><img src="{{ asset('img/logo/logo.png') }}" alt="Unishop"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>
          <li class="has-megamenu active"><a href="{{ route('home') }}"><span>Home</span></a></li>
          <li><a href="{{ route('articles.index') }}"><span>Articles</span></a></li>
          <li><a href="{{ route('types.index') }}"><span>Categories</span></a></li>
        </ul>
      </nav>
      <!-- Toolbar-->
      
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            <div class="search"><i class="icon-search"></i></div>
            @guest
            @if (Route::has('register'))
              <a href="{{ route('auth') }}" class="btn btn-outline-info" type="button">Login</a>
            @endif
            @else
            <div class="account"><a href="{{ route('users.show', Auth::user()->id) }}"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                <li class="sub-menu-user">
                  <div class="user-ava">
                    <img src="{{ asset('img/account/'.Auth::user()->photo) }}" alt="{{ Auth::user()->nom }}">
                  </div>
                  <div class="user-info">
                    <h6 class="user-name">{{ Auth::user()->nom }}</h6>
                  </div>
                </li>
                <li><a href="{{ route('users.show', Auth::user()->id) }}">My Profile</a></li>                 
                @if (Auth::user()->is_admin)
                  <li><a class="dropdown-item" href="/admin">Admin</a></li>                      
                @endif          
                <li class="sub-menu-separator"></li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>
              </ul>
            </div>
            <?php
              $data = Helper::getMyArticles(Auth::user()->id);
              $som = 0;
            ?>
           
            <div class="cart"><a href="{{ route('users.show', Auth::user()->id) }}"></a><i class="icon-bag"></i><span class="count">{{ Helper::countProducts(Auth::user()->id) }}</span><span class="subtotal">${{ Helper::sumPricesproducts(Auth::user()->id) }}</span>
              <div class="toolbar-dropdown">
               @foreach ($data as $item)
                  <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="{{ route('articles.show', $item->idart) }}"><img src="{{ asset('img/shop/products/'.$item->photo) }}" alt="Product"></a>
                    <div class="product"><a class="dropdown-product-title" href="{{ route('articles.show', $item->idart) }}">{{ $item->article }}</a><span class="dropdown-product-details">${{ $item->prix }}</span></div>
                  </div>
                  <?php $som += $item->prix ?>
               @endforeach
                <div class="toolbar-dropdown-group">
                  <div class="column"><span class="text-lg">Total:</span></div>
                  <div class="column text-right"><span class="text-lg text-medium">${{ $som }}&nbsp;</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="{{ route('users.show', Auth::user()->id) }}">Mes produits</a></div>
                </div>
              </div>
            </div>
            @endguest
          </div>
        </div>
      </div>
      
    </header>