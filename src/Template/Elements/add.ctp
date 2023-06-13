<div class="p-3">

    <?= $this->Form->create($element) ?>

    <div class="row gy-3">

        <div class="col-12">
            <?= $this->Form->control('title', ['placeholder' => 'title', 'class' => 'form-control form-control-lg', 'label' => false]) ?>
        </div>

        <div class="col-4">
            <label>HTML</label>
            <?= $this->Form->textarea('html', ['class' => 'form-control', 'style' => 'width: 100%;']) ?>
        </div>

        <div class="col-4">
            <label>CSS</label>
            <?= $this->Form->textarea('css', ['class' => 'form-control', 'style' => 'width: 100%;']) ?>
        </div>

        <div class="col-4">
            <label>JS</label>
            <?= $this->Form->textarea('js', ['class' => 'form-control', 'style' => 'width: 100%;']) ?>
        </div>

        <!-- <div class="col-12">
            <sl-split-panel style="--min: 40px;">
                <div slot="start" style="height: 200px;">
                    <div>Html</div>
                    <div>
                        <?= $this->Form->textarea('html', ['style' => 'width: 100%;']) ?>
                    </div>
                </div>
                <div slot="end" style="height: 200px;">
                    <sl-split-panel style="--min: 40px; --max: calc(100% - 40px);">
                        <div slot="start" style="height: 200px;">
                            <div>Css</div>
                            <?= $this->Form->textarea('css', ['style' => 'width: 100%;']) ?>
                        </div>
                        <div slot="end" style="height: 200px;">
                            <div>Js</div>
                            <?= $this->Form->textarea('js', ['style' => 'width: 100%;']) ?>
                        </div>
                    </sl-split-panel>
                </div>
            </sl-split-panel>
        </div> -->


        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">schedules</h3>
                </div>
                <div class="card-body">

                    <table class="table table-sm">
                        <tr>
                            <th>day</th>
                            <th>status</th>
                            <th>from</th>
                            <th>to</th>
                        </tr>
                        <tr>
                            <td>monday</td>
                            <td>
                                <div class="form-check mb-3">
                                    <input class="form-check-input day_enable" type="checkbox" checked id="monday_enable" name="monday_enable">
                                    <label class="form-check-label" for="monday_enable">enable</label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control monday_time" type="time" id="monday_from" name="monday_from" value="00:00:00">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control monday_time" type="time" id="monday_to" name="monday_to" value="23:59:59">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>tuesday</td>
                            <td>
                                <div class="form-check mb-3">
                                    <input class="form-check-input day_enable" type="checkbox" checked id="tuesday_enable" name="tuesday_enable">
                                    <label class="form-check-label" for="tuesday_enable">enable</label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control tuesday_time" type="time" id="tuesday_from" name="tuesday_from" value="00:00:00">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control tuesday_time" type="time" id="tuesday_to" name="tuesday_to" value="23:59:59">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>wednesday</td>
                            <td>
                                <div class="form-check mb-3">
                                    <input class="form-check-input day_enable" type="checkbox" checked id="wednesday_enable" name="wednesday_enable">
                                    <label class="form-check-label" for="wednesday_enable">enable</label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control wednesday_time" type="time" id="wednesday_from" name="wednesday_from" value="00:00:00">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control wednesday_time" type="time" id="wednesday_to" name="wednesday_to" value="23:59:59">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>thursday</td>
                            <td>
                                <div class="form-check mb-3">
                                    <input class="form-check-input day_enable" type="checkbox" checked id="thursday_enable" name="thursday_enable">
                                    <label class="form-check-label" for="thursday_enable">enable</label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control thursday_time" type="time" id="thursday_from" name="thursday_from" value="00:00:00">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control thursday_time" type="time" id="thursday_to" name="thursday_to" value="23:59:59">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>friday</td>
                            <td>
                                <div class="form-check mb-3">
                                    <input class="form-check-input day_enable" type="checkbox" checked id="friday_enable" name="friday_enable">
                                    <label class="form-check-label" for="friday_enable">enable</label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control friday_time" type="time" id="friday_from" name="friday_from" value="00:00:00">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control friday_time" type="time" id="friday_to" name="friday_to" value="23:59:59">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>saturday</td>
                            <td>
                                <div class="form-check mb-3">
                                    <input class="form-check-input day_enable" type="checkbox" checked id="saturday_enable" name="saturday_enable">
                                    <label class="form-check-label" for="saturday_enable">enable</label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control saturday_time" type="time" id="saturday_from" name="saturday_from" value="00:00:00">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control saturday_time" type="time" id="saturday_to" name="saturday_to" value="23:59:59">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>sunday</td>
                            <td>
                                <div class="form-check mb-3">
                                    <input class="form-check-input day_enable" type="checkbox" checked id="sunday_enable" name="sunday_enable">
                                    <label class="form-check-label" for="sunday_enable">enable</label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control sunday_time" type="time" id="sunday_from" name="sunday_from" value="00:00:00">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input class="form-control sunday_time" type="time" id="sunday_to" name="sunday_to" value="23:59:59">
                                </div>
                            </td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>

        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">element position</h3>
                </div>
                <div class="card-body">

                    <p>try to load element in this secction of your site</p>

                    <div class="row">
                        <div class="col-6">

                            <div class="mb-3">
                                <div>
                                    <select class="form-select">
                                        <option>after open head</option>
                                        <option>before close head</option>
                                        <option>after open head</option>
                                        <option>before close head</option>
                                        <option>custom css selector</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="css selector">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <?= $this->Html->link(__('Cancel'), ["controller" => "Elements", "action" => "index"], ['class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Preview'), "##", ['class' => 'btn btn-info']) ?>
            <?= $this->Form->button(__('Publish'), ['class' => 'btn btn-primary']) ?>
        </div>

    </div>

    <?= $this->Form->end() ?>

</div>

<?php $this->start('css') ?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.4.0/dist/themes/light.css" /> -->
<?php $this->end() ?>

<?php $this->start('script') ?>
<!-- <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.4.0/dist/shoelace-autoloader.js"></script> -->
<?php $this->end() ?>