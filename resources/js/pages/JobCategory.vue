<template>
  <div class="job-cateogory">
    <div class="card border shadow mb-5">
      <div class="card-header">Job Vacancy(s) By Category/s</div>
      <div class="card-body">
        <div class="row">
          <div
            class="col-sm-12 col-md-4"
            v-for="category in categories"
            :key="category.id"
          >
            <div class="card-list-component">
              <a
                :href="`/employer/${category.id}-${category.category_name}`"
                target="_blank"
              >
                {{ category.category_name }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "job-category",
  data() {
    return {
      categories: [],
    };
  },
  created() {
    this.$Progress.start();
    axios
      .get("/api/company-categories")
      .then((res) => res.data)
      .then((data) => {
        this.categories = data;
        this.$Progress.finish();
      })
      .catch((err) => {
        console.log(err);
        this.$Progress.fail();
      });
  },
};
</script>

<style>
</style>