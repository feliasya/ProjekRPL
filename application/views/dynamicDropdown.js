function SelectCat2(){
    removeAllOptions(v_pinjam.peminjaman.Jurusan_Peminjam);
    addOption(v_pinjam.peminjaman.Jurusan_Peminjam, "", "Pilih Jurusan", "");
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Matematika dan Ilmu Pengetahuan Alam')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Matematika", "Matematika");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Fisika", "Fisika");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Kimia", "Kimia");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Biologi", "Biologi");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Statistika", "Statistika");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Teknik Informatika", "Teknik Informatika");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Teknik Elektro", "Teknik Elektro");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Geofisika", "Geofisika");
    }
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Hukum')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Hukum", "Hukum");
    }
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Perikanan dan Ilmu Kelautan')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Perikanan", "Perikanan");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Kelautan", "Kelautan");
    }
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Teknik Geologi')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Geologi", "Geologi");
    }
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Peternakan')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Peternakan", "Peternakan");
    }
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Psikologi')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Psikologi", "Psikologi");
    }
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Kedokteran')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Pendidikan Dokter", "Pendidikan Dokter");
    }
    if(v_pinjam.peminjaman.Fakultas_Peminjam.value == 'Fakultas Ilmu Budaya')
    {   addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Sastra Sunda", "Sastra Sunda");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Sastra Indonesia", "Sastra Indonesia");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Sastra Inggris", "Sastra Inggris");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Sastra Jepang", "Sastra Jepang");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Sastra Rusia", "Sastra Rusia");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Sastra Jerman", "Sastra Jerman");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Sastra Arab", "Sastra Arab");
        addOption(v_pinjam.peminjaman.Jurusan_Peminjam,"Ilmu Sejarah", "Ilmu Sejarah");
    }
    

}
function removeAllOptions(selectbox)
{   var i;
    for(i=selectbox.options.length-1;i>=0;i--)
    {   selectbox.remove(i); }
}
function addOption(selectbox, value, text )
{   var optn = v_pinjam.createElement("OPTION");
    optn.text = text;
    optn.value = value;
    selectbox.options.add(optn);
}