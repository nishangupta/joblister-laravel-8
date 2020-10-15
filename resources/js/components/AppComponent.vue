<template>
  <div class="app-component mb-5">
    <div class="container-fluid px-0 mb-2">
      <SearchBar v-on:searchByTitle="searchByTitle" class="border" />
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
  methods: {
    searchByTitle: (title) => {
      this.$router.push({ name: "/", params: { q: title } });
    },
  },
};
</script>

<style>
.card-list-component {
  width: 100%;
  padding: 0.5rem 0.25rem;
  color: #888;
  cursor: pointer;
  margin-bottom: 1rem;
}
.card-list-component:hover {
  background-color: #f5fdff;
}
.hover-shadow:hover {
  box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
}
</style>