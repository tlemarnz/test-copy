<html>
  <head>
  </head>
  <body>
		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>
				<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>		<div>Try scrolling the iframe.</div>
		<p>Paragraph - <span>Scroll happened!</span></p>
		<input type="text" class="test-input">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </body>
<script>
		$(window).scroll(function(e) {
			var timeout = null;
			clearTimeout(timeout);
			timeout = setTimeout(function() {
				console.log('xxxxx');
				var scroll = $(window).scrollTop();
				$('.test-input').val(scroll);
				
			}, 200);
		});
</script>
</html>
