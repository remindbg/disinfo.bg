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
                    <a class="has-arrow " href="#')}}" aria-expanded="false">
                        <i class="mdi mdi-block-helper"></i>
                        <span class="hide-menu">Дезинформация/ Фейк</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="#">Всички</a>
                        </li>
                        <li>
                            <a href="#">Популярни</a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">Сортиране</a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="disabled">
                                    <a href="#">Последните 7 дни</a>
                                </li>
                                <li>
                                    <a href="#">Последни 30 дни</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">По Етикети</a>
                        </li>
                        <li>
                            <a href="#">Предложете Новина</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false">
                        <i class="mdi mdi-bullseye"></i>
                        <span class="hide-menu">Статии</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @foreach($headercats as $cat)
                            <li>
                                <a href="/articles/{{$cat->slug}}/">{{$cat->name}}</a>
                            </li>
                        @endforeach()
                            <li>
                                <a href="{{url::to('/articles')}}">Всички</a>
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
                            <a href="#">Всички</a>
                        </li>
                        <li>
                            <a href="#">Последно Добавени</a>
                        </li>
                        <li>
                            <a href="#">По Етикети</a>
                        </li>
                        <li>
                            <a href="#">Добавете Медия</a>
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