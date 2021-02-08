<template>test</template>
<script>
import dashboardStore from "../stores/dashboardStore";
import { onMounted } from 'vue'
export default {
    setup() {
        onMounted(() => {
            console.log("dashboad api");
            dashboardStore.dashboardApi().then(() => {
                console.log("stopppp");
            });
        });
    },
};
</script>
