var btn_del = document.getElementsByClassName('btn-delete');
for (let i = 0; i < btn_del.length; i++) {
    btn_del[i].addEventListener('click', function (s){
        s.preventDefault();
        let conf = confirm('apakah anda ingin menghpaus data?');
        if (conf){
            window.location.href = btn_del[i].href;
        } else {
            alert('gagal mengahpus data ');
        }
    })
}
