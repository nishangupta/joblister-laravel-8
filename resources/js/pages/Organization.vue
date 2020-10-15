<template>
  <div class="organization">
    <div class="card border shadow mb-5">
      <div class="card-header">Job Vacancy(s) By Designation/s</div>
      <div class="card-body">
        <div class="row">
          <div
            class="col-sm-12 col-md-4"
            v-for="company in companies"
            :key="company.id"
          >
            <div class="card-list-component">
              <a
                :href="`/employer/${company.id}-${company.title}`"
                target="_blank"
              >
                {{ company.title }}
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
  name: "organization",
  data() {
    return {
      companies: [],
    };
  },
  created() {
    this.$Progress.start();
    axios
      .get("/api/companies")
      .then((res) => res.data)
      .then((data) => {
        this.companies = data;
        this.$Progress.finish();
      })
      .catch((err) => {
        console.log(err);
        this.$Progress.fail();
      });
  },
};
</script>

