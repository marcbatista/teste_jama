
$(document).ready(function(){
	$('#tabela').empty(); 
	$.ajax({
		type:'post',		
		dataType: 'json',	
		url: 'banco.php',
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				
				$('#tabela').append('<tr id="'+i+'"><td>'+dados[i].id+'</td>'+'<td><img src="/img/'+dados[i].nome+'/perfil.png"></td><td><p  contenteditable="true">'+dados[i].nome+'</p></td><td>'+dados[i].email+'</td><td><i onclick="update('+i+')" class="fas fa-save"></i></td><td><i  onclick="apagar('+i+')" class="far fa-trash-alt"></i></td></tr>');
			}
		}
	});
});
 function update(up){
	 	var save = document.getElementsByTagName("p")[up].innerHTML;

		$.ajax({
		type:'post',		
		dataType: 'json',	
		url: 'update.php',
		data:{
			name: save,
			id: up
		},
		success: function(){
			location.reload();
		}		
		
	});
		
 }

function apagar (del){	 	

		$.ajax({
		type:'post',
		url: 'delete.php',
		data:{			
			id: del
		},
		success: function(){
			alert('usuario deletado');
			location.reload();
		}		
		
	});
		
 }

 