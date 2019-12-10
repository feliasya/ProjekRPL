var fakultas={
    FMIPA:['Teknik Informatika', 'Geofisika', 'Teknik Elektro'],
    FIB:['Sastra Jerman', 'Sastra Inggris', 'Sastra Jepang'],
    FISIP:['Administrasi Bisnis', 'Sosiologi', 'Kesejahteraan Sosial']
}



var main= document.getElementById('main_dropdown');
var sub= document.getElementById('sub_dropdown');


main.addEventListener('change',function()){
    var selected_option = fakultas[this.value];

    while(sub.option.length > 0){
        sub.options.remove(0);
    }

    Array.from(selected_option).forEach(function(el)){
        let option = new Option(el,el);
        sub.appendChild(option);
    }
}