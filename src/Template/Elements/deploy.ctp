<div class="p-3">

    <div class="row gy-3">

        <div class="col-12">
            <pre><code><?= $script ?></code></pre>
        </div>

        <div class="col-12">
            <?= $this->Html->link(__('Back'), ["controller" => "Elements", "action" => "index"], ['class' => 'btn btn-danger']) ?>
        </div>

    </div>


</div>