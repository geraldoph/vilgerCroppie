<!-- HTML -->

          <div id="upload-demo"></div>
          <button id="upload-result">Recortar e Enviar</button>


<!-- JQUERY -->

 $(document).ready(function () {




      // Change this dynamically as needed.

      var viewLargura = 250;
      var viewAltura = 500;
      var imgCrop = '/teste/vertical.jpg';
      var imgCaminho = 'teste/vertical.jpg';



      // Initializes Croppie with a specific viewport area and boundaries.
      var $uploadCrop = $('#upload-demo').croppie({
          viewport: { width: viewLargura, height: viewAltura, type: 'rectangle' },
          boundary: { width: viewLargura, height: viewAltura },
          showZoomer: true,
          enableOrientation: true
      });

      // Carrega uma imagem padrão no Croppie
      $uploadCrop.croppie('bind', {
          url: imgCrop
      });

      // Evento de alteração para carregar uma imagem selecionada pelo usuário
      $('#fotoUpload').on('change', function() {
          var reader = new FileReader();
          reader.onload = function(e) {
              $uploadCrop.croppie('bind', {
                  url: e.target.result
              }).then(function(){
                  console.log('jQuery bind complete');
              });
          }
          reader.readAsDataURL(this.files[0]);
      });

      // Evento de clique para enviar os dados de recorte para o servidor
      $('#upload-result').on('click', function(ev) {
          var overlay = $('.cr-overlay');
          var data = {
              _token: '{{ csrf_token() }}',
              imagePath: imgCaminho, // Caminho real da imagem no servidor
              width: overlay.css('width'),
              height: overlay.css('height'),
              top: overlay.css('top'),
              left: overlay.css('left'),
              viewLargura: viewLargura,
              viewAltura: viewAltura
          };

          // Faz uma requisição AJAX para o servidor com os dados do recorte
          $.ajax({
              url: '/adm/perfil/fotoCrop',
              type: "POST",
              data: data,
              success: function(data) {
                  console.log(data);
              },
              error: function(error) {
                  console.error('Erro:', error);
              }
          });
      });

});



