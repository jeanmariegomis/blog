<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
            <ul class="menu-content">
              <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}"><a href="{{ route('admin.dashboard') }}" data-i18n="nav.dash.main" class="menu-item">Dashboard</a>
              </li>
           
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-whatshot"></i><span data-i18n="nav.advance_cards.main" class="menu-title">Catégorie</span></a>
            <ul class="menu-content">
              <li class="{{ Request::is('admin/categorie*') ? 'active': '' }}"><a href="{{ route('categorie.create') }}" data-i18n="nav.cards.card_statistics" class="menu-item">Ajouter Catégorie</a>
              </li>
              <li class="{{ Request::is('admin/categorie*') ? 'active': '' }}"><a href="{{ route('categorie.index') }}" data-i18n="nav.cards.card_charts" class="menu-item">Liste Catégorie</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Produit</span></a>
            <ul class="menu-content">
              <li class="{{ Request::is('admin/produit*') ? 'active': '' }}"><a href="{{ route('produit.create') }}" data-i18n="nav.page_layouts.1_column" class="menu-item">Ajouter Produit</a>
              </li>
              <li class="{{ Request::is('admin/produit*') ? 'active': '' }}"><a href="{{ route('produit.index') }}" data-i18n="nav.page_layouts.2_columns" class="menu-item">Liste Produit</a>
              </li>
              
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Stock</span></a>
            <ul class="menu-content">
              <li class="{{ Request::is('admin/entreestock*') ? 'active': '' }}"><a href="{{ route('entreestock.create') }}" data-i18n="nav.invoice.invoice_template" class="menu-item">Entré</a>
              </li>
              <li class="{{ Request::is('admin/entreestock*') ? 'active': '' }}"><a href="{{ route('entreestock.index') }}" data-i18n="nav.invoice.invoice_template" class="menu-item">Liste</a>
              </li>
              
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Fournisseur</span></a>
            <ul class="menu-content">
              <li class="{{ Request::is('admin/fournisseur*') ? 'active': '' }}"><a href="{{ route('fournisseur.create') }}" data-i18n="nav.cards.card_bootstrap" class="menu-item">Ajouter Fournisseur</a>
              </li>
              <li class="{{ Request::is('admin/fournisseur*') ? 'active': '' }}"><a href="{{ route('fournisseur.index') }}" data-i18n="nav.cards.card_actions" class="menu-item">Liste Fournisseur</a>
              </li>
            </ul>
          </li>
          
          <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">Client</span></a>
            <ul class="menu-content">
              <li class="{{ Request::is('admin/client*') ? 'active': '' }}"><a href="{{ route('client.create') }}" data-i18n="nav.content.content_grid" class="menu-item">Nouveau Client</a>
              </li>
              <li class="{{ Request::is('admin/client*') ? 'active': '' }}"><a href="{{ route('client.index') }}" data-i18n="nav.content.content_typography" class="menu-item">Liste Client</a>
              </li>
              
             
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">Commande</span></a>
            <ul class="menu-content">
              <li class="{{ Request::is('admin/commande*') ? 'active': '' }}"><a href="{{ route('commande.create') }}" data-i18n="nav.components.component_alerts" class="menu-item">Nouveau commande</a>
              </li>
              <li class="{{ Request::is('admin/commande*') ? 'active': '' }}"><a href="{{ route('commande.index') }}" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item">Liste commande</a>
              </li>
    
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-eye6"></i><span data-i18n="nav.icons.main" class="menu-title">Reglement</span></a>
            <ul class="menu-content">
              <li><a href="icons-feather.html" data-i18n="nav.icons.icons_feather" class="menu-item">Feather</a>
              </li>
              <li><a href="icons-ionicons.html" data-i18n="nav.icons.icons_ionicons" class="menu-item">Ionicons</a>
              </li>
           
            </ul>
          </li>
          
          <li class=" nav-item"><a href="#"><i class="icon-bar-graph-2"></i><span data-i18n="nav.google_charts.main" class="menu-title">google Charts</span></a>
            <ul class="menu-content">
              <li><a href="google-bar-charts.html" data-i18n="nav.google_charts.google_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="google-line-charts.html" data-i18n="nav.google_charts.google_line_charts" class="menu-item">Line charts</a>
              </li>
              
            </ul>
          </li>
          
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->