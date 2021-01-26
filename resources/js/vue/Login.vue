<template>
  <div>
    <div v-if="!secrets.length" class="row">
      <form action="#" @submit.prevent="handleLogin">
        <div class="form-row">
          <input type="email" v-model="formData.email" />
        </div>
        <div class="form-row">
          <input type="password" v-model="formData.password" />
        </div>
        <div class="form-row">
          <button type="submit">Sign In</button>
        </div>
      </form>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      secrets: [],
      formData: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    handleLogin() {
      axios.get("/sanctum/csrf-cookie").then((response) => {
        axios
          .post("/api/login", this.formData)
          .then((response) => {
            if (response.data.success) {
              this.$router.push('about') 
            }
          })
          .catch((error) => console.log(error)); // credentials didn't match
      });
    },
  
  },
};
</script>