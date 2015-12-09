(function() {
tinymce.create('tinymce.plugins.way_blogger', {
init : function(ed, url) {
ed.addButton('hi', {          //название кнопки
title : 'Приветствие',    //всплывающая подсказка
image : url+'/images/pen.png',          //путь до изображения
onclick : function() {
ed.selection.setContent('[hi]'); //указываем имя шорткода в квадратных скобках. В данном случае одинарный, под именем «hi»
}
});
//для второго и последующего
ed.addButton('span', {
title : 'Span',
//image : url+'/images/pen.png',
onclick : function() {
ed.selection.setContent('<span>' + ed.selection.getContent() + '</span>');       //указываем какой шорткод вывести. в данном случае парный
}
});
/*Ниже добавляем следующие*/
},
createControl : function(n, cm) {
return null;
}

});
tinymce.PluginManager.add(‘way_blogger’, tinymce.plugins.way_blogger);
})();