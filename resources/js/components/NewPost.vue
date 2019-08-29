<template>
        <section>
            <header class="row">
                <div class="col-lg-12">
                     <h2 class="h2">New Post</h2>
                </div>
            </header>
            <div class="col-lg-12">
                <form method="POST">
                    <div class="form-group row">
                        <label class="col-2" for="title">Title</label>
                        <div class="col-10">
                            <input type="text" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="title">Content</label>
                        <div class="col-10">
                          <div id="summernote"></div>
                        </div>
                    </div>
                    <div class="text-right">
                    <button v-on:click="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
        </section>
</template>

<script>
    export default {
        mounted() {
            let summernoteScript = document.createElement('script');
            summernoteScript.setAttribute('src', 'js/summernote.js');
            document.head.appendChild(summernoteScript);
            },

            methods: {
               submit: function() {
            }
        }
    }
</script>
