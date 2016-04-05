$('.post').find('.interaction').find('a').eq(2).click(function(){
   console.log('It Works!');
});

$('#post-edit').click(function(){
    $('#edit-modal').modal();
});