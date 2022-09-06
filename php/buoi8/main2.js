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
    $('.alert_cus').prev().find('a').on('mouseenter',()=>{
        $('.alert').show();
        $('.alert').children().css({
            color: 'red',
            fontWeight: '700'
        });
    }).on('mouseleave',()=>{
        $('.alert').hide();
    });
    $('#re-password').on('keyup',()=>{
        let pass = $('#password').val();
        if(pass !== $('#re-password').val()){
            $('span').html("Incorrect password!!");
            $('span').css('color','red');
        }else{
            $('span').html("Correct password");
            $('span').css('color','red');
        }
    }).on('blur focus',()=>{
        $('span').toggle();
    });
    $('#payment1').on('click',()=>{
        $('#payment1').attr("href","?page=Payment&login=true&jsonstr="+JSON.stringify(arr_cars));
    });
    $('#payment2').on('click',()=>{
        $('#payment2').attr("href","?page=Payment&login=false&jsonstr="+JSON.stringify(arr_cars));
    });
    $('#cus_order').on('click',()=>{
        $('#input_infor').toggle();
    })
});
function searching(str){
    let xmlhtml = new XMLHttpRequest();
    xmlhtml.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("list").innerHTML = this.responseText;
        };
    };
    xmlhtml.open('GET','danhsachxe2.php?p='+str,true);
    xmlhtml.send();
};
const lis = document.getElementById("list");
let sum = 0;
let i = 1;
let boo = true;
let arr_cars=[];
let login= false;
const addToCart = (obj) =>{
    arr_cars.push(obj);
    console.log(arr_cars);
    sum+= obj["price"];
    listCar(arr_cars);
    document.getElementById('total').innerHTML = sum.toLocaleString('en-US');
};
const listCar = (arr) => {
    let j =1;
    while(lis.hasChildNodes()){
        lis.removeChild(lis.firstChild);
    };
    arr.forEach(obj => {
        let indexObj = arr.indexOf(obj);
        let ctr = document.createElement("tr");
        let ctd = document.createElement("td");
        let node = ctd.cloneNode(true);
        //td1
        ctd.innerHTML= j;
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        //td2
        ctd.innerHTML = obj["name"];
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        //td3
        ctd.innerHTML = "<font color='red'>$"+obj["price"].toLocaleString('en-US')+"</font>";
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        //td4
        ctd.innerHTML= "<button class='remove-btn' onclick='remove_btn("+indexObj+")'>&#8861;</button>";
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        //tr
        node = ctr.cloneNode(true);
        lis.appendChild(node);
        j++;
    });
};
const remove_btn = (indexObj) => {
    console.log(indexObj);
    sum-=arr_cars[indexObj]["price"];
    arr_cars.splice(indexObj,1);
    listCar(arr_cars);
    document.getElementById('total').innerHTML = sum.toLocaleString('en-US');
};
const submitForm = (loginStatus)=>{
    alert(loginStatus);
};
const logined =()=>{
    login = true;
};
console.log(login);
// if(login){
//     document.getElementById("logout").style.display='block';
//     document.getElementsByClassName("login").style.display='none';
// }
    // sum += arr[key][1];
    //         ctd.innerHTML= i;
    //         node = ctd.cloneNode(true);
    //         ctr.appendChild(node);
    //         ctd.innerHTML = arr[key][0];
    //         node = ctd.cloneNode(true);
    //         ctr.appendChild(node);
    //         ctd.innerHTML = "<font color='red'>$"+arr[key][1].toLocaleString('en-US')+"</font>";
    //         node = ctd.cloneNode(true);
    //         ctr.appendChild(node);
    //         i++;
    // node = ctr.cloneNode(true);
    // lis.appendChild(ctr);
    // document.getElementById('total').innerHTML = sum.toLocaleString('en-US');
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