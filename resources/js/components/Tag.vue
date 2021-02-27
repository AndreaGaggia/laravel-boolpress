<template>
    <div class="container">
        <div class="row justify-content-center">
            <div
                class="tag rounded p-1 mr-2"
                v-for="tag in tags"
                :key="tag.id"
                :style="bordify(tag.color)"
            >
                <a href="#" class="font-weight-bold">
                    {{ tag.name }}
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tags: []
        };
    },
    methods: {
        bordify(color) {
            return `color: ${color}; border: 2px solid ${color}`;
        }
    },
    mounted() {
        console.log("Component mounted.");
        axios.get("api/tags").then(response => {
            this.tags = response.data.response;
        });
    }
};
</script>

<style lang="scss" scoped>
a {
    color: inherit;
}
</style>
