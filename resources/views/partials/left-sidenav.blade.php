<aside id="left-sidebar-nav">
  <ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="user-details cyan darken-2">
      <div class="row">
        <div class="col col s4 m4 l4">
          <img src="{{ asset('images/avatar/avatar-16.png') }}" alt="" class="circle responsive-img valign profile-image cyan">
        </div>
        <div class="col col s8 m8 l8">
          <p class="user-name">Selnia</p>
          <p class="user-role">Administrator</p>
        </div>
      </div>
    </li>
    <li class="no-padding">
      <ul class="collapsible" data-collapsible="accordion">
        <li class="bold {{Request::is('/')?'active':null}}">
          <a href="/" class="waves-effect waves-cyan"><i class="material-icons">dashboard</i>Dashboard</a>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold {{Request::is('msi/*')?'active':null}}">
              <a class="collapsible-header waves-effect waves-cyan {{Request::is('msi/*')?'active':null}}"><i class="material-icons">assignment</i>MSI</a>
              <div class="collapsible-body">
                <ul>
                  <li {{Request::is('msi/bincard')?'class=active':null}}><a href="{{ url('msi/bincard') }}">Bin Card</a></li>
                  <li {{Request::is('msi/stockcard')?'class=active':null}}><a href="{{ url('msi/stockcard') }}">Stock Card</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
    <i class="material-icons">menu</i>
  </a>
</aside>