$(document).ready(function(){
$('a[navid="Home"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/home.php','Title':'Home','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="Registro"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/registro.php','Title':'Registro','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="Download"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/download.php','Title':'Download','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="Donate"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/donate.php','Title':'Donate','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="Chat"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/chat.php','Title':'Chat','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="Sobre"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/about.php','Title':'Sobre','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
$('a[navid="gb"]').fancybox({
            'title':    'Killer Instinct | Game Boy Version',
			'titlePosition': 'outside',
			'href':     './pages/gb.php',
            'width':    '24.5%',
            'height':   '49%',
            'autoDimensions': true,
            'overlayOpacity': 0.1,
			'padding' : '3',
			'type'  : 'iframe',
			'beforeClose' : function(){
			return confirm("Deseja Mesmo sair do Jogo?");
			}
            });
$('a[navid="snes"]').fancybox({
            'title':    'Killer Instinct | Super Nintendo Version',
			'titlePosition': 'outside',
			'href':     './pages/snes.php',
            'width':    '37%',
            'height':   '76%',
            'autoDimensions': true,
            'overlayOpacity': 0.1,
			'padding' : '3',
			'type'  : 'iframe',
			'beforeClose' : function(){
			return confirm("Deseja Mesmo sair do Jogo?");
			}
            });
$('a[navid="Ranking"]').live('click',function(){
$('#center .painel').LoadPage({'Link':'./pages/ranking.php','Title':'Ranking','AjaxData':{'ajax':'true'},'AjaxType':'POST'});
})
})