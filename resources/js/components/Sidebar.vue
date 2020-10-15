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
                  @change="filterCategory($event)"
                >
                  <option disabled selected value>
                    -- select an option --
                  </option>
                  <option
                    v-for="category in categories"
                    :value="category.id"
                    :key="category.id"
                  >
                    {{ category.category_name }}
                  </option>
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
                  @change="filterJobLevel($event)"
                >
                  <option disabled selected value>
                    -- select an option --
                  </option>
                  <option value="Senior level">Senior level</option>
                  <option value="Mid level">Mid level</option>
                  <option value="Top level">Top level</option>
                  <option value="Entry level">Entry level</option>
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
                  @change="filterEducation($event)"
                >
                  <option disabled selected value>
                    -- select an option --
                  </option>
                  <option value="Bachelors">Bachelors</option>
                  <option value="High School">High School</option>
                  <option value="Master">Master</option>
                  <option value="SEE Mid School">SEE Mid School</option>
                  <option value="Other">Other</option>
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
                  @change="filterEmploymentType($event)"
                >
                  <option disabled selected value>
                    -- select an option --
                  </option>
                  <option value="Full Time">Full Time</option>
                  <option value="Part Time">Part Time</option>
                  <option value="Freelance">Freelance</option>
                  <option value="Internship">Internship</option>
                  <option value="Trainneship">Trainneship</option>
                  <option value="Volunter">Volunter</option>
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
import axios from "axios";
export default {
  name: "sidebar-component",
  data() {
    return {
      categories: [],
    };
  },
  mounted() {
    this.setCategoies();
  },
  methods: {
    setCategoies() {
      axios
        .get("/api/company-categories")
        .then((res) => res.data)
        .then((data) => {
          this.categories = JSON.parse(JSON.stringify(data));
        });
    },
    filterCategory(e) {
      this.$emit("get-by-category", e.target.value);
    },
    filterEmploymentType(e) {
      this.$emit("get-by-employmentType", e.target.value);
    },
    filterEducation(e) {
      this.$emit("get-by-education", e.target.value);
    },
    filterJobLevel(e) {
      this.$emit("get-by-job-level", e.target.value);
    },
  },
};
</script>

<style>
</style>