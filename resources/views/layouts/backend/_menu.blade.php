<aside class='sidebar'>
    <ul class='nav metismenu'>
        @can('USUARIOS')
        <li>
            <a aria-expanded='false' href='#'><i class='zmdi zmdi-accounts'></i>Usuários<span class='zmdi arrow'></span></a>
            <ul aria-expanded='false' class='nav nav-inside collapse'>
                <li class='inside-title'>Usuários</li>
                <li><a href='{{url('/restrito/empresas')}}'>Empresas</a></li>
                <li><a href='{{url('/restrito/usuarios')}}'>Usuários</a></li>
                <li><a href='{{url('/restrito/perfil-usuarios')}}'>Permissões dos Usuários</a></li>
                @can('SUPERADMIN')
                <li>
                    <p class='m-t-15 m-l-20 f-s-16' style='color: #546e7a'>Roles and Permissions</p>
                </li>
                <li><a href='{{url('/restrito/permissoes')}}'>Permissions</a></li>
                <li><a href='{{url('/restrito/papeis')}}'>Roles</a></li>
                <li><a href='{{url('/restrito/permissoes-perfil')}}'>Roles Permissions</a></li>
                @endcan
            </ul>
        </li>
        @endcan

        @can('MINHAS-FINANCAS')
        <li style='background-color: red'>
            <a href='#'><i class='zmdi zmdi-money'></i>Financeiro Cli
                <span class='zmdi arrow'></span>
            </a>
            <ul class='nav nav-inside collapse'>
                <li class='inside-title'>Financeiro</li>
                <li><a href='#'>Cotações (Clientes)</a></li>
                <li><a href='#'>Faturas (Clientes)</a></li>
                <li><a href='#'>Pagamentos (Clientes)</a></li>
            </ul>
        </li>
        @endcan

        @can('FINANCEIRO/CONTABILIDADE')
        <li>
            <a href='#'><i class='zmdi zmdi-money'></i>Financeiro
                <span class='zmdi arrow'></span>
            </a>
            <ul class='nav nav-inside collapse'>
                <li class='inside-title'>Financeiro</li>
                <li class='menu-child'>
                    <a aria-expanded='false' href='#'><i class='zmdi zmdi-email'></i>
                        Gestão Bytes<span class='zmdi arrow'></span>
                    </a>
                    <ul aria-expanded='false' class='nav nav-inside collapse'>
                        <li class='inside-title'>Gestão Bytes</li>
                        <li>
                            <p class='m-t-15 m-l-20 f-s-16' style='color: #546e7a'>Débitos</p>
                        </li>
                        <li><a href='{{url('restrito/despesas/categorias')}}'>Categorias</a></li>
                        <li><a href='{{url('restrito/despesas')}}'>Despesas</a></li>
                        <li>
                            <p class='m-t-15 m-l-20 f-s-16' style='color: #546e7a'>Precificações</p>
                        </li>
                        <li><a href='{{url('restrito/produtos')}}'>Produtos e Serviços</a></li>
                        <li><a href='{{url('restrito/impostos')}}'>Taxas e Impostos</a></li>
                    </ul>
                </li>
                <li><a href='#'>Cotações (Empresa)</a></li>
                <li><a href='#'>Faturas (Empresa)</a></li>
                <li><a href='#'>Pagamentos (Empresa)</a></li>
            </ul>
        </li>
        @endcan






        <li>
            <a href='{{url('restrito/projetos')}}'><i class='zmdi zmdi-developer-board'></i>Projetos
                <span class='zmdi arrow'></span>
            </a>
        </li>

        @can('POSTAGEM')
        <li>
            <a href='#'><i class='zmdi zmdi-blogger'></i>Blogs
                <span class='zmdi arrow'></span>
            </a>
            <ul class='nav nav-inside collapse'>
                <li class='inside-title'>Blogs</li>
                @can('CATEGORIAS')
                <li>
                    <p class='m-t-15 m-l-20 f-s-16' style='color: #546e7a'>Classificação</p>
                </li>
                <li><a href='{{url('restrito/posts/categorias')}}'>Categorias</a></li>
                @endcan
                @can('SUBCATEGORIAS')
                <li><a href='{{url('restrito/posts/subcategorias')}}'>SubCategorias/Páginas</a></li>
                @endcan
                @can('REACOES-POSTAGENS')
                <li><a href='{{url('restrito/posts/reacoes')}}'>Reações</a></li>
                @endcan

                @can('POSTAGEM')
                <li>
                    <p class='m-t-15 m-l-20 f-s-16' style='color: #546e7a'>Postagens</p>
                </li>
                <li><a href='{{url('restrito/posts/artigos')}}'>Artigos</a></li>
                @endcan
                @can('BANNERS')
                <li><a href='{{url('restrito/posts/banners')}}'>Banners</a></li>
                @endcan
                @can('PORTIFOLIO')
                <li><a href='{{url('restrito/posts/portifolio')}}'>Portifólio</a></li>
                @endcan
                @can('LIBERAR-DEPOIMENTOS')
                <li><a href='{{url('restrito/posts/liberar-depoimentos')}}'>Depoimentos</a></li>
                @endcan
            </ul>
        </li>
        @endcan
        <li>
            <a href='{{url('restrito/tickets')}}'>
                <i class='zmdi zmdi-labels'></i>Tickets
            </a>
        </li>

        @can('PRODUTOS/SERVICOS')
        <li>
            <a href='{{url('restrito/produtos-servicos')}}'><i class='zmdi zmdi-codepen'></i>Produtos e Serviços
                <span class='zmdi arrow'></span>
            </a>
        </li>
        @endcan




    </ul>
</aside>