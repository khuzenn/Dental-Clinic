<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
            <!-- Hoverable Table rows -->
            <div class="card pb-3 px-4">
              <!-- Table Header -->
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header fw-bold px-0 pt-3 pb-3">List Data Appointment</h5> 
              </div>

              <!-- Table Content -->
              <table id="pegawai" class="table table-hover">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Klinik</th>
                    <th class="text-center">Pasien</th>
                    <th class="text-center">Jam</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <?php 
                  $no = 1;
                  foreach ($list_appointment as $appointment) {
                  ?>
                  <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td class="text-center"><?= htmlspecialchars($appointment->tanggal); ?></td>
                    <td class="text-center"><?= htmlspecialchars($appointment->klinik); ?></td>
                    <td class="text-center"><?= htmlspecialchars($appointment->nama_pasien); ?></td>
                    <td class="text-center"><?= htmlspecialchars($appointment->jam); ?></td>
                    <td class="text-center">
                      <!-- Action Dropdown -->
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?= site_url('Appointment/updateStatus/' . $appointment->id_reservasi); ?>" onclick="return confirm('Are you sure you want to process this appointment?')">
                            <i class='bx bxs-hourglass'></i> Proses
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php 
                  $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!--/ Hoverable Table rows -->
        </div>
      </div>
      <!-- / Content -->
    </div>
  </div>
</div>
