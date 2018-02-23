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