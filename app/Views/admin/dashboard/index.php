<?= $this->extend('admin/template/template'); ?>
<?= $this->Section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl d-flex flex-wrap">
        <div class="row">
            <div class="col-lg-6 mb-4 mt-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah faq</h4>
                        <div class="stats-figure"><?= $faqCount; ?></div>
                        <div class="stats-meta text-success"></div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="<?= base_url('/admin/faq/index') ?>"></a>
                </div><!--//app-card-->
            </div><!--//col-->

            <div class="col-lg-6 mb-4 mt-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah Faq Category</h4>
                        <div class="stats-figure"><?= $faqCCount; ?></div>
                        <div class="stats-meta text-success"></div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="<?= base_url('/admin/faqC/index') ?>"></a>
                </div><!--//app-card-->
            </div><!--//col-->
        </div><!--//row-->

        <div class="row">
            <div class="col-lg-6 mb-4 mt-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah Testimonial</h4>
                        <div class="stats-figure"><?= $testimonialCount; ?></div>
                        <div class="stats-meta text-success"></div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="<?= base_url('/admin/testimonial/index') ?>"></a>
                </div><!--//app-card-->
            </div><!--//col-->

            <div class="col-lg-6 mb-4 mt-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah Usp</h4>
                        <div class="stats-figure"><?= $uspCount; ?></div>
                        <div class="stats-meta text-success"></div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="<?= base_url('/admin/usp/index') ?>"></a>
                </div><!--//app-card-->
            </div><!--//col-->
        </div><!--//row-->
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content') ?>
