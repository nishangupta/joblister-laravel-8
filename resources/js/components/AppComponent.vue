<template>
  <div class="app-component">
    <div class="container-fluid px-0 mb-2">
      <SearchBar class="border" />
    </div>
    <router-view></router-view>
    <vue-progress-bar></vue-progress-bar>
  </div>
</template>

<script>
import SearchBar from "./SearchBar";
export default {
  name: "app-component",
  components: {
    SearchBar,
  },
};
</script>

<style>
</style>