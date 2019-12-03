<template>
        <section>
            <header class="row">
                <div class="col-lg-12">
                     <h2 class="h2">New Post</h2>
                </div>
            </header>
            <div class="col-lg-12">
                <form  enctype="multipart/form-data" @submit="submit" id="myForm">
                    <div class="form-group row">
                        <label class="col-2" for="title">Title</label>
                        <div class="col-10">
                            <input type="text" id="title" name="title" v-model="title" class="form-control">
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

import Croppie from 'croppie';
    export default {
        data() {
          return {
              croppie: null,
              title: '',
              content: '',
              image: '',
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
                    //let croppieScript = document.createElement('script');
                    //croppieScript.setAttribute('src', 'js/croppie.js');
                   // document.head.appendChild(croppieScript);
                console.log(this.croppie);
                    
                   this.croppie = new Croppie($('#upload_demo')[0], {
                        enableExif: true,
                        viewport: {
                            width: 300,
                            height: 300,
                            type: 'square'
                        },
                        boundary: {
                            width: 400,
                            height: 400
                        }
                   })

                   $('#upload_image').on('change', function() {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                        this.croppie.croppie('bind', {
                        url: e.target.result
                        }).then(function() {
                        console.log('Jquery bind complete');
                        });
                    }
                    reader.readAsDataURL(this.files[0]);

                    })

                },

                submit: function(e) {
                    e.preventDefault();
             
                    var formData = new FormData($('#myForm')[0]);
      

                    axios
                        .post('http://localhost:8000/store-post', formData)
                        .then(response => {
                            if (response.status === 200) {
                            }
                        })
                }
        }
    }
</script>
