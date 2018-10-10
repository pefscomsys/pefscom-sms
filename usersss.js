function setUpdateAction() {
document.frmUser.action = "edit_userss.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "delete_userss.php";
document.frmUser.submit();
}
}