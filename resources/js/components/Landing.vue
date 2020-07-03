<template>
    <div>
        <router-link class="btn btn-primary" :to="'/notfound'">TO</router-link>
        <span
            v-for="hostingCategory in hostingCategories"
            :key="hostingCategory.id"
        >
            <p style="width:40%">
                {{ hostingCategory.id }} ||
                {{ hostingCategory.name_category }} ||
                {{ hostingCategory.price }} ||
                {{ hostingCategory.discount }}
            </p>
        </span>
    </div>
</template>

<script>
export default {
    data() {
        return {
            hostingCategories: []
        };
    },
    created() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios.get("/api/hosting_category").then(response => {
                this.hostingCategories = response.data;
            });
        }
    }
};
</script>
