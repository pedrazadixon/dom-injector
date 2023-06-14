<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Deploy element
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row gy-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p>Copy and paste this code in your site.</p>
                        <div class="col-12">
                            <pre class="p-2 rounded-0"><code><?= $script ?></code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <?= $this->Html->link(__('Back'), ["controller" => "Elements", "action" => "index"], ['class' => 'btn btn-danger']) ?>
            </div>

        </div>

    </div>
</div>