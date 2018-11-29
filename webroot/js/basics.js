$(function () {
//==== dropify =====

//if ($(this).hasClass('dropify')) {
$('.dropify').dropify({
  messages: {
   'default': 'Escolher imagem',
   'replace': 'Clique para remover e procurar uma nova imagem',
   'remove':  'Remover',
   'error':   'Ooops, ocorreu um erro'
 },
 error: {
   'fileSize': 'The file size is too big ({{ value }} max).',
   'minWidth': 'A imagem é muito pequena (min {{ value }} px).',
   'maxWidth': 'The image width is too big ({{ value }}}px max).',
   'minHeight': 'The image height is too small ({{ value }}}px min).',
   'maxHeight': 'The image height is too big ({{ value }}px max).',
   'imageFormat': 'O formato da imagem não é permitido (Tente {{ value }}).',
   'fileExtension': 'O tipo de arquivo não é permitido (Tente {{ value }}).'
 }
});
//==== /dropify =====
//-     slider
if ($(this).hasClass('slider')) {
  $('.slider').bxSlider({
  speed: 500,
  tickerHover:true,
  auto:true,
  pager:true,
  controls: true,
  nextText: 'Proximo',
  prevText:'Anterior',
  infiniteLoop: true,
  autoHover: true,
  pause: 4000,
  stopAutoOnClick: true,
  ticker: false
          //slideWidth: 600,
        });
//-     /slider
}

$('.carousel').carousel();
 

});

function print_(pics) {
        for (var i = 0; i < pics.length; i++) {
            $('#imgs').append('<span class=\'label label-info mr-2\' id=\'upload-file-info\'>'+pics[i].name+' </span>');
        }
    }