<?= $this->extend('template/layout') ?>
<?= $this->section('main') ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Barang</h5>
                        <p class="card-subtitle mb-0">Data diambil menggunakan API dari Backend App Gudang</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="tb_barang" class="table border table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
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
        var tb_barang = $("#tb_barang").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_"
            },
            ajax: {
                url: "<?php echo base_url('getAllBarang') ?>",
                type: "GET",
                dataSrc: "",
            },
            columns: [{
                    data: null,
                    render: function(data, type, row, meta) {
                        return '<p class="text-muted">' + (meta.row + 1) + '</p>';
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