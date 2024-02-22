<?= $this->extend('template/layout') ?>
<?= $this->section('main') ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Pengambilan</h5>
                        <p class="card-subtitle mb-0">Data diambil menggunakan API dari Backend App Gudang</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="tb_pengambilan" class="table border table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>Kode Pengambilan</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        moment.locale('id');
        var tb_pengambilan = $("#tb_pengambilan").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_"
            },
            ajax: {
                url: "<?php echo base_url('getAllPengambilan') ?>",
                type: "GET",
                dataSrc: "",
            },
            columns: [{
                    data: "kode_pengambilan",
                    render: function(data, type, row, meta) {
                        return '<p class="text-muted">' + data + '</p>';
                    }
                },
                {
                    data: "nama_barang",
                    render: function(data, type, row) {
                        return '<p class="text-muted">' + data + '</p>';
                    }
                },
                {
                    data: "jumlah",
                    render: function(data, type, row) {
                        return '<p class="text-muted">' + data + ' Unit</p>';
                    }
                },
                {
                    data: "status",
                    render: function(data, type, row) {
                        if (data === 'Menunggu Persetujuan') {
                            return '<span class="badge bg-warning">' + data + '</span>';
                        } else if (data === 'Di Setujui') {
                            return '<span class="badge bg-success">' + data + '</span>';
                        } else {
                            return '<span class="badge bg-danger">' + data + '</span>';
                        }

                    }
                },

            ],
            lengthChange: false,
            "searching": true,
            "dom": "<'row'" +
                "<'col-sm-12 d-flex align-items-center justify-content-start'l>" +
                "<'col-sm-12 d-flex align-items-center justify-content-end'f>" +
                ">" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    });
</script>
<?= $this->endSection() ?>