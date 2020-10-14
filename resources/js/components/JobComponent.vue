<template>
  <div class="job-component">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-xl-4">
        <Sidebar />
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
      axios
        .get("/search/api")
        .then((res) => res.data)
        .then((posts) => {
          this.posts = posts;
        })
        .catch((err) => console.log(err.message));
    },
    getByCategory(categoryId) {
      axios
        .get(`/search/api?category_id=${categoryId}`)
        .then((res) => res.data)
        .then((data) => console.log(data))
        .catch((err) => console.log(err.message));
    },
    getByEducation(educationLevel) {
      axios
        .get(`/search/api?category_id=${educationLevel}`)
        .then((res) => res.data)
        .then((data) => console.log(data))
        .catch((err) => console.log(err.message));
    },
    getByjobLevel(jobLevel) {
      axios
        .get(`/search/api?category_id=${jobLevel}`)
        .then((res) => res.data)
        .then((data) => console.log(data))
        .catch((err) => console.log(err.message));
    },
    getByEmploymentType(employmentType) {
      axios
        .get(`/search/api?category_id=${employmentType}`)
        .then((res) => res.data)
        .then((data) => console.log(data))
        .catch((err) => console.log(err.message));
    },
  },
};
</script>

<style lang="scss" scoped>
</style>



