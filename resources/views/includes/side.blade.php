            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4">
                <aside class="sidebar">
                    <div class="padding-top-2x hidden-lg-up"></div>
                    <!-- Shop Categories-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">Categories d'articles</h3>
                        <?php
                            $categories = Helper::getCategories();
                        ?>
                        <ul>
                            @foreach ($categories as $item)
                                <li class="has-children">
                                    <a href="{{ route('types.show', strtolower($item->id)) }}">{{ $item->libelle }}</a><span>({{ Helper::countCategories($item->id) }})</span>
                                </li>
                            @endforeach
                        </ul>
                    </section>
                </aside>
            </div>