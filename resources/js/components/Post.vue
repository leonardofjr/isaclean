<template>
        <section>
            <header class="row">
                <div class="col-lg-10">
                     <h2>Post</h2>
                </div>

                <div class="col-lg-2">
                    <router-link to="/new-post"><button class="btn btn-primary">New Post</button></router-link>
                </div>
            </header>
            <div class="row">

            </div>
        </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
