function setAttr(prmName,val){
  var res = '';
  var d = location.href.split("#")[0].split("?");
  var base = d[0];
  var query = d[1];
  if(query) {
      var params = query.split("&");
      for(var i = 0; i < params.length; i++) {
          var keyval = params[i].split("=");
          if(keyval[0] != prmName) {
              res += params[i] + '&';
          }
      }
  }
  res += prmName + '=' + val;
  window.history.pushState("object or string", "Title", base + '?' + res);
  // window.location.href = base + '?' + res;
  return false;
}
var params = window
        .location
        .search
        .replace('?','')
        .split('&')
        .reduce(
            function(p,e){
                var a = e.split('=');
                p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );
let page = document.querySelector('.page');
let themeButton = document.querySelector('.theme-button');

themeButton.onclick = function() {
  if(params['theme'] === 'dark'){
    page.classList.remove('dark-theme');
    page.classList.add('light-theme');
    params['theme'] = 'light';
    setAttr('theme','light');
  } else {
    page.classList.remove('light-theme');
    page.classList.add('dark-theme');
    params['theme'] = 'dark';
    setAttr('theme','dark');
  }
};


$(document).ready(function show_list(){
  if(params['theme'] === 'dark'){
    params['theme'] = 'dark';
    setAttr('theme','dark');
    page.classList.remove('light-theme');
    page.classList.add('dark-theme');
  } else {
    params['theme'] = 'light';
    setAttr('theme','light');
    page.classList.remove('dark-theme');
    page.classList.add('light-theme');
  }
    $('.content_toggle').click(function(){
      $('.content_block').slideToggle(300, function(){
        if ($(this).is(':hidden')) {
          $('.content_toggle').html('Показать текст');
        } else {
          $('.content_toggle').html('Скрыть текст');
        }							
      });
      return false;
    });
  });
