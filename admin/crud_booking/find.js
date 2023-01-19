    

//method to get detail personal data based on id
function find(id){
    //get data from localstorage and store to contaclist array
    //we must to use JSON.parse, because data as string, we need convert to array
    contactList = JSON.parse(localStorage.getItem('listItem')) ?? []

    contactList.forEach(function (value){
        if(value.id == id){
           document.getElementById('id').value = value.id
           document.getElementById('kendaraan').value = value.kendaraan
           document.getElementById('peminjam').value = value.peminjam
           document.getElementById('kategori').value = value.kategori
           document.getElementById('deskripsi').value = value.deskripsi
           document.getElementById('tanggal_pinjam').value = value.tanggal_pinjam
           document.getElementById('sampai_dengan').value = value.sampai_dengan
           document.getElementById('kontak_person').value = value.kontak_person
           document.getElementById('telepon').value = value.telepon
           document.getElementById('email').value = value.email
        }
    })
}