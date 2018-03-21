<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="has-arrow " href="{{url::to('/')}}" aria-expanded="false">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu">Начало</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow " href="{{url::to('/desinfo/')}}" aria-expanded="false">
                        <i class="mdi mdi-block-helper"></i>
                        <span class="hide-menu">Дезинформация/ Фейк</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{url::to('/desinfo/')}}">Всички</a>
                        </li>
                        <li>
                            <a href="{{url::to('/desinfo/')}}">Популярни</a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">Сортиране</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{url::to('/desinfo//filter/7')}}">Последните 7 дни</a>
                                </li>
                                <li>
                                    <a href="{{url::to('/desinfo/filter/30')}}">Последни 30 дни</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url::to('/desinfo/tags')}}">По Етикети</a>
                        </li>
                        <li>
                            <a href="{{url::to('/desinfo/suggest')}}">Предложете Новина</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="{{url::to('/statii')}}" aria-expanded="false">
                        <i class="mdi mdi-bullseye"></i>
                        <span class="hide-menu">Статии</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{url::to('/articles')}}">Всички</a>
                        </li>
                        <li>
                            <a href="{{url::to('/articles/tags/')}}">Етикети</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false">
                        <i class="mdi mdi-widgets"></i>
                        <span class="hide-menu">Списък Медии</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="widget-charts.html">Всички</a>
                        </li>
                        <li>
                            <a href="widget-charts.html">Последно Добавени</a>
                        </li>
                        <li>
                            <a href="widget-charts.html">По Етикети</a>
                        </li>
                        <li>
                            <a href="widget-charts.html">Добавете Медия</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false">
                        <i class="mdi mdi-table"></i>
                        <span class="hide-menu">Fact Checking</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="#">Очаквайте Скоро</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false">
                        <i class="mdi mdi-eye"></i>
                        <span class="hide-menu">Статистика</span>

                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="#">Очаквайте Скоро</a>
                        </li>


                    </ul>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>