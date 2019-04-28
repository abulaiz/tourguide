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

          <li class="nav-item @yield('jurusan')">
            <a class="nav-link" href="/jurusan">
              <i class="material-icons">vertical_split</i>
              <p>Data Jurusan</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">folder_shared</i>
              <p>Data Kelas</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">business</i>
              <p>Data Ruangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">extension</i>
              <p>Data Matakuliah</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">perm_contact_calendar</i>
              <p>Data Dosen</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">supervisor_account</i>
              <p>Data Mahasiswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">person_pin</i>
              <p>Data User</p>
            </a>
          </li>

          <li class="nav-item @yield('absensi')">
            <a class="nav-link" href="/absensi">
              <i class="material-icons">assigment</i>
              <p>Data Absensi</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">calendar_today</i>
              <p>Penjadwalan</p>
            </a>
          </li>     
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">launch</i>
              <p>Data Nilai</p>
            </a>
          </li>               

          <li class="nav-item @yield('nilai')">
            <a class="nav-link" href="/hasil_nilai">
              <i class="material-icons">tab</i>
              <p>Nilai</p>
            </a>
          </li>

        </ul>
      </div>
    </div>