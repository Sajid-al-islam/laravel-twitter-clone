<template>
    <router-view></router-view>
</template>

<script>
export default {
    // components: { Sidebar, Header },
    data: () => ({
        offset: "",
        search_data: "",
    }),
    created: async function () {
        let token = localStorage.getItem('token');
        if(!token) {
            location.href = '/login'
        }
    },
    methods: {
        
    },
    computed: {
    },
    watch: {
        
    },
}
</script>

<style>

</style>
