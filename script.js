 $(document).ready(function(){
	$(window).scroll(function(){
		if(document.body.scrollTop > 450)
			$('#fixed-menu').slideDown( "slow", function() { });
		else
			$('#fixed-menu').slideUp( "fust", function() { });

      var st = $(this).scrollTop();
      var paralaxIcone = st - 1150;
      var paralaxImage = st - 550;
      var paralaxTable = st - 2100;


      $("#advantages__content").css({
        "transform" : "translate(0%, " + paralaxIcone + "%)"
      });

      $("#parallax-advantage__pic").css({
        "transform" : "translate(0%, " + -paralaxImage + "%)"
      });

      $("#parallax-advantage__bg").css({
        "transform" : "translate(0%, " + paralaxIcone + "%)"
      });

      $("#parallax-table-man__content").css({
        "transform" : "translate(0%, " + paralaxTable + "%)"
      });

      $("#parallax-table-man__bg").css({
        "transform" : "translate(0%, " + paralaxTable + "%)"
      });

      $("#parallax-table-man__pic").css({
        "transform" : "translate(0%, " + -paralaxIcone + "%)"
      });
	});



  $("#slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    animateOut: 'fadeOut'
  });

});









 window.ChatraSetup = {
 colors: {
 		buttonText: '#f5f5f5',
 		buttonBg: '#62b9e4',
 		chatBg: '#fff',
 		clientBubbleBg: '#62b9e4',
 		agentBubbleBg: '#deffff'
 }
 };
 ChatraID = 'Jw64FSNxmQfsvk9Zm';
 (function(d, w, c) {
 		var n = d.getElementsByTagName('script')[0],
 				s = d.createElement('script');
 		w[c] = w[c] || function() {
 				(w[c].q = w[c].q || []).push(arguments);
 		};
 		s.async = true;
 		s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
 				+ '//call.chatra.io/chatra.js';
 		n.parentNode.insertBefore(s, n);
 })(document, window, 'Chatra');
