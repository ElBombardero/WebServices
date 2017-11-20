public buscar() {
    let texto = '';
    const tag = $('#b').val();
    $('#imagenes').text('cargando...');
    $.getJSON ('http://api.flickr.com/services/feeds/photos_public.gne?tags=' +
    tag + '&tagmode=any&format=json&jsoncallback=?', function(datos){
      $.each(datos.items, function(i, item){
        texto += '<div class=\'cuadro\'>';
        texto += '<img src=\'' + item.media.m + '\'/>';
        texto += '<p><strong style=\'color:#00BFFF\'>titulo:</strong><small>' + item.title + '</small></p>';
        texto += '<p><a href=\'' + item.link + '\'>Link</a></p>';
        texto += '</div>';
      });
    $('#imagenes').html(texto);
    });
  }