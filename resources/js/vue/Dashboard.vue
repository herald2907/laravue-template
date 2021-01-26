<template>
  <div>
    <!-- DASHBOARD DESIGN -->
    <div v-if="user">
      <h1>{{ user.name }}</h1>
      <h1>{{ user.email }}</h1>
    </div>
  </div>
</template>
<script>
export default {
  mounted() {
    this.getUser();
  },
  data() {
    return {
      user: [],
    };
  },
  methods: {
    getUser() {
      axios
        .get("/api/user")
        .then((response) => {
          this.user = response.data;
        })
        .catch((error) => console.log(error));
    },
  },
};
</script>
