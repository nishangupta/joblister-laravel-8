<template>
  <div class="job-component">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-xl-4">
        <Sidebar
          v-on:filterCategory="getByCategory"
          v-on:filterEmploymentType="getByEmploymentType"
          v-on:filterEducation="getByEducation"
          v-on:filterJobLevel="getByjobLevel"
        />
      </div>
      <div class="col-sm-12 col-md-7 col-xl-8">
        <SearchResult :posts="posts" />
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from "./Sidebar";
import SearchResult from "./SearchResult";

export default {
  name: "job-component",
  components: {
    Sidebar,
    SearchResult,
  },
  data() {
    return {
      posts: [],
    };
  },
  created() {
    this.getJobs();
  },
  methods: {
    getJobs() {
      this.$Progress.start();
      axios
        .get("/search/api")
        .then((res) => res.data)
        .then((data) => {
          this.posts = data;
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.$Progress.fail();
        });
    },
    getByCategory(categoryId) {
      this.$Progress.start();
      axios
        .get(`/search/api?category_id=${categoryId}`)
        .then((res) => res.data)
        .then((data) => {
          this.posts = data;
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.$Progress.fail();
        });
    },
    getByEducation(educationLevel) {
      this.$Progress.start();
      axios
        .get(`/search/api?category_id=${educationLevel}`)
        .then((res) => res.data)
        .then((data) => {
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.$Progress.fail();
        });
    },
    getByjobLevel(jobLevel) {
      this.$Progress.start();
      axios
        .get(`/search/api?category_id=${jobLevel}`)
        .then((res) => res.data)
        .then((data) => {
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.$Progress.fail();
        });
    },
    getByEmploymentType(employmentType) {
      this.$Progress.start();
      axios
        .get(`/search/api?category_id=${employmentType}`)
        .then((res) => res.data)
        .then((data) => {
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.$Progress.fail();
        });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>



