<template>
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
                    placeholder="Email"
                    v-model="form.email"
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
                    v-model="form.password"
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
import { reactive } from "vue";
import { useRouter } from "vue-router";
import loginStore from "../stores/loginStore";
export default {
    setup() {
        const form = reactive({
            email: "",
            password: "",
        });

        const error = reactive({});
        const router = useRouter();
        const handleLogin = () => {
            loginStore.loginUser(form).then((result) => {
                form.email = "";
                form.password = "";
                if (result) {
                    console.log(result);
                    router.push({ name: "dashboard" });
                }
            });
        };

        return { form, handleLogin };
    },
};
</script>
