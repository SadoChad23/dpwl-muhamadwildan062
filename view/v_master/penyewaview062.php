<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page Novi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin_C/index') ?>">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <a href="<?= base_url('Penyewa_C062/create_penyewa062') ?>"
                  class="btn btn-primary mb-3">Tambah Data</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>User Pelanggan</th>
                            <th>Sandi</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>No. HP</th>
                            <th>Alamat Lengkap</th>
                            <th>Foto KTP</th>
                            <th>Foto SIM A</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                  <tbody>
                    <?php foreach ($datapenyewa as $m) : ?>
                      <tr>
                        <td><?= $m['user_plg062'] ?></td>
                        <td><?= $m['Sandi062'] ?></td>
                        <td><?= $m['Nik062'] ?></td>
                        <td><?= $m['nm_lngkp062'] ?></td>
                        <td><?= $m['no_hp062'] ?></td>
                        <td><?= $m['almt_lngkp062'] ?></td>
                        <td>
                        <?php if (!empty($m['ft_ktp'])) : ?>
                            <img src="<?= base_url('img/' . $m['ft_ktp']) ?>"
                                width="100" height="60"
                                style="object-fit: cover;"
                                alt="Foto KTP">
                        <?php else : ?>
                            Tidak ada foto
                        <?php endif; ?>
                    </td>

                    <td>
                        <?php if (!empty($m['ft_sim_a'])) : ?>
                            <img src="<?= base_url('img/' . $m['ft_sim_a']) ?>"
                                width="100" height="60"
                                style="object-fit: cover;"
                                alt="Foto SIM A">
                        <?php else : ?>
                            Tidak ada foto
                        <?php endif; ?>
                    </td>
                        <td>
                          <a href="<?= base_url('Penyewa_C062/edit/' . $m['user_plg062']) ?>" class="btn btn-warning btn-sm">Edit</a>
                          <a href="<?= base_url('Penyewa_C062/hapus/' . $m['user_plg062']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus penyewa ini?')">Hapus</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    <!-- Data penyewa -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->