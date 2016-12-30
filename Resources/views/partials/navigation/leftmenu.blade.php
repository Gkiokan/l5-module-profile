
<div class='panel panel-default panel-menu'>
    <div class="panel-title">
          <div class="panel-heading">
              Profile Menu
          </div>
    </div>
    <div class="panel-body">
        <div class='list-group'>
            <a class="{{ Menu::is('profile.index') ? 'active' : '' }} list-group-item" href="{{ route('profile.index') }}"> User Profile </a>
            <a class="{{ Menu::is('profile.settings') ? 'active' : '' }} list-group-item" href="{{ route('profile.settings') }}"> Profile Settings </a>
            {{-- <a class="{{ Menu::is('/') ? 'active' : '' }} list-group-item"> ??? </a> --}}
        </div>
    </div>
</div>
