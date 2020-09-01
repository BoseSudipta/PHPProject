$("#reply").click(function(){
func();
});

function func(){
	var val1=$('#comment_content').val();
	var val2=$('#p').text();
	// alert(val1);
	// alert(val2);
	$.ajax({

		type:'post',
		url:'http://localhost/PHPProject/bcit-ci-CodeIgniter-b73eb19/User/comment',
		data:{comment_content:val1,post_id:val2},
		success:function(res){
			if(res){
				alert("data saved successful");
				// listComment();
			}
			else{
				alert('data not saved');
			}
		}

	});
}

// $('#show_comment').click(function(){
// 	var post_id=$('#p').text();
// 	alert(post_id);
// 	$.ajax({
// 		type:'post',
// 		url:'http://localhost/PHPProject/bcit-ci-CodeIgniter-b73eb19/User/show_comment',
// 		data:{post_id:post_id},
// 		success:function(response){
// 			('#all_comment').val(response.comm);
//
// 		}
// 	});
// });
$("#show").click(function() {
	loadmore();
});
function loadmore(){
	alert('hi');
	var post_id=$('#p').text();
    $.ajax({
        url:'http://localhost/PHPProject/bcit-ci-CodeIgniter-b73eb19/User/show_comment',
        data:{post_id:post_id},
				type:'post',
        // dataType:'json',
				// datatype:'json',
        success :function(data){
            // $('#load-more').val(data.comm);
            // $('#offset').val(data.offset)
            // $('#limit').val(data.limit)
						 $("#customers-list").html(data);
        }
    });
}
// $("#show").click(function(){
// listComment();
// });
//
//
// function listComment() {
// 		$.post(
// 						"User/show_comment",
// 						function(data) {
// 							console.log(data.canApprove)
// 							var data = JSON.parse(data);
//
// 							var comments = "";
//
// 							var item = "";
// 							var parent = -1;
// 							var results = new Array();
//
// 							var list = $("<ul class='outer-comment'>");
// 							var item = $("<li>").html(comments);
//
// 							for (var i = 0; (i < data.length); i++) {
// 								var commentId = data[i]['comment_id'];
// 								parent = data[i]['parent_comment_id'];
//
// 								if (parent == "0") {
// 									comments = "<div class='comment-row'>"
// 											// + "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>"
// 											// + data[i]['comment_sender_name']
// 											// + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>"
// 											// + data[i]['date']
// 											// + "</span></div>"
// 											+ "<div class='comment-text'>"
// 											+ data[i]['comm']
// 											+ "</div>"
// 											// + "<div><a class='btn-reply' onClick='postReply("
// 											// + commentId + ")'>Reply</a></div>"
// 											// + "</div>";
//
// 									var item = $("<li>").val(comments);
// 									list.append(item);
// 									// var reply_list = $('<ul>');
// 									// item.append(reply_list);
// 									listReplies(commentId, data);
// 								}
// 							}
// 							$("#output").html(list);
// 						});
// 					}
