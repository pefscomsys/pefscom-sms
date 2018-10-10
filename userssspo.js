function setUpdateAction() {
document.frmUser.action = "edit_usersspo.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "delete_usersspo.php";
document.frmUser.submit();
}
}