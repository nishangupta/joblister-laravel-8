<template>
  <div>
    <div class="card p-0 m-0">
      <div class="card-body p-3">
        <div class="d-flex align-items-center small mb-0">
          <i class="fas fa-search mr-1"></i>
          <strong>Refine Your Job Search</strong>
        </div>
        <a
          href="#"
          class="job-filter d-md-none d-none"
          data-toggle="collapse"
          data-target="#accordion"
          aria-expanded="true"
          aria-controls="accordion"
        >
          <i class="icon icon-list"></i> Filter
        </a>
      </div>
    </div>
    <div id="accordion">
      <div class="card border-top-0">
        <div class="card-body p-3" id="jobCategories">
          <div class="pb-0">
            <div class="card-title mb-1">Job Categories</div>
            <div class="card-body p-0">
              <div class="form-group">
                <select
                  name="job_category"
                  class="form-control"
                  placeholder="Filter by Job Category"
                  tabindex="-1"
                >
                  <option value="it and comm">It and comm</option>
                </select>
              </div>
            </div>
          </div>
          <hr class="my-3" />
          <div class="pb-0">
            <div class="card-title mb-1">Job Level</div>
            <div class="card-body p-0">
              <div class="form-group">
                <select
                  name="job_category"
                  class="form-control"
                  placeholder="Filter by Job Category"
                  tabindex="-1"
                >
                  <option value="it and comm">Top</option>
                </select>
              </div>
            </div>
          </div>
          <hr class="my-3" />
          <div class="pb-0">
            <div class="card-title mb-1">Eductation</div>
            <div class="card-body p-0">
              <div class="form-group">
                <select
                  name="job_category"
                  class="form-control"
                  placeholder="Filter by Job Category"
                  tabindex="-1"
                >
                  <option value="it and comm">Top</option>
                </select>
              </div>
            </div>
          </div>
          <hr class="my-3" />
          <div class="pb-0">
            <div class="card-title mb-1">Employment Type</div>
            <div class="card-body p-0">
              <div class="form-group">
                <select
                  name="job_category"
                  class="form-control"
                  placeholder="Filter by Job Category"
                  tabindex="-1"
                >
                  <option value="it and comm">Top</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>