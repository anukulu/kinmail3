$('td.chartSection').on('mouseenter', function() {
    var myPopOverContent = 'This is some static content, but could easily be some dynamically obtained data.';
    $(this).data('container', 'body');
    $(this).data('toggle', 'popover');
    $(this).data('placement', 'top');
    $(this).data('content', myPopOverContent);
    $(this).popover('show');
});

$('td.chartSection').on('mouseout', function() {
    $(this).popover('hide');
});





$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});