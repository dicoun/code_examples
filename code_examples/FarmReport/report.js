(function () {

    jQuery(function () {
        $( "#type" ).change(function() {

            var index = $("#type").val();
            var id = $("#type option:selected").attr('id')
            $('#period_1').html(id);
			
			$( '#table_1').find( 'tr' )
                .remove();
				
			$( '#img_1').find( 'img' )
					.remove();
					
			$('#empty').remove();			
			
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: 'FarmReport/response.php?action=sample1',
                data: {index:index},
				beforeSend: function(){
				jQuery('#div_1_1').after('<div id="img_1" style="margin-top: 15%; text-align: center;"><img src="FarmReport/loading.gif"></div>');
				},
                success: function(data){
					
                        $('#dolg').html(data[0][0]);
                        $('#30').html(data[0][1]);
                        $('#45').html(data[0][2]);
                        $('#60').html(data[0][3]);
                        $('#70').html(data[0][4]);
                        $('#80').html(data[0][5]);
                        $('#90').html(data[0][6]);
                        $('#100').html(data[0][7]);
                        $('#110').html(data[0][8]);
                        $('#120').html(data[0][9]);
                        $('#130').html(data[0][10]);
                        $('#140').html(data[0][11]);
                        $('#150').html(data[0][12]);
                        $('#160').html(data[0][13]);
                        $('#170').html(data[0][14]);
                        $('#180').html(data[0][15]);

                    $( '#table_1' ).find( 'tr td' )
                        .remove();
						
					$( '#left').find( '#img_1' )
					.remove();

					
                    for ( var i = 0; i < data[1].length; i++ ) {
                        $('#table_1').append('<tr bgcolor="#F2EBE8"></tr>');
                        for ( var j = 1; j < 5; j++ ) {
                            if (j > 2){
								$('#table_1 tr:last').append('<td><div style="font-size: 14px; text-align: right; width: 100px;">' + data[1][i][j] + '</div></td>');
							}
							else if (j==1){
								
								$('#table_1 tr:last').append('<td><div style="font-size: 14px; text-align: center; width: 100px;">' + data[1][i][j] + '</div></td>');
							}
							else{
								$('#table_1 tr:last').append('<td><div id="oper_'+i+'" style="font-size: 14px; width: auto;">' + data[1][i][j] + '</div></td>');
							}
                        }
                    }				
					
					var width = document.getElementById("oper_0").offsetWidth;
					var width_left = document.getElementById("div_1").offsetWidth;
					
					
					if(width_left != width + 300) {
						width = width_left - 325;
						
					}										
					
					document.getElementById('operation').style.width = width;
						for (var k = 0; k < data[1].length; k++){
							document.getElementById('oper_'+k+'').style.width = width;				
						}													
					
					$("#div_1").scrollTop(100000);
					
                }

            });
        });

    });

	jQuery(function () {
        $( "#type_2" ).change(function() {
            var index = $("#type_2").val();
            var id = $("#type_2 option:selected").attr('id')
            $('#period_2').html(id);
			
			$( '#table_2').find( 'tr' )
                .remove();
				
			$( '#img_2').find( 'img' )
					.remove();
					
			$('#empty_2').remove();
					
			
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: 'FarmReport/response_2.php?action=sample2',             
                data: {index:index},
				beforeSend: function(){
				jQuery('#div_2_1').after('<div id="img_2" style="margin-top: 15%; text-align: center;"><img src="FarmReport/loading.gif"></div>');
				},
                success: function(data){
					
                        $('#dolg_2').html(data[0][0]);
                        $('#230').html(data[0][1]);
                        $('#245').html(data[0][2]);
                        $('#260').html(data[0][3]);
                        $('#270').html(data[0][4]);
                        $('#280').html(data[0][5]);
                        $('#290').html(data[0][6]);
                        $('#2100').html(data[0][7]);
                        $('#2110').html(data[0][8]);
                        $('#2120').html(data[0][9]);
                        $('#2130').html(data[0][10]);
                        $('#2140').html(data[0][11]);
                        $('#2150').html(data[0][12]);
                        $('#2160').html(data[0][13]);
                        $('#2170').html(data[0][14]);
                        $('#2180').html(data[0][15]);

                    $( '#table_2' ).find( 'tr td' )
                        .remove();
						
					$( '#right').find( '#img_2' )
					.remove();
				
                    for ( var i = 0; i < data[1].length; i++ ) {
                        $('#table_2').append('<tr bgcolor="#F2EBE8"></tr>');
                        for ( var j = 1; j < 5; j++ ) {
												
							if (j > 2){
								$('#table_2 tr:last').append('<td><div style="font-size: 14px; text-align: right; width: 100px;">' + data[1][i][j] + '</div></td>');
							}
							else if (j==1){
								$('#table_2 tr:last').append('<td><div style="font-size: 14px; text-align: center; width: 100px;">' + data[1][i][j] + '</div></td>');
							}
							else{
								$('#table_2 tr:last').append('<td><div id="oper_2_'+i+'" style="font-size: 14px; width: auto;">' + data[1][i][j] + '</div></td>');
							}
                        }
                    }
					
					
					var width = document.getElementById("oper_2_0").offsetWidth;
					
					var width_right = document.getElementById("div_2").offsetWidth;
					
					
					if(width_right != width + 300) {
						width = width_right - 325;
						
					}	
										
					
					document.getElementById('operation_2').style.width = width;
						for (var k = 0; k < data[1].length; k++){
							document.getElementById('oper_2_'+k+'').style.width = width;				
						}
						
					$("#div_2").scrollTop(100000);
                }
				
            });
        });

    });
	

		
		
		
	/*jQuery(function () {
		$(document).ready ( function(){
		
			debugger;
		
			var width_block = document.getElementById("period_1");
			var w = width_block.offsetWidth;
			
			var width_block = $("#period_1").width();
			
			console.log("Test");
			
			document.getElementById("empty").style.width = 0.4*width_block;
		
		});
	 });*/
	

})();


