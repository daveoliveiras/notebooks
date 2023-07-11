function openForm(){
    window.location.href = "form";
}

function seeMore(id){
    window.location.href = "details?id=" + id;
}

function toEdit(id){
    window.location.href = "edit?id=" + id;
}

function remove(id){
    //location.reload();
    window.location.href = "remove?id=" + id;
}