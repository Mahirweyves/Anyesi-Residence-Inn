<nav class="sidebar sidebar-offcanvas" id="sidebar">    
        <ul class="nav">
          <div class="nav-item nav-category sidebar-brand-wrapper fixed-top">
            <a href="/" class="mt-2"><img src="{{ asset('assets/img/logo.png') }}" href="{{url('/')}}" style="height:60px; width:120px;"></a>
          </div>

          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/')}}">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/bookings')}}">
              <span class="menu-icon">
                <i class="mdi mdi-clock"></i>
              </span>
              <span class="menu-title">Bookings</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('All_rooms')}}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-marked"></i>
              </span>
              <span class="menu-title">Rooms</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/contacts')}}">
              <span class="menu-icon">
                <i class="mdi mdi-cellphone-android"></i>
              </span>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          
          <!--<#x-app-layout>
                
          <#/x-app-layout>-->
          
          <div class="nav-item menu-items">
            <form method="POST" action="{{ route('logout') }}" x-data>
              @csrf

              <x-button class="nav-link" style="color:#41a39f;" href="{{ route('logout') }}"
                  @click.prevent="$root.submit();">
                    <span class="menu-icon">
                      <i class="mdi mdi-logout"></i>
                    </span>
                  {{ __('Log Out') }}
              </x-button>
            </form>
          </div>
        </ul>
      </nav>
      