
                <div class="col-md-2 collapse-horizontal" id="menu">
                    <div class="menu bg-white rounded shadow py-3 px-2">
                        <p class="mx-3" style="font-size: 1.5em;margin:0 auto;color: #555c5b;">--{{Auth()->user()->name}}--</p>
                        <hr>
                    @if(Auth()->user()->role == 'admin')
                        <nav class="flex-coloumn">
                            <a class="nav-link mb-2 active" style="color: #555c5b;" href="/dashboard"><i class="bi bi-speedometer"></i> Dashboard</a>
                            <a class="nav-link mb-2" style="color: #555c5b;" href="/tables"><i class="fas fa-table"></i> Siswa</a>
                            <a class="nav-link mb-2" style="color: #555c5b;" href="/user"><i class="bi bi-people-fill"></i> users</a>
                            <a class="nav-link mb-2" style="color: #555c5b;" href="/absen"><i class="fas fa-list"></i> Absen</a>
                            <a class="nav-link mb-2" style="color: #555c5b;" href="/laporan"><i class="fas fa-print"></i> Laporan</a>
                        </nav>
                        @else
                        
                        <nav class="flex-coloumn">
                            <a class="nav-link mb-2" style="color: #393b3b;" href="/dashboard"><i class="bi bi-speedometer"></i> Dashboard</a>
                            <a class="nav-link mb-2" style="color: #393b3b;" href="/tables"><i class="fas fa-table"></i> Tables</a>
                        </nav>
                        @endif
                    </div>
                </div>