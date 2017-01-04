/**
 * Created by Prenoult on 03/01/2017.
 */

$('.addEpisode').click(function (){
    var id = this.id;
    $.ajax({
        url : '/ajax/addEpisode/'+id,
        type : 'POST',
        dataType : 'JSON'
    }).done(function(data) {
		Materialize.toast('Episode ajouté !', 4000);
        console.log(data);
    }).fail(function(data) {
		Materialize.toast('Episode ajouté !', 4000);
        console.log(data);
    })
});

$('.deleteEpisode').click(function (){
    var id = this.id;
    $.ajax({
        url : '/ajax/deleteEpisode/'+id,
        type : 'POST',
        dataType : 'JSON'
    }).done(function(data){
		 Materialize.toast('Episode supprimé', 4000);
        console.log('ok');
        $('#bloc_'+id).remove();
    }).fail(function(data){
        console.log(data);
		Materialize.toast('Episode supprimé', 4000);
        $('#bloc_'+id).remove();
    });
});
