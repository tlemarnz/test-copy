<html>
  <head>
  </head>
  <body>
	<a href="https://pantip.com" class='cs-test_naja'>Visit pantip</a>
	<a href="https://pantip.com" class='test_naja'>Visit pantip2</a>
	<a href="http://www.hitviews.com">Visit hitviews</a>
  </body>
<script>

$(document).on('click', 'a', function (e) {
		var str = "cs-";
		var full_class_name = typeof $(this).attr('class');
		if ((full_class_name != undefined) || (full_class_name.indexOf(str) != -1) ) {
			var myClasses = this.classList;
				$.each(myClasses, function (key, class_name) {
				if (class_name.indexOf(str) != -1) {
					$event = class_name;
					alert($event);
				}
		});
		}
		
});

</script>
</html>
