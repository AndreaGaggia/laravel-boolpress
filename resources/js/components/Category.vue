<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-wrap">
                <div
                    class="card m-2"
                    v-for="article in articles"
                    :key="article.id"
                >
                    <div class="card-header d-flex flex-column">
                        <span class="font-italic font-weight-bold">{{
                            article.title
                        }}</span>
                        <small>by {{ article.author }}</small>
                    </div>
                    <div class="card-body">
                        {{ article.body }}
                    </div>
                    <div class="card-footer">
                        <small
                            >Pubblicato il
                            {{
                                new Date(
                                    article.published_at
                                ).toLocaleDateString("it")
                            }}</small
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            articles: []
        };
    },
    mounted() {
        console.log("Component mounted.");
        axios.get("api/articles").then(response => {
            this.articles = response.data.response;
        });
    }
};
</script>

<style lang="scss" scoped>
.card {
    flex: 1 0 200px;
}
</style>
