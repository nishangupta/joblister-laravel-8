<template>
  <div class="job-component">
    <div class="container">
      <div class="searchbar">
        <SearchBar />
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <Sidebar />
      </div>
      <div class="col-sm-12 col-md-8">
        <SearchResult />
      </div>
    </div>
  </div>
</template>

<script>
import SearchBar from "./SearchBar";
import Sidebar from "./Sidebar";
import SearchResult from "./SearchResult";

export default {
  name: "job-component",
  components: {
    SearchBar,
    Sidebar,
    SearchResult,
  },
};
</script>

<style lang="scss" scoped>
</style>



