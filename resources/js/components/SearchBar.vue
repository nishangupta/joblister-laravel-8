<template>
  <section class="search-bar mt-2 px-0">
    <div class="py-4">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="row m-1">
            <div class="col-md-12 input-group">
              <input
                type="text"
                name="q"
                class="form-control"
                placeholder="Job title"
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
          class="col-md-6 offset-md-3 row align-items-center small text-center my-2"
        >
          <div class="col-3 col-md-3 mt-md-4">
            <router-link to="/">All Jobs</router-link>
          </div>
          <div class="col-3 col-md-3 mt-md-4">
            <router-link to="/jobs-by-organization"
              >By Organisation</router-link
            >
          </div>
          <div class="col-3 col-md-3 mt-md-4">
            <router-link to="/jobs-by-category">By Job Category</router-link>
          </div>
          <div class="col-3 col-md-3 mt-md-4">
            <router-link to="/jobs-by-title">By Job Title</router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style scoped>
.search-bar {
  background-color: #f5fdff;
}
</style>>
