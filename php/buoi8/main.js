$(document).ready(()=>{
    $('#butt').on('click',()=>{
        $('#menu').fadeToggle('slow');
    });
    $('#menu').on('mouseleave',()=>{
        $('#menu').hide();
    });
    $('.detail').on('mouseenter',(event)=>{
        $(event.currentTarget).toggleClass('detail-hover');
    }).on('mouseleave',(event)=>{
        $(event.currentTarget).toggleClass('detail-hover');
    });
    $('.nav-item').on('mouseenter',(event)=>{
        $(event.currentTarget).css('font-size','+=5px');
    }).on('mouseleave',(event)=>{
        $(event.currentTarget).css('font-size','-=5px');
    });
    $('#bag').on('click',()=>{
        $('#bag-list').toggle();
    });
    $('.alert').prev().find('a').on('mouseenter',()=>{
        $('.alert').show();
        $('.alert').children().css({
            color: 'red',
            fontWeight: '700'
        });
    }).on('mouseleave',()=>{
        $('.alert').hide();
    });
    $('#re-password').on('keyup',()=>{
        $pass = $('#password').val();
        if($pass !== $('#re-password').val()){
            $('span').html("Incorrect password!!");
            $('span').css('color','red');
        }else{
            $('span').html("Correct password");
            $('span').css('color','red');
        }
    }).on('blur focus',()=>{
        $('span').toggle();
    });
});
function searching(str){
    var xmlhtml = new XMLHttpRequest();
    xmlhtml.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("list").innerHTML = this.responseText;
        };
    };
    xmlhtml.open('GET','danhsachxe.php?p='+str,true);
    xmlhtml.send();
}
let arr = {
    1 : ["Acura NSX 2020",159402],
    2 : ["Chevrolet Camaro ZL1 2022",66045],
    3 : ["Ford Mustang EcoBoost 2022",28865],
    4 : ["Dodge Charger SRT Hellcat 2022",79595],
    5 : ["BMW M8 Competition 2023",131995],
    6 : ["Lamborghini Urus 2022",229495],
    7 : ["Audi RS7 2021",115045],
    8 : ["Bugatti Chiron 2019",2998000],
    9 : ["Chevrolet Corvette 2023",65595],
    10 : ["Ford Mustang EcoBoost 2022",28865],
    11 : ["Chevrolet Camaro 2021",26195],
    12 : ["Audi RS3 2022",59995],
    13 : ["Alfa Romeo Stelvio 2023",47795],
    14 : ["BMW i4 2023",51400],
    15 : ["Maserati MC20 2022",216995],
    16 : ["Chevrolet Corvette Z06 2023",106395],
    17 : ["Chevrolet Blazer EV 2024",44995],
    18 : ["Maserati MC20 2023",217000]
};
const lis = document.getElementById("list");
let i = 1;
let sum = 0;
let boo = true;
let arr_cars={};
const addToCart = (name) =>{
    let ctr = document.createElement("tr");
    let ctd = document.createElement("td");
    let node = ctd.cloneNode(true);
    for (const key in arr) {
        if (name == key) {
            for (let key2 in arr_cars) {
                if (key2 == arr[key][0]){
                    boo = false;
                    break; 
                };
            };
            if(boo){
                arr_cars[arr[key][0]] = [];
                arr_cars[arr[key][0]][0] = arr[key][0];
                arr_cars[arr[key][0]][1] = 1;
            }else{
                arr_cars[arr[key][0]][1]++;
                boo = true;
            }
            sum += arr[key][1];
            ctd.innerHTML= i;
            node = ctd.cloneNode(true);
            ctr.appendChild(node);
            ctd.innerHTML = arr[key][0];
            node = ctd.cloneNode(true);
            ctr.appendChild(node);
            ctd.innerHTML = "<font color='red'>$"+arr[key][1].toLocaleString('en-US')+"</font>";
            node = ctd.cloneNode(true);
            ctr.appendChild(node);
            i++;
        }
    };
    node = ctr.cloneNode(true);
    lis.appendChild(ctr);
    document.getElementById('total').innerHTML = sum.toLocaleString('en-US');
};
console.log(arr_cars);
//export {arr_cars};
// let fs = require('fs');
// fs.writeFile('order.txt',arr_cars,function(err){
//     if(err) throw err;
//     console.log('Save!');
// })
// const func = ()=>{
//     if(document.getElementById("menu").style.display === "none"){
//         document.getElementById("menu").style.display = "flex";
//     }else{
//         document.getElementById("menu").style.display = "none";
//     }
//}