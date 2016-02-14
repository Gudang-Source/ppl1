
//init jquery on page
function initPage(tableId, tableAttr, autoIncAttr, trimIdx, attrIdx, attrName, deleteLink, deleteAttr, deleteAttrIdx){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
  //edit-delete button show-hide
  $(document).on("mouseenter", ".data-row", function () {
      $(this).find(".edit-btn").show();
      $(this).find(".delete-btn").show();
  }).on("mouseleave", ".data-row", function () {
      $(this).find(".edit-btn").hide();
      $(this).find(".delete-btn").hide();
  });
  //set edit mode val
  $(document).on("click", ".edit-btn", function(){
      var editModal = $("#edit-modal");
      editModal.find(".edit-label").addClass("active");
      var record = $(this).parent().siblings();
      var i;
      for(i=0; i<tableAttr.length; i++){
        editModal.find("#"+tableAttr[i]).val(record.eq(i).html());  
      }
  });
  //set delete mode val
  $(document).on("click", ".delete-btn", function(){
      var deleteRecord = $(this).parent().siblings().eq(deleteAttrIdx).text();
      $(document).on("click", ".hapus", function(){
        $(this).attr("href",deleteLink+"?"+deleteAttr+"="+deleteRecord);
      });
  });

  //auto-increment ID for new record
  var idRecord = $("#"+tableId + " > tbody > tr:last-child> td");
  var newId;
  if(idRecord.length){
    var trimId = idRecord.eq(attrIdx).text();
    var incNum = (parseInt(trimId.substring(trimIdx))+1);
    newId = attrName+incNum;
  }
  else{
    newId = attrName+"1";
  }
  $("#add-modal").find("#"+tableAttr).val(newId);
}