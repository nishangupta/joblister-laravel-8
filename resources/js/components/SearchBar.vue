<template>
  <section class="search-page-banner-image">
    <div class="container px-0">
      <div class="py-4">
        <div class="row no-gutters">
          <div class="col-md-6 offset-md-3">
            <div class="row m-1">
              <div class="col-md-12 input-group">
                <input
                  type="text"
                  name="q"
                  class="form-control"
                  value=""
                  placeholder="Enter Designation, Skills, Company, etc"
                />
                <span class="input-group-append">
                  <button class="btn btn-success text-white pt-1">
                    <span class="icon-search"></span> Search Jobs
                  </button>
                </span>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 offset-md-3 row align-items-center text-center py-1"
          >
            <div class="col-6 col-md-3">
              <a href="/search/">All Jobs</a>
            </div>
            <div class="col-6 col-md-3">
              <a class="" href="/company/">by Organisation</a>
            </div>
            <div class="col-6 col-md-3">
              <a class="" href="/category/">by Job Category</a>
            </div>
            <div class="col-6 col-md-3">
              <a class="" href="/designation/">by Job Title</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style>
</style>