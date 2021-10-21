// === include 'setup' then 'config' above ===
import {Chart} from "chart.js";

const config = {
    type: 'line',
    data: data,
    options: {}
};
let myChart = new Chart(
    document.getElementById('myChart'),
    config
);
