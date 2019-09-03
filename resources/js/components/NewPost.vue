<template>
        <section>
            <header class="row">
                <div class="col-lg-12">
                     <h2 class="h2">New Post</h2>
                </div>
            </header>
            <div class="col-lg-12">
                <form  enctype="multipart/form-data" @submit="submit">
                    <div class="form-group row">
                        <label class="col-2" for="title">Title</label>
                        <div class="col-10">
                            <input type="text" id="title" v-model="title" class="form-control">
                        </div>
                    </div>

                    <div id="upload_demo"></div>

                    <div class="form-group row">
                        <label class="col-2" for="upload_image">Cover Image</label>
                        <div class="col-10">
                            <input type="file" accept="image/*" id="upload_image" name="upload_image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="content">Content</label>
                        <div class="col-10">
                          <textarea id="content" name="content" v-model="content"></textarea>
                        </div>
                    </div>
                    <div class="text-right">
                    <button class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
        </section>
</template>

<script>
    export default {
        data() {
          return {
              title: '',
              content: '',
          }  
        },
        mounted() {
                this.initSummernote();
                this.initCroppie();
            },

            methods: {
                initSummernote: function() {
                    let summernoteScript = document.createElement('script');
                    summernoteScript.setAttribute('src', 'js/summernote.js');
                    document.head.appendChild(summernoteScript);
                    
                },
                initCroppie: function() {
                    let croppieScript = document.createElement('script');
                    croppieScript.setAttribute('src', 'js/croppie.js');
                    document.head.appendChild(croppieScript);
                },

                submit: function(e) {
                    e.preventDefault();
                    axios
                        .post('http://localhost:8000/store-post', {
                            title: this.title,
                            content: this.content,
                        })
                        .then(response => {
                            if (response.status === 200) {
                            }
                        })
                }
        }
    }
</script>
