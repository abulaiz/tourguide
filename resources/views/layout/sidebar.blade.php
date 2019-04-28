    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../../../assets2/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item @yield('dashboard')">
            <a class="nav-link" href="/">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item @yield('submissions')">
            <a class="nav-link" href="/submissions">
              <i class="material-icons">assignment_ind</i>
              <p>Pengajuan Tour Guide</p>
            </a>
          </li>                
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="material-icons">account_balance</i>
              <p>Destinasi Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="material-icons">store</i>
              <p>Toko Buah Tangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="material-icons">supervisor_account</i>
              <p>Kelola Turis</p>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="material-icons">how_to_reg</i>
              <p>Kelola Tour Guide</p>
            </a>
          </li>                         
        </ul>
      </div>
    </div>