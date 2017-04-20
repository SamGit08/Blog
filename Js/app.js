function onScrollEvent() {
  var p = $('p');
  var comp = $('#comp');
  var exp = $('#exp');
  var form = $('#form');
  var cent = $('#cent');
  var Comp = $('.infosComp');
  var Exp = $('.infosExp');
  var Form = $('.infosForm');
  var Cent = $('.infosCent');
  var offsetP = p.offset();
  var offsetComp = Comp.offset();
  var offsetExp = Exp.offset();
  var offsetForm = Form.offset();
  comp.hide();
  exp.hide();
  form.hide();
  cent.hide();
  $(window).scroll(function() {
    if($(window).scrollTop() > offsetP.top) {
      comp.show().addClass('moveDown');
      Comp.addClass('moveRight');
    }
    if($(window).scrollTop() > offsetComp.top){
      exp.show().addClass('moveDown');
      Exp.addClass('moveRight');
    }
    if($(window).scrollTop() > offsetExp.top){
      form.show().addClass('moveDown');
      Form.addClass('moveRight');
    }
    if($(window).scrollTop() > offsetForm.top){
      cent.show().addClass('moveDown');
      Cent.addClass('moveRight');
    }
  });
};

onScrollEvent();
