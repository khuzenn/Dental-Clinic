<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <!-- Message -->
          <?php if (!empty($message)) { ?>
            <div class="col-xxl-3">
              <!--begin::Alert-->
              <div class="alert alert-success alert-dismissible position-fixed" style="top: 20px; right: 20px;" role="alert">
                <!--begin::Content-->
                <div class="d-flex flex-column pe-0 pe-sm-10">
                  <h4 class="fw-bold">Pesan</h4>
                  <span><?php echo $message; ?></span>
                </div>
                <!--end::Content-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <!--end::Close-->
              </div>
              <!--end::Alert-->
            </div>
          <?php } ?>

          <!-- Breadcrumb -->
          <span>
            <?php foreach ($breadcrumbs as $breadcrumb) { ?>
              <span class="<?php echo $breadcrumb['class']; ?>">
                <?php echo ($breadcrumb['active'] == TRUE) ? '<a href="' . $breadcrumb['href'] . '" class="pe-3 text-muted">' : NULL; ?>
                <?php echo $breadcrumb['text']; ?>
                <?php echo ($breadcrumb['active'] == TRUE) ? '</a>' : NULL; ?>
              </span>
            <?php } ?>
          </span>
          <div class="row pt-2">
            <!-- Basic Layout -->
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h4 class="mb-0 fw-bold">Pasien</h4>
                  <small class="text-muted float-end">Tambah Pasien</small>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" role="form" action="<?php echo $action; ?>" method="POST">
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Klinik</label>
                      <div class="col-sm-10">
                          <select name="klinik" class="form-select" data-control="select2" data-placeholder="Pilih Klinik . . .">
                              <option value="">Pilih Klinik</option>
                              <?php foreach ($list_klinik as $klinik): ?>
                                  <option value="<?= encrypt_url($klinik->id_klinik); ?>" <?= ($klinik->id_klinik == $selected_klinik) ? 'selected' : ''; ?>>
                                      <?= $klinik->klinik; ?>
                                  </option>
                              <?php endforeach; ?>
                          </select>
                          <span style="color: red;"><?= form_error('klinik'); ?></span>
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kategori Pasien</label>
                        <div class="col-sm-10">
                            <select name="kategori_pasien" id="kategori_pasien" class="form-select" data-control="select2" data-placeholder="Pilih Klinik . . .">
                                <option value="">Pilih Kategori Pasien</option>
                                <option value="Umum">Umum</option>
                                <option value="Orthodentist">Orthodentist</option>
                            </select>
                            <span style="color: red;"><?= form_error('kategori_pasien'); ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Pasien . . ." autocomplete="off" value="<?php if (isset($nama)) { echo $nama; } ?>">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Pasien. . ." autocomplete="off" value="<?php if (isset($alamat)) { echo $alamat; } ?>">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">No Hp</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nohp" placeholder="Masukkan No Hp Pasien. . ." autocomplete="off" value="<?php if (isset($nohp)) { echo $nohp; } ?>">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <input type="radio" name="jenis_kelamin" class="form-check-input" value="P">&nbsp Pria &nbsp
                        <input type="radio" name="jenis_kelamin" class="form-check-input" value="W">&nbsp Wanita
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal_lahir" autocomplete="off" value="<?php if (isset($tanggal_lahir)) { echo $tanggal_lahir; } ?>">
                      </div>
                    </div>
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">
                          <i class='bx bx-save'></i>&nbsp;Simpan
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->
      </div>
    </div>
  </div>
</div>
