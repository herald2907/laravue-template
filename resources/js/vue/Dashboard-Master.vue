<template>
    <div class="navbar-bg">
      <Navigations />
    </div>
    <div class="main-content">
      <div class="content-wrapper">
        <div class="content-body">
          <router-view></router-view>
        </div>
      </div>
    </div>
</template>

<script>
import Navigations from "./components/Navigations";
export default {
  components: {
    Navigations,
  },
};
</script>

<style>
</style>