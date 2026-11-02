<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page wildan - Entri Data Penyewa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Admin_C/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Penyewa_C062/index') ?>">Data Penyewa</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Penyewa</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Entri Data Penyewa</h3>
                        </div>

                        <form action="<?= base_url('Penyewa_C062/simpan') ?>"
                              method="post"
                              enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="user_plg062">User Pelanggan</label>
                                    <input type="text" name="user_plg062"
                                           id="user_plg062" class="form-control"
                                           placeholder="Masukkan user pelanggan"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="Sandi062">Sandi</label>
                                    <input type="text" name="Sandi062"
                                           id="Sandi062" class="form-control"
                                           placeholder="Masukkan sandi"
                                           required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="Nik062">NIK</label>
                                            <input type="text" name="Nik062"
                                                   id="Nik062" class="form-control"
                                                   placeholder="Masukkan nik"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nm_lngkp062">Nama Lengkap</label>
                                            <input type="text" name="nm_lngkp062"
                                                   id="nm_lngkp062" class="form-control"
                                                   placeholder="Masukkan nama lengkap"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_hp062">Nomor HP</label>
                                            <input type="text" name="no_hp062"
                                                   id="no_hp062" class="form-control"

                                                   placeholder="Masukkan nomor hp"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="almt_lngkp062">Alamat Lengkap</label>
                                            <input type="text" name="almt_lngkp062"
                                                   id="almt_lngkp062" class="form-control"
                                                   placeholder="Masukkan alamat lengkap"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ft_ktp">Foto KTP</label>
                                    <input type="file" name="ft_ktp"
                                  id="ft_ktp" class="form-control"
                                           accept="image/*" required>
                                </div>

                                <div class="form-group">
                                    <label for="ft_sim_a">Foto SIM A</label>
                                    <input type="file" name="ft_sim_a"
                                           id="ft_sim_a" class="form-control"
                                           accept="image/*" required>
                                </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>

                                <a href="<?= base_url('Penyewa_C062/index') ?>"
                                   class="btn btn-secondary">
                                    Kembali
                                </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->