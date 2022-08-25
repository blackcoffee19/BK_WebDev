<?php
    echo "<div class='list'><table id='pay'><caption><h1>Your order</h1></caption>";
    echo "<tr><th>No</th><th>Name</th><th>Quantity</th><th>Price</th></tr>";
    echo "<script>
    import { arr_cars } from './main.js';
    let i = 1;
    for(let key in arr_cars){
        let ctr = document.createElement('tr');
        let ctd = document.createElement('td');
        let node = ctd.cloneNode(true);
        ctd.innerHTML= i;
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        ctd.innerHTML = Object.keys(arr_cars)[i--];
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        ctd.innerHTML = arr_cars[key][1];
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        ctd.innerHTML = arr_cars[key][1]*arr_cars[key][0];
        node = ctd.cloneNode(true);
        ctr.appendChild(node);
        i++;
        
    };
    node = ctr.cloneNode(true);
    document.getElementById('pay').appendChild(ctr);</script>";
    echo "</table></div>";
?>