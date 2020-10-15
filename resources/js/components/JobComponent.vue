<template>
  <div class="job-component">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-xl-4">
        <Sidebar
          @get-by-category="getByCategory"
          @get-by-job-level="getByJobLevel"
          @get-by-employmentType="getByEmploymentType"
          @get-by-education="getByEducation"
        />
      </div>
      <div class="col-sm-12 col-md-7 col-xl-8">
        <div v-if="posts.data.length < 1">
          <p class="card-header">No Results</p>
          <div class="card-body bg-white text-center">
            <div class="card-text">
              <img
                src="images/search-not-found.png"
                alt="search-not-found-clip"
              />
              <h4>
                No Jobs found <br />
                <span class="text-muted font-size-12px"
                  >Please search for another keyword.</span
                >
              </h4>
            </div>
          </div>
        </div>
        <div class="card" v-else>
          <SearchResult
            :posts="posts.data"
            :from="posts.from"
            :to="posts.to"
            :total="posts.total"
          />

          <div class="my-4 text-center small">
            <div class="d-block py-2 text-muted">
              {{ posts.total }} Total Jobs found with matching search
            </div>
            <div class="d-flex justify-content-center">
              <pagination
                class="custom-pagination"
                :data="posts"
                @pagination-change-page="getJobs"
              ></pagination>
            </div>
          </div>
        </div>
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
    getJobs(page = 1) {
      this.$Progress.start();
      const query = this.getParameterByName("q", window.location.href);
      const category = this.getParameterByName(
        "category_id",
        window.location.href
      );
      if (query !== "" && query !== null) {
        axios
          .get("/api/search/?q=" + query)
          .then((res) => res.data)
          .then((data) => {
            this.posts = data;
            this.$Progress.finish();
          })
          .catch((err) => {
            console.log(err.message);
            this.$Progress.fail();
          });
      } else if (category !== "" && category !== null) {
        this.getByCategory(category);
      } else {
        axios
          .get(`/api/search?page=${page}`)
          .then((res) => res.data)
          .then((data) => {
            this.posts = data;
            console.log(data.data);
            this.$Progress.finish();
          })
          .catch((err) => {
            console.log(err.message);
            this.$Progress.fail();
          });
      }
    },
    getByCategory(categoryId) {
      this.$Progress.start();
      axios
        .get(`/api/search?category_id=${categoryId}`)
        .then((res) => res.data)
        .then((data) => {
          this.posts = data;
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.posts = [];
          this.$Progress.fail();
        });
    },
    getByEducation(educationLevel) {
      this.$Progress.start();
      axios
        .get(`/api/search?education_level=${educationLevel}`)
        .then((res) => res.data)
        .then((data) => {
          this.posts = data;
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.posts = [];
          this.$Progress.fail();
        });
    },
    getByJobLevel(jobLevel) {
      this.$Progress.start();
      axios
        .get(`/api/search?job_level=${jobLevel}`)
        .then((res) => res.data)
        .then((data) => {
          this.posts = data;
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.posts = [];
          this.$Progress.fail();
        });
    },
    getByEmploymentType(employmentType) {
      this.$Progress.start();
      axios
        .get(`/api/search?employment_type=${employmentType}`)
        .then((res) => res.data)
        .then((data) => {
          this.posts = data;
          this.$Progress.finish();
        })
        .catch((err) => {
          console.log(err.message);
          this.posts = [];
          this.$Progress.fail();
        });
    },
    getParameterByName(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return "";
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    },
  },
};
</script>

<style lang="scss" scoped>
</style>



