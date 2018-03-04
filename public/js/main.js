
function user_subscribe(e, page){
    e.preventDefault();
    var xhttp = new XMLHttpRequest();
    var token =  $('meta[name="csrf-token"]').attr('content');

    xhttp.onreadystatechange = function(){
        if(this.status == 200)
        {
            txt = document.getElementsByClassName('subscriber');
            target = e.target;

            e.target.innerText = target.innerText == txt[0].innerText? txt[1].innerText : txt[0].innerText;
        }
    }

    xhttp.open('POST', '/p/'+page.id , true);
    xhttp.setRequestHeader('X-CSRF-TOKEN', token);
    xhttp.send();
}
