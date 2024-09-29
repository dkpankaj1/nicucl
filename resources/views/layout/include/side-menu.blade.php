<ul id="side-menu">

    <li class="menu-title">Menu</li>
    <li>
        <a href="{{ route('dashboard') }}" class="tp-link">
            <i data-feather="home"></i>
            <span> Dashboard </span>
        </a>
    </li>

    <li class="menu-title">Banking</li>

    <li>
        <a href="#bankingMenu" data-bs-toggle="collapse">
            <i data-feather="dollar-sign"></i>
            <span>Banking</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="bankingMenu">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">Money Transfer</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Pending List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Success List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Reject List</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="menu-title">Mobile</li>

    <li>
        <a href="#mobileMenu" data-bs-toggle="collapse">
            <i data-feather="airplay"></i>
            <span>Mobile Recharge</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="mobileMenu">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Add New</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="menu-title">Services</li>

    <li>
        <a href="#adharUpdateMenu" data-bs-toggle="collapse">
            <i data-feather="check-square"></i>
            <span>Adhar Update</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="adharUpdateMenu">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">Pending List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Success List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Reject List</a>
                </li>
            </ul>
        </div>
    </li>

    <li>
        <a href="#panService" data-bs-toggle="collapse">
            <i data-feather="check-square"></i>
            <span>Pan Card</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="panService">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">Pending List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Success List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Reject List</a>
                </li>
            </ul>
        </div>
    </li>

    <li>
        <a href="#dlServiceMenu" data-bs-toggle="collapse">
            <i data-feather="check-square"></i>
            <span>Driving Licence</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="dlServiceMenu">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">Pending List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Success List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Reject List</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="menu-title">People</li>
    <li>
        <a href="#userMenu" data-bs-toggle="collapse">
            <i data-feather="user"></i>
            <span>Users </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="userMenu">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Add New</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="menu-title">Other</li>
    <li>
        <a href="#otherMenu" data-bs-toggle="collapse">
            <i data-feather="cpu"></i>
            <span>Drivers</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="otherMenu">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Add New</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="menu-title">Settings</li>

    <li>
        <a href="#chargesMenu" data-bs-toggle="collapse">
            <i data-feather="credit-card"></i>
            <span>Charges</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="chargesMenu">
            <ul class="nav-second-level">
                <li>
                    <a href="#" class="tp-link">List</a>
                </li>
                <li>
                    <a href="#" class="tp-link">Add New</a>
                </li>
            </ul>
        </div>
    </li>


    @if (auth()->check() && auth()->user()->account_type === \App\Enums\AccountType::SUPER_ADMIN)
        <li>
            <a href="{{ route('server.index') }}" class="tp-link">
                <i data-feather="server"></i>
                <span> Server </span>
            </a>
        </li>
    @endif



</ul>
