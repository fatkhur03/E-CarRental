    

//method to save data into localstorage
function save(){
    //get data from localstorage and store to contaclist array
    //we must to use JSON.parse, because data as string, we need convert to array
    contactList = JSON.parse(localStorage.getItem('listItem')) ?? []

    //get last array to get last id
    //and store it into variable id
    var id
    contactList.length != 0 ? contactList.findLast((item) => id = item.id) : id = 0

    if(document.getElementById('id').value){

        //edit contactlist array based on value
        contactList.forEach(value => {
            if(document.getElementById('id').value == value.id){
                value.kendaraan      = document.getElementById('kendaraan').value, 
                value.peminjam       = document.getElementById('peminjam').value,
                value.kategori       = document.getElementById('kategori').value, 
                value.deskripsi       = document.getElementById('deskripsi').value, 
                value.tanggal_pinjam       = document.getElementById('tanggal_pinjam').value, 
                value.sampai_dengan       = document.getElementById('sampai_dengan').value, 
                value.kontak_person       = document.getElementById('kontak_person').value, 
                value.telepon       = document.getElementById('telepon').value, 
                value.email     = document.getElementById('email').value
            }
        });

        //remove hidden input
        document.getElementById('id').value = ''

    }else{

        //save
        //get data from form
        var item = {
            id        : id + 1, 
            kendaraan      : document.getElementById('kendaraan').value, 
            peminjam        : document.getElementById('peminjam').value, 
            kategori        : document.getElementById('kategori').value, 
            deskripsi        : document.getElementById('deskripsi').value,
            tanggal_pinjam        : document.getElementById('tanggal_pinjam').value,
            sampai_dengan        : document.getElementById('sampai_dengan').value,
            kontak_person        : document.getElementById('kontak_person').value,
            telepon        : document.getElementById('telepon').value,
            email     : document.getElementById('email').value
        }

        //add item data to array contactlist
        contactList.push(item)
    }

    // save array into localstorage
    localStorage.setItem('listItem', JSON.stringify(contactList))

    //update table list
    allData()

    //remove form data
    document.getElementById('form').reset()
}