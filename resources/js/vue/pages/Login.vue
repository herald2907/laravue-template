<template>
    <!--<div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Sign In</h3>
          <div class="d-flex justify-content-end social_icon">
            <span><i class="fab fa-facebook-square"></i></span>
            <span><i class="fab fa-google-plus-square"></i></span>
            <span><i class="fab fa-twitter-square"></i></span>
          </div>
        </div>
        <div class="card-body">
          <form action="#" @submit.prevent="handleLogin">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"
                  ><i class="fas fa-user"></i
                ></span>
              </div>
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                v-model="formData.email"
              />
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input
                type="password"
                class="form-control"
                placeholder="password"
                v-model="formData.password"
              />
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox" />Remember Me
            </div>
            <div class="form-group">
              <input
                type="submit"
                value="Login"
                class="btn float-right login_btn"
              />
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            Don't have an account?<a href="#">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="#">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>-->
    <link rel="stylesheet" href="/css/login.css" />
    <div class="logo-wrapper">
        <img src="/img/random-logo_red.png" />
    </div>
    <div class="container container-fluid card login-wrapper text-center">
        <div class="welcome-text">
            <h3 class="title">Welcome Back</h3>
            <p class="subtitle">Please log in to continue</p>
        </div>
        <form action="#" @submit.prevent="handleLogin">
            <div class="form-group custom-input">
                <span class="form-icon">
                    <i class="fas fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Username"
                    v-model="formData.email"
                />
            </div>
            <div class="form-group custom-input">
                <span class="form-icon">
                    <i class="fas fa-key"></i>
                </span>
                <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    v-model="formData.password"
                />
            </div>
            <button
                type="submit"
                class="btn btn-danger text-bold float-right"
                style="min-width: 50%"
            >
                Log In
            </button>
        </form>
        <a href="" class="forgot-password-link"><span>Forgot Password</span></a>
    </div>
</template>

<script>
import LoginApi from "../api/LoginApi";
export default {
    data() {
        return {
            formData: {
                email: "",
                password: "",
            },
            api : {

            }
        };
    },
    methods: {
        handleLogin() {
          api = LoginApi.methods.api(this.formData);
        },
    },
};
</script>
