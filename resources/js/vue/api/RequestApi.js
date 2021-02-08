import api from "./api";

export default {
    createSession() {
        return api.get('http://localhost:8081/sanctum/csrf-cookie');
    },

    login(params) {
        console.log(params);
        return api.post('http://localhost:8081/api/auth/login', params);
    },
};
