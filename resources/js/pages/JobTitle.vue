<template>
  <div class="organization">
    <div class="card border shadow mb-5">
      <div class="card-header">Job Vacancy(s) By Job Title/s</div>
      <div class="card-body">
        <div class="row">
          <div
            class="col-sm-12 col-md-4"
            v-for="(index, job) in jobs"
            :key="job.id"
          >
            <div class="card-list-component">
              <a :href="`/job/${index}-${job}`" target="_blank">
                {{ job }}
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
      jobs: [],
    };
  },
  created() {
    this.$Progress.start();
    axios
      .get("/api/job-titles")
      .then((res) => res.data)
      .then((data) => {
        this.jobs = JSON.parse(JSON.stringify(data));
        this.$Progress.finish();
      })
      .catch((err) => {
        console.log(err);
        this.$Progress.fail();
      });
  },
};
</script>

