<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-secondary">
            <span class="info-box-icon"><i class="fas fa-eye"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Hari ini</span>
                <span class="views-hari-ini info-box-number"></span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                    100% in 1 Day
                </span>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-md-up"></div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-secondary">
            <span class="info-box-icon"><i class="fas fa-eye"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Bulan lalu</span>
                <span class="views-bulan-kemarin info-box-number"></span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                    100% in 1 Month
                </span>
            </div>
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-secondary">
            <span class="info-box-icon"><i class="fas fa-eye"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Tahun lalu</span>
                <span class="views-tahun-kemarin info-box-number"></span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                    100% in 1 Year
                </span>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-secondary">
            <span class="info-box-icon"><i class="fas fa-eye"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total</span>
                <span class="views-total info-box-number"></span>

                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                    100% off all data
                </span>
            </div>
        </div>
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->

</div>

<hr class="pb-3">

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    <i class="mr-1 fas fa-chart-line"></i>
                    Perbulan
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body p-2" style="height: 500px;">
                <div id="curve_chart" style="width: 100%;height: 100%;"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    <i class="mr-1 fas fa-chart-line"></i>
                    Perhari
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body p-2" style="height: 300px;">
                <div id="hari_curve_chart" style="width: 100%;height: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    <i class="mr-1 fas fa-chart-line"></i>
                    Pertahun
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body p-2" style="height: 300px;">
                <div id="tahun_curve_chart" style="width: 100%;height: 100%;"></div>
            </div>
        </div>
    </div>
</div>