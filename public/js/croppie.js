$image_crop = $('#upload_demo').croppie({
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
});

$('#upload_image').on('change', function() {
    var reader = new FileReader();
    reader.onload = function(e) {
     $image_crop.croppie('bind', {
      url: e.target.result
    }).then(function() {
      console.log('Jquery bind complete');
    });
  }
  reader.readAsDataURL(this.files[0]);

})