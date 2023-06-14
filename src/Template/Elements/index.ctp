      <!-- Page header -->
      <div class="page-header d-print-none">
          <div class="container-xl">
              <div class="row g-2 align-items-center">
                  <div class="col">
                      <h2 class="page-title">
                          Elements
                      </h2>
                  </div>
                  <!-- Page title actions -->
                  <div class="col-auto ms-auto d-print-none">
                      <div class="d-flex">
                          <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Search..." />
                          <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M12 5l0 14" />
                                  <path d="M5 12l14 0" />
                              </svg>
                              New element
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
          <div class="container-xl">



              <div class="row">


                  <div class="col-12">
                      <div class="card">

                          <table class="table card-table table-vcenter text-nowrap">
                              <thead>
                                  <tr>
                                      <th class="w-1">Id</th>
                                      <th>Title</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($elements as $element) : ?>
                                      <tr>
                                          <td><span class="text-secondary"><?= $element->id ?></span></td>
                                          <td><a href="<?= $this->Url->build(['action' => 'update', $element->id]) ?>" class="text-reset" tabindex="-1"><?= h($element->title) ?></a></td>
                                          <td>
                                              <div class="btn-list flex-nowrap justify-content-end">
                                                  <a href="<?= $this->Url->build(['action' => 'update', $element->id]) ?>" class="btn">
                                                      Update
                                                  </a>
                                                  <div class="dropdown">
                                                      <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">Actions</a>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="<?= $this->Url->build(['action' => 'deploy', $element->id]) ?>">Deploy</a>
                                                          <?= $this->Form->postLink('Delete', ['action' => 'delete', $element->id], ['confirm' => __('Are you sure you want to delete # {0}?', $element->id), 'class' => 'dropdown-item text-danger']) ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                  <?php endforeach; ?>
                              </tbody>
                          </table>

                          <div class="card-footer d-flex align-items-center">
                              <!-- <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p> -->
                              <p class="m-0 text-secondary"><?= $this->Paginator->counter(['format' => __('Showing {{current}} record(s) out of {{count}} total')]) ?></p>
                              <ul class="pagination m-0 ms-auto">
                                  <?= $this->Paginator->first('<< ' . __('first')) ?>
                                  <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                  <?= $this->Paginator->numbers() ?>
                                  <?= $this->Paginator->next(__('next') . ' >') ?>
                                  <?= $this->Paginator->last(__('last') . ' >>') ?>
                              </ul>
                          </div>
                      </div>
                  </div>

              </div>


          </div>
      </div>