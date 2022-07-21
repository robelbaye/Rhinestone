<nav class="bottom-navbar">
    <div class="container">
        <ul class="nav page-navigation">
            <li class="nav-item">
                <a class="nav-link  {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <span class="menu-title"><b>Dashboard</b></span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link {{ Route::is('contacts.*') ? 'active' : '' }}" href="{{ route('contacts.index') }}">
                    <span class="menu-title"><b>Contacts</b></span>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="menu-title"><b>Contacts</b></span>
                    <i class="fa fa-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link {{ Route::is('contacts.*') ? 'active' : '' }}" href="{{ route('contacts.index') }}"><b>Old Contact</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="/merged"><b>Merged Contact</b></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Route::is('invention-disclosures.*') ? 'active' : '' }}" href="{{ route('invention-disclosures.index') }}">
                    <span class="menu-title"><b>Invention Disclosures</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="menu-title"><b>Country</b></span>
                    <i class="fa fa-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="{{ route('patent') }}"><b>Patent</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('design') }}"><b>Design</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('trademark') }}"><b>Trademark</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="/autofill"><b>Auto-Fill Test</b></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/performance">
                    <span class="menu-title"><b>Performance</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/invoice">
                    <span class="menu-title"><b>Invoices</b></span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="/settings">
                    <span class="menu-title"><b>Settings</b></span>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="menu-title"><b>Settings</b></span>
                    <i class="fa fa-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="/settings"><b>Settings</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="/usersmgt"><b>Account Management</b></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="menu-title"><b>Report</b></span>
                    <i class="fa fa-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="#"><b>Invoices</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Inventors</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Applicant</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Licencees</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Licensors</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Agents</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Patents</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Designs</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Inventions</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><b>Performance</b></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>