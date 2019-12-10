function SelectCat2(){
    removeAllOptions(document.peminjaman.Jurusan_Peminjam);
    addOption(document.peminjaman.Jurusan_Peminjam, "", "Pilih Jurusan", "");
    if(document.peminjaman.Fakultas_Peminjam.value == 'Fakultas Matematika dan Ilmu Pengetahuan Alam')
    {   addOption(document.peminjaman.Jurusan_Peminjam,"Matematika", "Matematika");
        addOption(document.peminjaman.Jurusan_Peminjam,"Fisika", "Fisika");
        addOption(document.peminjaman.Jurusan_Peminjam,"Kimia", "Kimia");
        addOption(document.peminjaman.Jurusan_Peminjam,"Biologi", "Biologi");
        addOption(document.peminjaman.Jurusan_Peminjam,"Statistika", "Statistika");
        addOption(document.peminjaman.Jurusan_Peminjam,"Teknik Informatika", "Teknik Informatika");
        addOption(document.peminjaman.Jurusan_Peminjam,"Teknik Elektro", "Teknik Elektro");
        addOption(document.peminjaman.Jurusan_Peminjam,"Geofisika", "Geofisika");
    }
    if(document.peminjaman.Fakultas_Peminjam.value == 'Fakultas Hukum')
    {   addOption(document.peminjaman.Jurusan_Peminjam,"Hukum", "Hukum");
    }
    if(document.peminjaman.Fakultas_Peminjam.value == 'Smartphone')
    {   addOption(document.peminjaman.Jurusan_Peminjam,"Samsung", "Samsung");
        addOption(document.peminjaman.Jurusan_Peminjam,"LG", "LG");
        addOption(document.peminjaman.Jurusan_Peminjam,"Sony Xperia", "Sony Xperia");
    }
}
function removeAllOptions(selectbox)
{   var i;
    for(i=selectbox.options.length-1;i>=0;i--)
    {   selectbox.remove(i); }
}
function addOption(selectbox, value, text )
{   var optn = document.createElement("OPTION");
    optn.text = text;
    optn.value = value;
    selectbox.options.add(optn);
}