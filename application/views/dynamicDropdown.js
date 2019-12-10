function SelectCat2(){
    removeAllOptions(document.peminjaman.SubCat);
    addOption(document.peminjaman.SubCat, "", "Pilih Jurusan", "");
    if(document.peminjaman.Category.value == 'Desktop')
    {   addOption(document.peminjaman.SubCat,"Acer", "Acer");
        addOption(document.peminjaman.SubCat,"Dell", "Dell");
        addOption(document.peminjaman.SubCat,"Lenovo", "Lenovo");
    }
    if(document.peminjaman.Category.value == 'Laptop')
    {   addOption(document.peminjaman.SubCat,"Asus", "Asus");
        addOption(document.peminjaman.SubCat,"Acer", "Acer");
        addOption(document.peminjaman.SubCat,"Sony Vaio", "Sony Vaio");
    }
    if(document.peminjaman.Category.value == 'Smartphone')
    {   addOption(document.peminjaman.SubCat,"Samsung", "Samsung");
        addOption(document.peminjaman.SubCat,"LG", "LG");
        addOption(document.peminjaman.SubCat,"Sony Xperia", "Sony Xperia");
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