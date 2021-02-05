<template></template>
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
