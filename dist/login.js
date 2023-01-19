function kirim() {
    let inp_nama = document.getElementById("username").value;
    let inp_pass = document.getElementById("password").value;
    let form = document.getElementById("form");

    if (inp_nama = "user" && inp_pass == "123") {
        form.setAttribute("action", "admin/sidebar_admin.php?url=dashboard")
        alert("Login berhasil");
    }else{
        alert("Login gagal");
    }
}